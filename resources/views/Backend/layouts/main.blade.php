<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="backend/css/styles.css" rel="stylesheet" />
        <link href="backend/css/bootstrap.mim.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>    
   
    </head>
    <body class="sb-nav-fixed">
        @include('Backend/layouts/header')
        <!-- Navbar -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('Backend/layouts/Sidebar')
            </div>
            <div id="layoutSidenav_content">
                    
                @yield('content')
                @if(session('success'))
                <script>
                    Swal.fire({
                        title:'success',
                        text:"{{session('success')}}",
                        icon:'success',
                        showConfirmButton:false,
                        timer: 3000,
                    })
                </script>

            @endif
            @if(session('danger'))
                <script>
                    Swal.fire({
                        title:'Deleted',
                        text:"{{session('danger')}}",
                        icon:'success',
                        timer:3000,
                        showConfirmButton:false,
                        color:'green',

                    })
                </script>
            @endif
            <script>
                function confirmDelete(){
                    Swal.fire({
                        title:'Are you sure?',
                        icon:'warning',
                        text:'This information will delete permenantelly!',
                        showCancelButton: true,
                        cancelButtonColor:'#3085d6',
                        confirmButtonColor:'red',
                        color:'red',
                    }).then((result)=>{
                        if(result.isConfirmed){
                            document.getElementById('deleteForm').submit();
                        }
                    })
                }
            </script>
                @include('Backend/layouts/footer')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../backend/js/scripts.js"></script>
        <script src="../backend/js/bootstrap.min.js"></script>
        <script src="../backend/js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="../backend/assets/demo/chart-area-demo.js"></script>
        <script src="../backend/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="backend/js/datatables-simple-demo.js"></script>
    </body>
</html>
