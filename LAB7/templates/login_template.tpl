<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <link rel="stylesheet" href="static/css/style.css" type = "text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

  <!--menu bar-->
    <div id="content" style="margin-left:0">
        <nav class="navbar navbar-expand-lg bg-w">
            <div class="container-fluid">

                <div class="collapse navbar-collapse header-menu" id="navbarSupportedContent">
                    <ul class="nav navbar-nav pl-2" >
                        <li class="nav-item" id="login">
                            <a class="nav-link" href="index.php">
                            Home
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                        <li class="nav-item" id="login">
                            <a class="nav-link" href="login.php">
                            Login
                            </a>
                        </li>
                        <li class="nav-item" id="register">
                            <a class="nav-link" href="register.php">
                            Register
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="form-body container mt-5 pt-5 pb-5">
      <div class="register-body text-center mb-3" id="register">
          <h2 class="pb-3">Login</h2>
      </div>
    <div class="form-group col-10 container">
        <form method="post" action="login_action.php">
            <label>
                Email Adress
            </label>
            <input type="email" class="form-control" name="email" id="emailField" placeholder="email">
            <label>
                Password
            </label>
            <input type="password" class="form-control" name="password" id="passwordField" placeholder="password">
            <p class="text-danger"><small>{$errors_pw}</small></p>

            <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Login</button>
              <button onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;" class="btn btn-danger" id="btnsignup">Clear</button>
            <input class ="pt-5" type="checkbox"name="autologin" value="1"> Remember me
            <a href="password_reset.php">Forgot password?</a>
          </form>
        </div>
    </div>

  </body>
  </html>