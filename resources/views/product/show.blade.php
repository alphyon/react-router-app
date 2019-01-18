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
                    <div class="card-header"><h4 class="text-center">{{$product->name}}</h4></div>
                    <div class="card-body">
                        <table class="table table-detailed">
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Category</th>
                                <th>tags</th>
                            </tr>


                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->quantity}}</td>
                                        <td>{{$category}}</td>
                                        <td>{{$product->tags}}</td>
                                    </tr>



                        </table>
                        <br><br>
                        <div class="row">
                            @foreach($images as $image)

                                <div class="col-2 offset-1"><img src="{{$image->image}}" class="img-responsive" height="100" alt=""></div>

                            @endforeach
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                            <button type="button" onclick="javascript:history.back();deleteItems()" class="btn btn-success btn-sm"><i class="fa fa-reply"></i></button>
                            </div>
                            <a href="/product/{{$product->id}}/edit" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i></a>


                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script src="https://www.gstatic.com/firebasejs/5.8.0/firebase.js"></script>
        <script src="{!! asset("js/upload.js")!!}" type="text/javascript"></script>
    </div>
@endsection
