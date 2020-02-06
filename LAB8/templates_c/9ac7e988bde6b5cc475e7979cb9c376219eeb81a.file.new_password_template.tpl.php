<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 23:15:07
         compiled from "templates/new_password_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19787465705dc4a234313206-47981766%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ac7e988bde6b5cc475e7979cb9c376219eeb81a' => 
    array (
      0 => 'templates/new_password_template.tpl',
      1 => 1573168535,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19787465705dc4a234313206-47981766',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc4a23436d418_30519103',
  'variables' => 
  array (
    'Menu_1_href' => 0,
    'Menu_1' => 0,
    'Menu_2_href' => 0,
    'Menu_2' => 0,
    'Menu_3_href' => 0,
    'Menu_3' => 0,
    'TOKEN' => 0,
    'password_both_error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc4a23436d418_30519103')) {function content_5dc4a23436d418_30519103($_smarty_tpl) {?><!DOCTYPE html>
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
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['Menu_1_href']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['Menu_1']->value;?>

                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                            <li class="nav-item" id="login">
                                <a class="nav-link pl-2" href="<?php echo $_smarty_tpl->tpl_vars['Menu_2_href']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['Menu_2']->value;?>

                                </a>
                            </li>
                            <li class="nav-item pl-2" id="register">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['Menu_3_href']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['Menu_3']->value;?>

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
        <input type=hidden name="token" value="<?php echo $_smarty_tpl->tpl_vars['TOKEN']->value;?>
">
              <label>
                  Password
              </label>
              <input type="password" class="form-control" name="password_1" id="passwordField" placeholder="password"/>
              <label>
                  Password Confirmation
              </label>
             <input type="password" class="form-control" name="password_2" id="passwordConfirmationField" placeholder="password confirmation">
              <p><small class="text-danger"><?php echo $_smarty_tpl->tpl_vars['password_both_error']->value;?>
</small></p>
          <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">Confirm</button>
          <button onclick="document.getElementById('selectform').reset(); document.getElementById('from').value = null; return false;" class="btn btn-danger" id="btnsignup">Clear</button>
            </form>

          </div>
        </div>
  </body>
  </html><?php }} ?>
