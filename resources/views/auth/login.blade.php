
<!doctype html>
<html lang="en" class="minimal-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/bootstrap-extended.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('backend/assets/css/icons.css')}}" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="{{asset('backend/assets/css/pace.min.css" rel="stylesheet')}}" />

    <title>{{ config('app.name', 'NHA ') }}</title>
</head>

<body>

  <!--start wrapper-->
  <div class="wrapper">

       <!--start content-->
       <main class="authentication-content">
        <div class="container-fluid">
          <div class="authentication-card">
            <div class="card shadow ">
                <div class="col-lg-6 mx-auto ">
                    <div class="card-body p-4 p-sm-5 ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="d-grid">
                          <a class="btn btn-white radius-30" href="javascript:;"><span class="d-flex justify-content-center align-items-center">
                              <img class="me-2" src="{{asset('backend/assets/images/NHA_PNG_LOGO.png')}}" width="23%" alt="">
                              <h6>National Housing Authority</h6>
                            </span>
                          </a>
                        </div>
                        <div class="login-separater text-center mb-4">
                          <hr>
                        </div>
                          <div class="row g-3">
                            <div class="col-12">
                              <label for="inputEmailAddress" class="form-label">Email Address</label>
                              <div class="ms-auto position-relative">
                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-12">
                              <label for="inputChoosePassword" class="form-label">Enter Password</label>
                              <div class="ms-auto position-relative">
                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>
                            <div class="col-6">
                              <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
                              </div>
                            </div>
                            <div class="col-6 text-end">	<a href="authentication-forgot-password.html">Forgot Password ?</a>
                            </div>
                            <div class="col-12">
                              <div class="d-grid">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                              </div>
                            </div>
                            <div class="col-12">
                              <p class="mb-0">Don't have an account yet? <a href="{{ route('register') }}">Sign up here</a></p>
                            </div>
                          </div>
                      </form>
                   </div>
                  </div>
            </div>
          </div>
        </div>
       </main>

       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
  <script src="{{asset('backend/assets/js/pace.min.js')}}"></script>


</body>

</html>

