<?php /* Smarty version 2.6.14, created on 2019-10-18 15:49:12
         compiled from register_template.tpl */ ?>
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
     <div class="row">
            <div id="content">

            <nav class="navbar navbar-expand-lg bg-w">
                <div class="container-fluid">

                    <div class="collapse navbar-collapse header-menu" id="navbarSupportedContent" style="z-index:999">
                        <ul class="nav navbar-nav pl-2" >
                            <li class="nav-item" id="login">
                                <a class="nav-link" href="index.php">
                                MENU 1
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                            <li class="nav-item" id="login">
                                <a class="nav-link pl-2" href="#">
                                MENU 2
                                </a>
                            </li>
                            <li class="nav-item pl-2" id="register">
                                <a class="nav-link" href="#">
                                MENU3
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
     <div class="form-body container mt-5 pt-5 pb-5">

      <div class="register-body text-center mb-3" id="register">
          <h2>Register</h2>
      </div>
      <div class="form-group col-10 container">
        <form method="post" action="register_action.php">
            <label>
                  Username
              </label>
              <input type="text" class="form-control" name="username" id="userfield" placeholder="username">
              <label>
                  Email Adress
              </label>
              <input type="email" class="form-control" name="email" id="emailField" placeholder="email">
              <label>
                  Password
              </label>
              <input type="password" class="form-control" name="password_1" id="passwordField" placeholder="password">
              <label>
                  Password Confirmation
              </label>
             <input type="password" class="form-control" name="password_2" id="passwordConfirmationField" placeholder="password confirmation">
          <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Sign up</button>
          <button class="btn btn-danger" id="btnsignup">Cancel</button>
            </form>

          </div>
        </div>
  </body>
  </html>