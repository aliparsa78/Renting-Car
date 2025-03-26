<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Booking car Admin page</title>
         <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    


        <base href="../public">
    </head>
    <body class="sb-nav-fixed">

        @extends('Backend/layouts/main')
        @section('content')
        
        <main>
        
                <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard/Cars</li>
                        </ol>
                        
                        <div class="card-body">
                                <table id="datatablesSimple" class="text-center">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Car Category</th>
                                            <th>Car Name</th>
                                            <th>Color</th>
                                            <th>Model</th>
                                            <th>Price Per day</th>
                                            <th>Licens Plate</th>
                                            <th>Image</th>
                                            <th>Car Status</th>
                                            
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $id = 1; ?>
                                        @foreach($cars as $car)
                                        <tr>
                                            <td>{{$id++}}</td>
                                            <td>{{$car->category->name}}</td>
                                            <td>{{$car->name}}</td>
                                            <td>{{$car->color}}</td>
                                            <td>{{$car->model}}</td>
                                            <td>{{$car->Price_per_day}}$</td>
                                            <td>{{$car->license_plate}}</td>
                                            <td>
                                                <img src="{{asset('../Car/'.$car->image)}}" width="150px" alt="">
                                            </td>
                                            <td>
                                                <h6 class="{{$car->available_status=='active' ? 'text-success' : 'text-danger'}}">{{$car->available_status}}</h6>
                                            </td>
                                            <td>
                                                <a href="{{route('cars.edit',$car->id)}}" class="btn btn-info text-white"> Edit </a>
                                            </td>
                                            <td>
                                                <form action="{{route('cars.destroy',$car->id)}}" method="POST" id="deleteForm">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button"  onclick="confirmDelete()" class="btn btn-danger">Delete</button>
                                                    <!-- <input type="submit"  class="btn btn-danger"  value="Delete"  > -->
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                    </div>

                    
                </main>
            

            
        @endsection
       
        

    </body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="../js/jquery.min.js"></script>

</html>
