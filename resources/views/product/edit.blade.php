@extends('layouts.app')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.4.2/bootstrap-tagsinput.min.js"></script>
</head>
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
                    <div class="card-header"><h4 class="text-center">Add Product to my Store</h4></div>
                    <div class="card-body">
                        <form role="form" id="form" method="post" action="{{ route('product.update', $data->id) }}">
                            @method('PATCH')
                        @csrf

                            <div class="form-group form-group-default ">
                                <label>Name:</label>
                                <input type="text" class="form-control" required
                                       value="{{$data != null ? $data->name:""}}"
                                       name="name">
                            </div>
                            ​

                            <div class="form-group form-group-default">
                                <label>Description:</label>
                                <textarea name="description"
                                          class="form-control">{{$data != null ? $data->description:""}}</textarea>
                            </div>

                            <div class="form-group form-group-default">
                                <label>Category:</label>
                                <select name="category" id="">
                                    @foreach($categories as $category)
                                        @if($category->id == $data->category_id)
                                        <option selected value="{{$category->id}}">{{$category->name}}</option>
                                            @elseif($category->id != $data->category_id)
                                            <option  value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Price:</label>
                                <input type="text" class="form-control" required
                                       value="{{$data != null ? $data->price:""}}"
                                       name="price">
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Quantity:</label>
                                <input type="text" class="form-control" required
                                       value="{{$data != null ? $data->quantity:""}}"
                                       name="quantity">
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Tags:</label>
                                <input id="tags" type="text" class="form-control" required
                                       value="{{$data != null ? $data->tags:""}}"
                                       name="tags"
                                       data-role="tagsinput">

                            </div>
                            <div class="form-group form-group-default ">
                                <label>Shipping:</label>
                                <input type="text" class="form-control" required
                                       value="{{$data != null ? $data->shipping:""}}"
                                       name="shipping">
                            </div>
                            <input type="hidden" class="form-control" required
                                   value="{{$data != null ? $data->seller_id:""}}"
                                   name="seller_id">
                            <div class="form-group form-group-default">
                                <input
                                    type="file"
                                    onchange="previewFile(event)"
                                    id="files"
                                    name="files[]"
                                    multiple
                                />
                                <br>
                                <br>
                                <div class="container">
                                    <div class="item">
                                        <div id="view">
                                            <div id="view2">

                                                    @foreach($images as $img)
                                                    <img src="{{$img->image}}" alt="store img"
                                                         class="img-responsive padding-5">
                                                    <input type="hidden" name="imgurl[]" value="{{$img->image}}">
                                                    <input type="hidden" name="idImgurl[]" value="{{$img->id}}">
                                                    @endforeach


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            ​
                            <div class="row justify-content-center">
                                <div class="col-4">
                                    <button type="submit" onclick="clearImgTemp()" class="btn btn-success btn-block" >Edit</button>

                                </div>
                                <div class="col-4">
                                    <button type="button" onclick="javascript:history.back();deleteItems()" class="btn btn-danger btn-block">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://www.gstatic.com/firebasejs/5.8.0/firebase.js"></script>
    <script src="{!! asset("js/upload.js")!!}" type="text/javascript"></script>
@endsection
