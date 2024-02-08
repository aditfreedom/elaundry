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
                                <i class="fa fa-shopping-bag fa-2x"></i>                            </a>

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
            
            
            <form action="{{url('/userProfile/'.$id_user)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                @foreach ($profile as $data)
                
                <p class="fw-bold">Foto Profil</p>
                <hr>
      
                <div class="form-group">
                      @php
                          if ($data->foto === null) {
                              $path="noimage.jpg";                                        
                          } else {
                              $path="/storage/".$data->foto;                                        
                          }
                      @endphp
                     
                  <img src="{{url($path)}}" class="rounded-circle mx-auto d-block mb-2 border" id="photopreview" style="width:200px;height:200px;">
                  <input type="hidden" name="foto_lama" class="form-control" value="{{$data->foto}}">
                  @endforeach
                  <input type="file" name="foto" class="form-control mx-auto d-block" onchange="showPreview(event);">
             </div>
             <br><br>
      
             @php
             $datarole=Auth::user()->role;   
             $hidden_class="";
             if ($datarole==1) {
              $hidden_class="hidden";
             }
            @endphp
             @foreach ($profile as $data)
                <p class="fw-bold">Data Diri</p>
                <hr>
                <div class="form-group mb-2">
                  <label class="font-weight-bold">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" maxlength="200" value="{{$data->nama}}">
                </div>
                <div class="form-group mb-2">
                  <label class="font-weight-bold">Tempat Lahir</label>
                  <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" maxlength="200" value="{{$data->tempat_lahir}}">
                </div>
                <div class="form-group mb-2">
                  <label class="font-weight-bold">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{$data->tanggal_lahir}}">
                </div>
                <div class="form-group mb-2">
                  <label class="font-weight-bold">E-mail</label>
                  <input type="email" name="email" class="form-control bg-secondary text-light" placeholder="E-mail" maxlength="200" value="{{$data->email}}" readonly>
                </div>
                <div class="form-group mb-2">
                  <label class="font-weight-bold">No HP</label>
                  <input type="number" name="no_hp" class="form-control" placeholder="No HP" maxlength="15" value="{{$data->no_hp}}">
                </div>
                <div class="form-group mb-2">
                  <label class="font-weight-bold">Alamat</label>
                  <textarea name="alamat" class="form-control" cols="30" rows="10">{{$data->alamat}}</textarea>
                </div>
                <br>  
               
                <div class="form-group mb-2">
                  <label class="font-weight-bold">Password</label>
                  <input type="hidden" name="password_lama" class="form-control" placeholder="Password" value="{{$data->password}}" maxlength="200">
                  <input type="password" name="password" class="form-control" placeholder="Kosongkan Jika Tidak Mengubah Password" maxlength="200">
              </div>
                @endforeach
                <div hidden class="form-group mb-2" {{$hidden_class}}>
                    <label class="font-weight-bold">Role</label>
                    <select name="role" class="form-control">
                      @foreach ($profile as $item)
                      @php
                          $roles = $data->role;
                          $tampil_role = "";
                          if ($roles==0) {
                            $tampil_role = "Super Admin";
                          }elseif ($roles==1) {
                            $tampil_role = "Admin";
                          }else {
                            $tampil_role = "User";
                          }
                      @endphp
                      <option selected hidden value="{{$data->role}}">{{$tampil_role}}</option>
                      @endforeach
                      <option value="0">Super Admin</option>
                      <option value="1">Admin</option>
                      <option value="2">User</option>
                    </select>
                </div>
            <div class="form-group mt-5">
              <button type="submit" class="btn btn-primary form-control">Simpan</button>
            </div>
        </form>
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