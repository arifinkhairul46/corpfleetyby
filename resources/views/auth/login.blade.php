
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CorpFleetYBY | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
  <nav class="navbar navbar-top navbar-horizontal navbar-expand-md">
    <div class="container px-4">
        <a class="brand-image" href="">
            <img src="dist/img/logo-mtf.png" width="100px" />
        </a>
    </div>
  </nav>
  <div class="login-box">
    <div class="login-logo">
      <span >CorpFleetY<b style="color: #F2BE22">B</b>Y</span>
      <br>
      <span style="font-style: italic" class="text-lg">#yok<b style="color: #F2BE22">bisa</b>yok</span>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body">
        <p class="login-box-msg">Silahkan masuk dengan akun anda</p>

        <form role="form" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
              <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('email') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>
              </div>
              @if ($errors->has('email'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
          <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
              <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-lock"></i></span>
                  </div>
                  <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="" required>
              </div>
              @if ($errors->has('password'))
                  <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
          <div class="text-center">
              <button type="submit" class="btn btn-primary my-4">{{ __('Sign in') }}</button>
          </div>
      </form>

        {{-- <p class="mb-1">
          <a href="forgot-password.html">I forgot my password</a>
        </p> --}}
        <p class="mb-0">
          <a href="{{route('register')}}" class="text-center">Register a new membership</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
      
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
