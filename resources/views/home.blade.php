<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h3>Dashboard</h3>
                </div>
                <div class="card-body">
                    <h5>Selamat datang di halaman dashboard, <strong>{{ Auth::user()->name }}</strong></h5>
                    <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
            <!-- Searh Button -->

            <div class="row d-flex justify-content-center">

                <div class="col-md-7">
                    <div class="input-group mb-2 mt-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Film</div>
                        </div>
                        <input type="text" id="keyword" class="form-control" id="inlineFormInputGroup" placeholder="Cari Film Apa?" autocomplete="off" autofocus>
                    </div>
                </div>
                <div class="col-md-2 mt-2">
                    <button type="submit" class="btn btn-primary mb-2" id="search">Search</button>
                </div>

            </div>

            <!-- End Searh Button -->
        </div>
    </div>



    <div class="container">
        <div class="row my-5 text-center">
            <div class="col-sm-12">
                <h1 class="text-title">Movie List</h1>
            </div>
        </div>

        <div class="row mt-5" id="list-movie"></div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detailMovie">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Movie Details.</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="template/js/script.js"></script>

</body>

</html>