<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>TJMIS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/fontawesome/font-awesome/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->

  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/plugins/iCheck/square/blue.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="/"><b>TJ</b>MIS</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session 

      <form action="{{route('login')}}" method="post">
        {{csrf_field()}}
        <div class="form-group {{$errors->has('email') ? 'has-error':''}} has-feedback">
          <input id="email" value="{{old('email')}}" name="email" type="email" class="form-control" placeholder="Email">

          @if($errors->has('email'))
          <span class="help-block">
            <strong>{{$errors->first('email')}}</strong>
          </span>
          @endif
             <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        </div>
        <div class="form-group{{$errors->has('password') ? 'has-error':''}} has-feedback">
          <input id="password"  value="{{old('password')}}" name="password" type="password" class="form-control" placeholder="Password">
          @if($errors->has('password'))
          <span class="help-block">
            <strong>{{$errors->first('password')}}</strong>
          </span>
          @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

        </div>
        <div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
            <p>
         You don't have account? <a href="{{ route('register') }}">Click Here</a>
        </p>
          <!-- /.col -->
        </div>
      </form>


    <!--   <p class="mb-1">
        <a href="{{route('password.request')}}">I forgot my password</a>
      </p> -->
     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass   : 'iradio_square-blue',
      increaseArea : '20%' // optional
    })
  })
</script>
</body>
</html>
