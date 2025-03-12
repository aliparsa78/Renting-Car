<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Car Category</title>
        <base href="{{asset('public')}}">
    </head>
    <body class="sb-nav-fixed">
        @extends('Backend/layouts/main')
        @section('content')
        <main>
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard/Car Category / Edit</li>
                        </ol>
                       
                        <form action="{{route('car_category.update',$category->id)}}" method="POST"  class="bg-light p-5 contact-form">
                            @method('PUT')
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                </div>
                            </div>
                            <br>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Category Status</label>
                                   
                                    <div class="radio">
                                        <label>Active</label>
                                            <input type="radio" name="status" value="1" <?php if ($category->available_status ==1) {echo 'checked'; } ?> >
                                    </div>
                                        <div class="radio">
                                        <label>Deactive</label>
                                            <input type="radio" name="status" value="0" <?php if ($category->available_status == 0 ) {echo 'checked'; } ?>>
                                    </div>

                                </div>
                            </div> <br>
                                <input type="submit" class="btn btn-info text-white" value="Save Category">
                        </form>
                        
                    </div>
                </main>
        @endsection

    </body>
</html>
