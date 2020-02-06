<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-29 23:52:19
         compiled from "templates/message_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8299722785db8d0b3438b26-82934207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1a0bc1e9d9d43a0cc7d7250424bcaed7abb4c86' => 
    array (
      0 => 'templates/message_template.tpl',
      1 => 1572392997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8299722785db8d0b3438b26-82934207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5db8d0b3449e71_17127760',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5db8d0b3449e71_17127760')) {function content_5db8d0b3449e71_17127760($_smarty_tpl) {?><!DOCTYPE html>
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
