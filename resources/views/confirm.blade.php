<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>E-Laundry Kabupaten Bireuen</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{url('homepage/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{url('homepage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{url('homepage/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{url('homepage/css/style.css')}}" rel="stylesheet">

        <link rel="icon" type="image/x-icon" href="{{url('favicon.png')}}">

    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between " >
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">Blang Bladeh, Kabupaten Bireuen - Aceh</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">admin@elaundry.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="{{url('')}}" class="navbar-brand"><h1 class="text-primary display-6">E-Laundry</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="{{url('/')}}" class="nav-item nav-link {{$page == 'Home'?'active':''}}">Home</a>
                            <a href="{{url('/store')}}" class="nav-item nav-link {{$page == 'Store'?'active':''}}">Laundry</a>
                            <a href="{{url('/profile')}}" class="nav-item nav-link {{$page == 'Profile'?'active':''}}">Profil</a>
                            <a href="{{url('logout')}}" class="nav-item nav-link">Logout</a>
                        </div>

                        <div class="d-flex m-3 me-0">
                            <button hidden class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                            <a href="{{url('orderan')}}" class="position-relative me-4 my-auto">
                                <i class="fa fa-shopping-bag fa-2x"></i>
                            </a>

                            <a href="{{url('profile')}}" class="my-auto">
                                <i class="fas fa-user fa-2x"></i> {{Auth::user()->nama}}
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Hero Start -->
        <div class="container-fluid py-5 mb-5 hero-header">
            <div class="container container-fluid">
                <div class="container-xxl flex-grow-1">
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Gagal Update Data!</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('success'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                  @if (is_array(session('success')))
                                        @foreach (session('success') as $message)
                                            {{ $message }}
                                        @endforeach
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                      </button>
                                    @else
                                        {{ session('success') }}
                                    @endif
                                </div>
                            @endif
                                
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="row g-4">

                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <div class="rounded position-relative fruite-item">
                                                        @foreach ($paket as $data)
                                                        <div class="fruite-img">
                                                            <img src="{{url('storage/'.$data->foto)}}" class="img-fluid rounded-top" alt="">
                                                        </div>
                                                        @endforeach                               

                                                        <div class="p-4 border border-secondary border-top-0 rounded-bottom ">
                                                            @foreach ($laundry as $data)
                                                            <h5>{{$data->nama}}</h5>
                                                            @endforeach                               
                                                            @foreach ($paket as $data)
                                                            <h5>{{$data->nama_paket}}</h5>
                                                            <p class="btn btn-success fw-bold">Rp. {{$data->harga}}/Kg</p>
                                                            @endforeach                               
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 col-xl-6">
                                                    <h5>Konfirmasi Terakhir Order Paket Laundry.</h5>
                                                    <hr>
                                                    <h6>Estimasi Berat Cucian : </h6><p class="btn btn-danger">{{$berat}} Kg</p>
                                                    <h6>Estimasi Total Biaya* : </h6>
                                                    <p class="btn btn-danger">Rp. {{$total}}</p>

                                                    <p class="text-danger" style="font-size:9px">* Harga akan berubah menjadi harga fixed ketika sudah dilakukan penjemputan dan penimbangan ulang cucian.</p>
                                                    <form class="mt-0" action="{{url('/order')}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <br>
                                                        <div class="form-group" hidden>
                                                            <label class="font-weight-bold">ID User</label>
                                                            <input type="number" id="id_user" name="id_user" class="form-control" placeholder="Berat Cucian" value="{{$id_user}}" maxlength="200">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label class="font-weight-bold">ID Toko</label>
                                                            <input type="number" id="id_toko" name="id_toko" class="form-control" placeholder="Berat Cucian" value="{{$id_toko}}" maxlength="200">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label class="font-weight-bold">ID Paket</label>
                                                            <input type="number" id="id_paket" name="id_paket" class="form-control" placeholder="Berat Cucian" value="{{$id_paket}}" maxlength="200">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label class="font-weight-bold">Estimasi Berat Cucian (Kg)</label>
                                                            <input type="number" id="berat" name="berat" class="form-control" placeholder="Berat Cucian" value="{{$berat}}" maxlength="200">
                                                        </div>
                                                        <div class="form-group" hidden>
                                                            <label class="font-weight-bold">Total Biaya</label>
                                                            <input type="text" id="total" name="total" class="form-control" placeholder="Total Biaya" maxlength="200" value="{{$total}}">
                                                        </div>
                                                        <hr>
                                                        <div class="form-group mt-0">
                                                          <label class="fw-bold text-black">Metode Pembayaran :</label>
                                                          <select name="payment" class="form-control select2"
                                                          data-allow-clear="true">
                                                              <option value="Cash">Cash</option>
                                                          </select>
                                                      </div>
                                                      <div class="form-group" hidden>
                                                        <label class="font-weight-bold">Status</label>
                                                        <select name="status" class="form-control select2"
                                                        data-allow-clear="true">
                                                            <option selected value="Antrian">Antrian</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <br>
                                                        <h5>Apakah anda yakin ingin melakukan orderan?</h5>
                                                      <button type="submit" class="btn btn-primary form-control">Order</button>
                                                    </div>
                                                </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            
                          
                </div>
    </div>
        </div>
        <!-- Hero End -->


 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
    <div class="container py-5">
        <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="#">
                        <h1 class="text-primary mb-0">E-Laundry</h1>
                        <p class="text-secondary mb-0">Kabupaten Bireuen</p>
                    </a>
                </div>
                <div class="col-lg-6">
                    
                </div>
                <div class="col-lg-3">
                    <div class="d-flex justify-content-end pt-3">
                        <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                <span class="text-light"><a href="{{url('')}}"><i class="fas fa-copyright text-light me-2"></i>E-Laundry Kabupaten Bireuen</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="" href="#">Administrator</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('homepage/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('homepage/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('homepage/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{url('homepage/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('homepage/js/main.js')}}"></script>
    <script>
        function showPreview(event){
           if(event.target.files.length > 0){
               var src = URL.createObjectURL(event.target.files[0]);
               var preview = document.getElementById("photopreview");
               preview.src = src;
               preview.style.display = "block";
           }
           }
    </script>

</body>

</html>