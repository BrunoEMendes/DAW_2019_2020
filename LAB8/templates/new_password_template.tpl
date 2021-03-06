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
                                <a class="nav-link" href="{$Menu_1_href}">
                                {$Menu_1}
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                            <li class="nav-item" id="login">
                                <a class="nav-link pl-2" href="{$Menu_2_href}">
                                {$Menu_2}
                                </a>
                            </li>
                            <li class="nav-item pl-2" id="register">
                                <a class="nav-link" href="{$Menu_3_href}">
                                {$Menu_3}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
     <div class="form-body container mt-5 pt-5 pb-5">

      <div class="register-body text-center mb-3" id="register">
          <h2>New Password</h2>
      </div>

      <div class="form-group col-10 container">
        <form method="post" action="new_password_action.php">
        <input type=hidden name="token" value="{$TOKEN}">
              <label>
                  Password
              </label>
              <input type="password" class="form-control" name="password_1" id="passwordField" placeholder="password"/>
              <label>
                  Password Confirmation
              </label>
             <input type="password" class="form-control" name="password_2" id="passwordConfirmationField" placeholder="password confirmation">
              <p><small class="text-danger">{$password_both_error}</small></p>
          <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Confirm</button>
          <button onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;" class="btn btn-danger" id="btnsignup">Clear</button>
            </form>

          </div>
        </div>
  </body>
  </html>