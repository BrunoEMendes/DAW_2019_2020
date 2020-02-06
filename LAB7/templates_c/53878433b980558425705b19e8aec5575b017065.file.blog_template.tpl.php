<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-04 22:31:21
         compiled from "templates/blog_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11342652195dbabbc65b54a0-42795743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53878433b980558425705b19e8aec5575b017065' => 
    array (
      0 => 'templates/blog_template.tpl',
      1 => 1572906696,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11342652195dbabbc65b54a0-42795743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dbabbc65cc597_69465865',
  'variables' => 
  array (
    'Menu_1' => 0,
    'Menu_2' => 0,
    'action_form' => 0,
    'BLOG' => 0,
    'value_post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dbabbc65cc597_69465865')) {function content_5dbabbc65cc597_69465865($_smarty_tpl) {?><!DOCTYPE html>
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
                            <?php echo $_smarty_tpl->tpl_vars['Menu_1']->value;?>

                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                        <li class="nav-item" id="register">
                            <a class="nav-link" href="register.php">
                            <?php echo $_smarty_tpl->tpl_vars['Menu_2']->value;?>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="form-body container mt-5 pt-5 pb-5">
      <div class="register-body text-center mb-3" id="register">
          <h2 class="pb-3">BLOG</h2>
      </div>
    <div class="form-group col-10 container">
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['action_form']->value;?>
">

            <textarea class="w-100" type="text" style="height:200px;" class="form-control" name="blog_content" id="passwordField" placeholder="<?php echo $_smarty_tpl->tpl_vars['BLOG']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value_post']->value;?>
</textarea>

            <button type="submit" class="btn btn-success" id="btnsignup" name="reg_user">UPDATE</button>
          <a class="btn btn-danger" href="index.php" id="btnsignup">Cancel</a>
          </form>
        </div>
    </div>

  </body>
  </html><?php }} ?>
