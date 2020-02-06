<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-11-07 20:45:03
         compiled from "templates/message_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12300144475dc4824f572401-78110645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f75cc8d9fb0c32fb23dfc7b0698c65c09b249a42' => 
    array (
      0 => 'templates/message_template.tpl',
      1 => 1572392997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12300144475dc4824f572401-78110645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5dc4824f6362a4_25572030',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5dc4824f6362a4_25572030')) {function content_5dc4824f6362a4_25572030($_smarty_tpl) {?><!DOCTYPE html>
<head>
<meta http-equiv="refresh" content="3; url=index.php" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="static/css/style.css" type = "text/css">
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

    <div class="container text-center">
    <div class="card col-3 p-5" id="hello" style="margin-top: 200px;margin-left:auto; margin-right:auto;">
          <h2 class="text-success"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</h2>
    </div>
    </div>
</body>
</html><?php }} ?>
