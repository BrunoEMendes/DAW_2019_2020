<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-28 21:17:02
         compiled from "templates/register_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10073328125db75aceb52918-13690530%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bfa159d825bd28933c15b0cced1aeb1345527ed' => 
    array (
      0 => 'templates/register_template.tpl',
      1 => 1571765350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10073328125db75aceb52918-13690530',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'username_value' => 0,
    'username_error' => 0,
    'email_value' => 0,
    'email_error' => 0,
    'password_1_error' => 0,
    'password_2_error' => 0,
    'password_both_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5db75acec272a9_10685545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5db75acec272a9_10685545')) {function content_5db75acec272a9_10685545($_smarty_tpl) {?><!DOCTYPE html>
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
              <input type="text" class="form-control" name="username" value="<?php echo $_smarty_tpl->tpl_vars['username_value']->value;?>
" id="userfield" placeholder="username">
              <p><small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['username_error']->value;?>
</small></p>
              <label>
                  Email Address
              </label>
              <input type="email" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email_value']->value;?>
" id="emailField" placeholder="email"/>
              <p><small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['email_error']->value;?>
</small></p>
              <label>
                  Password
              </label>
              <input type="password" class="form-control" name="password_1" id="passwordField" placeholder="password"/>
                <p><small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['password_1_error']->value;?>
</small></p>
              <label>
                  Password Confirmation
              </label>
             <input type="password" class="form-control" name="password_2" id="passwordConfirmationField" placeholder="password confirmation">
              <p><small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['password_2_error']->value;?>
</small></p>
              <p><small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['password_both_error']->value;?>
</small></p>
          <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Sign Up</button>
          <button onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;" class="btn btn-danger" id="btnsignup">Clear</button>
            </form>

          </div>
        </div>
  </body>
  </html><?php }} ?>
