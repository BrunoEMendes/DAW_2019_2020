<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 20:02:41
         compiled from "templates/password_reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15241913695dc477ddb88779-21472355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35d7d1ba8e2466ac644b60689739defc1535f1cc' => 
    array (
      0 => 'templates/password_reset.tpl',
      1 => 1573156990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15241913695dc477ddb88779-21472355',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc477ddbb9272_81662350',
  'variables' => 
  array (
    'menu_1_href' => 0,
    'menu_1' => 0,
    'menu_2_href' => 0,
    'menu_2' => 0,
    'menu_3_href' => 0,
    'menu_3' => 0,
    'errors_pw' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc477ddbb9272_81662350')) {function content_5dc477ddbb9272_81662350($_smarty_tpl) {?><!DOCTYPE html>
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
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_1_href']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['menu_1']->value;?>

                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                        <li class="nav-item" id="login">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_2_href']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['menu_2']->value;?>

                            </a>
                        </li>
                        <li class="nav-item" id="register">
                            <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_3_href']->value;?>
">
                           <?php echo $_smarty_tpl->tpl_vars['menu_3']->value;?>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="form-body container mt-5 pt-5 pb-5">
      <div class="register-body text-center mb-3" id="register">
          <h2 class="pb-3">Password Reset</h2>
      </div>
    <div class="form-group col-10 container">
        <form method="post" action="password_reset_action.php">
            <label>
                Email Adress
            </label>
            <input type="email" class="form-control" name="email" id="emailField" placeholder="email">
            <p class="text-danger"><small><?php echo $_smarty_tpl->tpl_vars['errors_pw']->value;?>
</small></p>

            <button type="submit" class="btn btn-primary" id="btnsignup" name="reg_user">GO</button>
          </form>
        </div>
    </div>

  </body>
  </html><?php }} ?>
