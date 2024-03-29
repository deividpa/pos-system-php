<section class="hold-transition login-page"> 
  <div class="login-box">
    <div class="login-logo">
      <a href="home"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Iniciar Sesión</p>

        <form method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Usuario" name="userInserted">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Contraseña" name="passInserted">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
          <?php
            $login = new UsersController();
            $login -> ctrUserLogin();
          ?>
        </form>

        <p class="mb-1">
          <a href="forgot-password.html">Olvidé mi Contraseña</a>
        </p>
        <p class="mb-0">
          <a href="register.html" class="text-center">Registrarse</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</section>