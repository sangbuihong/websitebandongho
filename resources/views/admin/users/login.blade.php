<!DOCTYPE html>
<html lang="en">
<head>
  @include('admin.header')
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng Nhập</p>
        @include('admin.alert') <!-- them phan kiem tra loi -->
      <form action="/admin/users/login/store" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <div class="icheck-primary">
              <input name="remember" type="checkbox" id="remember">
              <label for="remember">
                Lưu
              </label>
            </div>
          </div>
          <!-- /.col -->

          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
          </div>

          <!-- /.col -->
        </div>

        @csrf

        </form>

      <p class="mb-1">
        <a href="#">Quên mật khẩu</a>
      </p>
      <p class="mb-0">
        <a href="#" class="text-center">Đăng ký</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

 @include('admin.footer')
</body>
</html>
