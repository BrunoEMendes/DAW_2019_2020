<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-10-29 23:53:21
         compiled from "templates/index_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1660249665db75930894561-65023921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d33de3ada002398d5f49092d952241b1a0a630f' => 
    array (
      0 => 'templates/index_template.tpl',
      1 => 1572393205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1660249665db75930894561-65023921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5db759308e5836_43532704',
  'variables' => 
  array (
    'CONTENT_HREF' => 0,
    'CONTENT' => 0,
    'menu_1_redirect' => 0,
    'menu_1' => 0,
    'menu_2_redirect' => 0,
    'menu_2' => 0,
    'menu_3_redirect' => 0,
    'menu_3' => 0,
    'posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5db759308e5836_43532704')) {function content_5db759308e5836_43532704($_smarty_tpl) {?><!DOCTYPE html>
<head>
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

<div class="wrapper">

        <!-- Sidebar Holder -->
        <nav id="sidebar" style="height:100vh;">
            <div id="daw-carousel" class="carousel slide" style="height:100vh" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                <li data-target="#daw-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#daw-carousel" data-slide-to="1"></li>
                <li data-target="#daw-carousel" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                <div class="sidebar-content container " style="position:absolute;z-index:111">
                    <div class="sidebar-title">
                     <a href="<?php echo $_smarty_tpl->tpl_vars['CONTENT_HREF']->value;?>
"><h1> <?php echo $_smarty_tpl->tpl_vars['CONTENT']->value;?>
 </h1>
                        </a></div>
                    <ul class="nav navbar-nav pl-2">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                item 1
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">
                                item 2
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">
                                item 3
                            </a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="#">
                                item 4
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="carousel-item active">
                    <img src="static/image/side_image.png">
                </div>
                <div class="carousel-item">
                    <img src="static/image/side_image2.png">
                </div>
                <div class="carousel-item">
                    <img src="static/image/side_image3.png">
                </div>
                </div>
            </div>

        </nav>

        <!-- Page Content Holder -->
        <div class="row">
            <div id="content">

            <nav class="navbar navbar-expand-lg bg-w">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="svg-inline--fa fa-align-justify fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-justify" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M0 84V44c0-8.837 7.163-16 16-16h416c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H16c-8.837 0-16-7.163-16-16zm16 144h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0-128h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg>
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse header-menu" id="navbarSupportedContent" style="z-index:999">
                        <ul class="nav navbar-nav pl-2" >
                            <li class="nav-item" id="login">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_1_redirect']->value;?>
"">
                                <?php echo $_smarty_tpl->tpl_vars['menu_1']->value;?>

                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                            <li class="nav-item" id="login">
                                <a class="nav-link pl-2" href="<?php echo $_smarty_tpl->tpl_vars['menu_2_redirect']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['menu_2']->value;?>

                                </a>
                            </li>
                            <li class="nav-item pl-2" id="register">
                                <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['menu_3_redirect']->value;?>
">
                               <?php echo $_smarty_tpl->tpl_vars['menu_3']->value;?>

                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <div class="blog">
    <div class="blog pt-3" id="blog-items">
      <div  class="row">
        <div class="container col-4">
        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
          <div class="card d-flex flex-row full-blog-content mb-4">
            <div class="row top-card-content d-flex flex-row">
              <div class="block-blog-user col-2 pt-3">
                <img src="static/image/default.png">
              </div>
              <div class="block-blog-content p-3 pb-4 col-9">
                <a href="#" class="user-post"><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</a>
                <small><?php echo $_smarty_tpl->tpl_vars['post']->value['created_at'];?>
 </small>
                <small>theme</small>
                <div class="block-blog">
                  <p><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
                  <img src="static/image/honk.png">
                </div>
              </div>
              <div class="pt-2" >
                <small><?php echo $_smarty_tpl->tpl_vars['post']->value['updated_at'];?>
</small>
                <small><?php echo $_smarty_tpl->tpl_vars['post']->value['likes'];?>
</small>
                <small>commentary</small>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
    <!--custom scripts-->
    <?php echo '<script'; ?>
 src="static/js/site_scripts.js"><?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
