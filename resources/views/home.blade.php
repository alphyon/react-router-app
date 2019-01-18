@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">

                <div class="card">
                    <div class="card-header"><h4 class="text-center">My Profile</h4></div>

                    <div class="card-body">
                        <a href="/userdetails"><h1 class="text-center"><i class="fa fa-user"></i></h1></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h4 class="text-center">My Store</h4></div>

                    <div class="card-body">
                        <a href="/userdetails"><h1 class="text-center"><i class="pg-home"></i></h1></a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header"><h4 class="text-center">Seller Reviews</h4></div>

                    <div class="card-body">
                        <a href="/adminprofile"><h1 class="text-center"><i class="pg-home"></i></h1></a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">Productos</h4></div>

                    <div class="card-body">
                        <a href="/product"><h1 class="text-center"><i class="fa fa-dropbox"></i></h1></a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">Transacctions</h4></div>

                    <div class="card-body">
                        <a href="/viewtransacctions"><h1 class="text-center"><i class="fa fa-shopping-cart"></i></h1></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
