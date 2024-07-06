<x-app-layout>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="/bootstrap-5.0.2-dist/css/bootstrap.css" rel ="stylesheet" >

</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-white">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/dashboard')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                    </li>

                    <li>
                        <a href="{{url('/add_player')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Add PLayer</span> </a>
                    </li>

                    <li>
                        <a href="{{url('/add_product')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Add Product</span> </a>
                    </li>

                    <li>
                        <a href="{{url('/add_stadium')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Add Stadium</span> </a>
                    </li>

                    <li>
                        <a href="{{url('/delete')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Delete PLayer</span> </a>
                    </li>


                    <li>
                        <a href="{{url('/add_blog')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Add Blog</span> </a>
                    </li>

                    <li>
                        <a href="{{url('/add_iconic')}}" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Add Iconic Moments</span> </a>
                    </li>

                    

                        </ul>

                <hr>


            </div>
        </div>
        <div class="col py-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text">{{$total_user}}</p>
                </div>
            </div>
        </div>
        <div class="col py-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Stadiums</h5>
                    <p class="card-text flex-center">{{$total_sta}}</p>
                </div>
            </div>
        </div>

        <div class="col py-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Products</h5>
                    <p class="card-text flex-center">{{$total_product}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
            
            

        </div>
    </div>
</div>
</x-app-layout>