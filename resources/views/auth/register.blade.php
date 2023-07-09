@extends('template.auth')
@section('title', 'Register')
@section('content')
<style>
    #btn_submit {
        width: 100%;
        transition: all 0.5s ease-in-out;
    }

    #btn_submit.isLoading {
        width: 50px;
        border-radius: 100vw;
    }

    .hide {
        display: none;
    }

    .toggle-password.position-absolute,
    .toggleConfirmPassword.position-absolute {
        top: 50%;
        transform: translateY(-50%);
        right: 35px;
        cursor: pointer;
        z-index: 2;
    }



</style>

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- sweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/limonte-sweetalert2/11.7.0/sweetalert2.all.js"></script>

    <link href="{{ asset('style/css/stylelogin.css') }}" rel="stylesheet">
    <div class="wavestop">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,224L48,186.7C96,149,192,75,288,42.7C384,11,480,21,576,74.7C672,128,768,224,864,256C960,288,1056,256,1152,234.7C1248,213,1344,203,1392,197.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
            </path>
        </svg>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="glassmorphism card-signin my-5">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                                    <img src="img/logo/sip.png" width="100" height="100" class="rounded-circle mx-auto"
                                        alt="logo" style="background-color: white;">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                              <h5 class="card-title text-center" style="font-weight: bold">JJKSuite </h5>
                              <p class="text-center"><i>Step into a world of sorcery at JJKSuite: <br>Where Hotel Reservations transcend reality</i></p> <br>
                            </div>
                        </div>
                        <form onsubmit="return disableButton()" class="form-signin" action="/postRegister" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                  <div class="form-label-group">
                                      <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" required>
                                      <label for="name">Name</label>
                                      @error('name')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                  <div class="form-label-group">
                                      <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                          placeholder="Email" value="{{ old('email') }}" required autofocus>
                                      <label for="email">Email</label>
                                      @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                  <!-- password -->
                                  <div class="form-label-group position-relative">
                                      <input type="password" id="password" name="password" autocomplete="new-password"
                                          class="form-control @error('password') is-invalid @enderror" placeholder="Password" value="{{ old('password') }}"
                                          required>
                                      <label for="password">Password</label>
                                      <i class="bi bi-eye-slash-fill toggle-password position-absolute" id="togglePassword"></i>

                                      @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>


                                  <!-- confirm password -->
                                  <div class="form-label-group position-relative">
                                      <input type="password" id="confirmPassword" name="confirmPassword" autocomplete="new-password"
                                          class="form-control @error('confirmPassword') is-invalid @enderror" placeholder="Password confirmation"
                                          value="{{ old('confirmPassword') }}" required>
                                      <label for="confirmPassword">Confirm Password</label>
                                      <i class="bi bi-eye-slash-fill toggleConfirmPassword position-absolute" id="toggleConfirmPassword"></i>

                                      @error('confirmPassword')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                  </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button class="btn btn-lg btn-primary text-white btn-block text-uppercase"
                                        type="submit">Register</button>
                                </div>
                            </div>
                            <hr class="my-4">
                            <p class="text-center">Already have an account? <a href="/login">Log in</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wavesbottom">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0099ff" fill-opacity="1"
                d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,122.7C672,149,768,235,864,234.7C960,235,1056,149,1152,117.3C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

    <script>
        function disableButton() {
            $("#loading_submit").removeClass("hide");
            $("#text_submit").addClass("hide");
            $("#btn_submit").addClass("isLoading").attr('disabled', 'disabled');
        }
    </script>

    <!-- Toggle Password -->
    <script>
            const togglePassword = document.querySelector("#togglePassword");
            const password = document.querySelector("#password");

            togglePassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = password.getAttribute("type") === "password" ? "text" : "password";
                password.setAttribute("type", type);

                // toggle the icon
                this.classList.toggle("bi-eye");
            });

            const toggleConfirmPassword = document.querySelector("#toggleConfirmPassword");
            const confirmPassword = document.querySelector("#confirmPassword");

            toggleConfirmPassword.addEventListener("click", function () {
                // toggle the type attribute
                const type = confirmPassword.getAttribute("type") === "password" ? "text" : "password";
                confirmPassword.setAttribute("type", type);

                // toggle the icon
                this.classList.toggle("bi-eye");
            });

            // prevent form submit
            /*
            const form = document.querySelector("form");
            form.addEventListener('submit', function (e) {
                e.preventDefault();
            });*/
        </script>
@endsection
