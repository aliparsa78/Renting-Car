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
                            <li class="breadcrumb-item active">dashboard / Cars / Edit</li>
                        </ol>

                        <h3 class="text-info"><u>Edit Car Info</u></h3>
                        
                       
                        <form action="{{route('cars.update', $car->id)}}" method="POST" class="bg-light p-5 contact-form" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="category_id" id="" class="form-control">
                                            @foreach($categorys as $category)
                                                <option value="{{$category->id}}" >{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" value="{{$car->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Model</label>
                                            <input type="text" class="form-control" name="model" value="{{$car->model}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Color</label>
                                            <input type="text" class="form-control" name="color" value="{{$car->color}}">
                                        </div>
                                    </div>

                                </div> <br>
                                
                            <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Licens_plate</label>
                                            <input type="text" class="form-control" name="license_plate" value="{{$car->license_plate}}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Price per day</label>
                                            <input type="text" class="form-control" name="price_perday"  value="{{$car->Price_per_day}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <img src="{{asset('public/Car/'.$car->image)}}" width="150px" height="100px" alt="sdsdaf">
                                                
                                            </div>
                                            <div class="col-md-8">
                                                <label for="">Image</label>
                                                <input type="file" name="image" class="form-control">

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Available Status</label>
                                        <div class="form-group" style="display: flex; flex-direction: row;">
                                        <div class="radio" style="margin-right: 2rem;">
                                            <input type="radio" name="status" checked>
                                            <label> Active </label>
                                        </div>
                                        <div class="radio">
                                                <input type="radio" name="status">
                                                <label>Deactive </label>
                                        </div>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <br>
                                    <input type="submit" value="Update Car" class="btn btn-success">
                                </form>
                        
                    </div>
                </main>
        @endsection

    </body>
</html>
