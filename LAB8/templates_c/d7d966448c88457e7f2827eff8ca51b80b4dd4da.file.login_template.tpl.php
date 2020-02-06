<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 20:15:21
         compiled from "templates/login_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10658916015dc47b59a3ae20-21844244%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd7d966448c88457e7f2827eff8ca51b80b4dd4da' => 
    array (
      0 => 'templates/login_template.tpl',
      1 => 1572905186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10658916015dc47b59a3ae20-21844244',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors_pw' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc47b59a59700_82935329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc47b59a59700_82935329')) {function content_5dc47b59a59700_82935329($_smarty_tpl) {?><!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">  <link rel="stylesheet" href="static/css/style.css" type = "text/css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
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
            <p class="text-danger"><small><?php echo $_smarty_tpl->tpl_vars['errors_pw']->value;?>
</small></p>

            <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Login</button>
              <button onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;" class="btn btn-danger" id="btnsignup">Clear</button>
            <input class ="pt-5" type="checkbox"name="autologin" value="1"> Remember me
            <a href="password_reset.php">Forgot password?</a>
          </form>
        </div>
    </div>

  </body>
  </html><?php }} ?>
