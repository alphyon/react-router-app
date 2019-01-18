@extends('layouts.app')
@section('content')

    <div class="container" xmlns="http://www.w3.org/1999/html">
        <div class="row justify-content-center">

            @if(session()->get('success'))
                <div class="col-md-10">
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                </div>
            @endif
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header"><h4 class="text-center">My Store Transacctions</h4></div>
                    <div class="card-body">
                        <table class="table table-detailed">
                            <tr>
                                <th>Client</th>
                                <th></th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th></th>
                            </tr>
                            @if($count==0)
                                <h4>Don have products register</h4>
                                <br>
                            @else
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="/product/{{$product->id}}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="/product/{{$product->id}}/edit" class="btn btn-success"><i class="fa fa-pencil"></i></a>
                                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://www.gstatic.com/firebasejs/5.8.0/firebase.js"></script>
        <script src="{!! asset("js/upload.js")!!}" type="text/javascript"></script>
    </div>
@endsection
