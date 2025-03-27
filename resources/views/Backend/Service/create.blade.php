<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Booking car Admin page</title>
        <base href="../public">
    </head>
    <body class="sb-nav-fixed">
        @extends('Backend/layouts/main')
        @section('content')
        <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard / Add new service</li>
                        </ol>

                        <h3 class="text-info"><u>Add New Service</u></h3>
                       
                        <form action="{{route('service.store')}}" method="POST" class="bg-light p-5 contact-form" enctype="multipart/form-data" >
                                @csrf
                                
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Service Title</label>
                                            <input type="text" name="title" class="form-control" placeholder="Service Title">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Service Descriptions</label>
                                            <textarea name="detail" rows="5" cols="60">

                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Service Status</label>
                                            <div class="radio" style="margin-right: 2rem;">
                                                <input type="radio" name="status" value="active" checked>
                                                <label> Active </label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="status"  value="inactive">
                                                <label>Inactive </label>
                                            </div>
                                        </div>
                                    </div><br>

                                    
                                    <input type="submit" value="Add Car" class="btn btn-success">
                                </form>
                        
                    </div>
                </main>
        @endsection

    </body>
</html>
