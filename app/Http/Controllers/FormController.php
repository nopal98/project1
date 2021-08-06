<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
use App\Models\Form;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function daftar(Request $request)
    {
        // Validation untk preventif XSS walaupun di html sudah di set rules.
        $rules = [
            'nama'                  => 'required|regex:/^[\pL\s\-]+$/u',
            'usia'                 => 'required|integer|max:99',
            'kota'              => 'required|alpha'
        ];

        $messages = [
            'nama.required'         => 'Nama Lengkap wajib diisi',
            'nama.alpha'         => 'Form nama harus merupakan Alphabet (A-Z)',
            'usia.required'         => 'Usia wajib diisi',
            'usia.integer'         => 'Form usia harus berupa angka',
            'kota.required'         => 'Kota wajib diisi',
            'kota.alpha'         => 'Form kota harus merupakan Alphabet (A-Z)'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $form = new Form;
        $form->nama = ucwords(strtolower($request->nama));
        $form->usia = $request->usia;
        $form->kota = ucwords($request->kota);
        $form->form_submited_at = \Carbon\Carbon::now();
        $simpan = $form->save();

        if ($simpan) {
            Session::flash('success', 'Form sudah terkirim, Terima kasih');
            return redirect()->route('form');
        } else {
            Session::flash('errors', ['' => 'Form gagal terkirim']);
            return redirect()->route('form');
        }
    }
}
