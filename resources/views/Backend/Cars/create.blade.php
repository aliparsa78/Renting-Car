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
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                       
                        <form action="#" class="bg-light p-5 contact-form">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Car Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="model" placeholder="Car Model">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="color" placeholder="Car Color">
                                        </div>
                                    </div>

                                </div> <br>
                                
                            <div class="row">
                                <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="licens_plate" placeholder="Licens Plate">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="price"  placeholder="Price Per Day">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="">Available Status</label>
                                        <div class="form-group" style="display: flex; flex-direction: row;">
                                        <div class="radio" style="margin-right: 2rem;">
                                            <input type="radio" name="optradio" checked>
                                            <label> Active </label>
                                        </div>
                                        <div class="radio">
                                                <input type="radio" name="optradio">
                                                <label>Deactive </label>
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
