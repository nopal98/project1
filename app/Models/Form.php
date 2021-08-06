<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Form extends Model
{
    public $timestamps = false;
    protected $table = 'Form';
    use HasFactory, Notifiable;
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $fillable = [
        'nama',
        'usia',
        'kota',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'form_submited_at' => 'datetime',
    ];
}
