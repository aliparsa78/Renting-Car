<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Booking car Admin page</title>
        <base href="{{asset('public')}}">
    </head>
    <body class="sb-nav-fixed">
        @extends('Backend/layouts/main')
        @section('content')
        <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard / Edit service</li>
                        </ol>

                        <h3 class="text-info"><u>Edit Service</u></h3>
                       
                        <form action="{{route('service.update',$service->id)}}" method="POST" class="bg-light p-5 contact-form" enctype="multipart/form-data" >
                                @csrf
                                @method('PUT')
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Service Title</label>
                                            <input type="text" name="title" class="form-control" value="{{$service->title}}">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Service Descriptions</label>
                                            <textarea name="detail" rows="5" cols="60">
                                                {{$service->detail}}
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Service Status</label>
                                            <div class="radio" style="margin-right: 2rem;">
                                                <input type="radio" name="status" value="active" {{$service->status=='active' ? 'checked' :''; }}>
                                                <label> Active </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="status"  value="inactive" {{$service->status=='inactive' ? 'checked' :''; }}>
                                                <label>Inactive </label>
                                            </div>
                                        </div>
                                    </div><br>

                                    
                                    <input type="submit" value="Update Service" class="btn btn-success">
                                </form>
                        
                    </div>
                </main>
        @endsection

    </body>
</html>
