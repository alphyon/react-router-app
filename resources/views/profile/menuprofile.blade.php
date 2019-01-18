@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">Store details</h4></div>

                    <div class="card-body">
                        <a href="/shop"><h1 class="text-center"><i class="pg-home"></i></h1></a>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">Settings</h4></div>

                    <div class="card-body">
                        <a href="/adminproduct"><h1 class="text-center"><i class="fa fa-gears"></i></h1></a>
                    </div>
                </div>

            </div>


        </div>
    </div>


@endsection
