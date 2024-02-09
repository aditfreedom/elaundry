<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{url('admin/assets')}}"
  data-template="{{url('admin/html/vertical-menu-template')}}">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

      <title>{{$page}} - E-Laundry</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/fonts/materialdesignicons.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/fonts/fontawesome.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/rtl/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/rtl/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{url('admin/assets/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/node-waves/node-waves.css')}}" />
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/typeahead-js/typeahead.css')}}" />
    <!-- Vendor -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="{{url('admin/assets/vendor/css/pages/page-auth.css')}}" />
    <!-- Helpers -->
    <script src="{{url('admin/assets/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="admin/assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="admin/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
          <!-- Login -->
          <div class="card p-2">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
                <span class="app-brand-logo demo">
                  <span style="color: #666cff">
                    <img class="img-fluid mx-auto d-block" src="{{url('favicon.png')}}" width="150px">
                  </span>
                </span>
            </div>
            <!-- /Logo -->

            <div class="card-body mt-2">
              <h4 class="mb-2 fw-semibold text-center">E-Laundry Kabupaten Bireuen</h4>
              <p class="mb-4 text-center">Registrasi Pengguna</p>

              @if ($errors->any())
              @foreach ($errors->all() as $error)
                  <div class="wrap-input100 ">
                      <p class="text-danger text-center font-weight-bold text-danger">{{ $error }}</p>
                  </div>
              @endforeach
          @endif

              <form class="mb-3" action="{{url('registration')}}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label class="font-weight-bold">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama" maxlength="200" value="{{old('nama')}}">
                </div>
                <div class="form-group mb-2">
                    <label class="font-weight-bold">E-mail</label>
                    <input type="email" name="email" class="form-control" placeholder="E-mail" maxlength="200" value="{{old('email')}}">
                </div>
                <div class="form-group mb-2">
                    <label class="font-weight-bold">No HP</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="No HP" maxlength="15" value="{{old('no_hp')}}" minlength="10">
                </div>
                <div class="form-group mb-3">
                    <label class="font-weight-bold">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" maxlength="200">
                </div>
                <div hidden class="form-group mb-2">
                    <label class="font-weight-bold">Role</label>
                    <select name="role" class="form-control">
                        <option selected value="2">User</option>
                    </select>
                </div>
                <div class="form-group mb-3 mt-2">
                  <button class="btn btn-primary d-grid w-100 form-control" name="login">Login</button>
                </div>
                <p class="text-center">
                  <span>Sudah punya akun?</span>
                  <a href="{{url('login')}}">
                    <span>Login disini</span>
                  </a>
                </p>
                <p class="text-center">
                  <a href="{{url('/')}}">
                    <span>Kembali Ke Halaman Utama</span>
                  </a>
                </p>
              </form>
        </div>
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{url('admin/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{url('admin/assets/vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/node-waves/node-waves.js')}}"></script>

    <script src="{{url('admin/assets/vendor/libs/hammer/hammer.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/i18n/i18n.js')}}"></script>
    <script src="{{('admin/assets/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <script src="{{url('admin/assets/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{url('admin/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
    <script src="{{url('admin/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>

    <!-- Main JS -->
    <script src="{{url('admin/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{url('admin/assets/js/pages-auth.js')}}"></script>
  </body>
</html>
