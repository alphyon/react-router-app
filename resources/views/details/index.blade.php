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
                    <div class="card-header"><h4 class="text-center">My Profile</h4></div>
                    <div class="card-body">
                        <form role="form" id="form" method="post" action="{{ route('shop.store') }}">
                            @csrf

                            <div class="form-group form-group-default ">
                                <label>First Name:</label>
                                <input type="text" class="form-control" required
                                       value=""
                                       name="first_name">
                            </div>
                            <div class="form-group form-group-default ">
                                <label>Last Name:</label>
                                <input type="text" class="form-control" required
                                       value=""
                                       name="last_name">
                            </div>
                            ​

                            <div class="form-group form-group-default">
                                <label>Testimony:</label>
                                <textarea name="testimony_shop"
                                          class="form-control"></textarea>
                            </div>

                            <div class="form-group form-group-default">
                                <label>About shop:</label>
                                <textarea name="about_shop"
                                          class="form-control"></textarea>
                            </div>

                            ​
                            <div class="form-group form-group-default">
                                <label>Stripe ID</label>
                                <input type="text" class="form-control" name="stripe_id"
                                       value=""/>
                            </div>
                            ​ <input type="hidden" name="seller_id"
                                     value=""/>
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
                                                @if($data != null)
                                                    <img src="{{$data->image}}" alt="store img"
                                                         class="img-responsive padding-5">
                                                    <input type="hidden" name="imgurl[]" value="{{$data->image}}">
                                                @endif

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
        <script src="https://www.gstatic.com/firebasejs/5.8.0/firebase.js"></script>
        <script src="{!! asset("js/upload.js")!!}" type="text/javascript"></script>
    </div>
@endsection
