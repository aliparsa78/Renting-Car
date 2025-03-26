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
                            <li class="breadcrumb-item active">Dashboard / Add new car</li>
                        </ol>

                        <h3 class="text-info"><u>Add New Car</u></h3>
                       
                        <form action="{{route('cars.store')}}" method="POST" class="bg-light p-5 contact-form" enctype="multipart/form-data">
                                @csrf
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
                                            <label for="">Car Name</label>
                                            <input type="text" name="name" class="form-control" placeholder="Car Name">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Car Model</label>
                                            <input type="text" class="form-control" name="model" placeholder="Car Model">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Color</label>
                                            <input type="text" class="form-control" name="color" placeholder="Car Color">
                                        </div>
                                    </div>

                                </div> <br>
                                
                            <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Licens_plate</label>
                                            <input type="text" class="form-control" name="license_plate" placeholder="Licens Plate">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Price per day</label>
                                            <input type="text" class="form-control" name="price_perday"  placeholder="Price Per Day">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">Available Status</label>
                                        <div class="form-group" style="display: flex; flex-direction: row;">
                                        <div class="radio" style="margin-right: 2rem;">
                                            <input type="radio" name="status" value="active" checked>
                                            <label> Active </label>
                                        </div>
                                        <div class="radio">
                                                <input type="radio" name="status"  value="inactive">
                                                <label>Inactive </label>
                                        </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                <br>
                                    <input type="submit" value="Add Car" class="btn btn-success">
                                </form>
                        
                    </div>
                </main>
        @endsection

    </body>
</html>
