<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="static/css/style.css" type = "text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

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
                     <a href="{$CONTENT_HREF}"><h1> {$CONTENT} </h1>
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
                                <a class="nav-link" href="{$menu_1_redirect}"">
                                {$menu_1}
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" id="navbar-menu-login">
                            <li class="nav-item" id="login">
                                <a class="nav-link pl-2" href="{$menu_2_redirect}">
                                {$menu_2}
                                </a>
                            </li>
                            <li class="nav-item pl-2" id="register">
                                <a class="nav-link" href="{$menu_3_redirect}">
                               {$menu_3}
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
        {foreach item=post from=$posts}
          <div class="card d-flex flex-row full-blog-content mb-4">
            <div class="row top-card-content d-flex flex-row">
              <div class="block-blog-user col-2 pt-3">
                <img src="static/image/default.png">
              </div>
              <div class="block-blog-content p-3 pb-4 col-9">
                <a href="#" class="user-post">{$post.name}</a>
                <small>{$post.created_at} </small>
                <small>theme</small>
                <div class="block-blog">
                  <p>{$post.content}</p>
                  <img src="static/image/honk.png">
                </div>
              </div>
              <div class="pt-2">
              {if isset($smarty.session.id)}
                {if $smarty.session.id == $post.user_id}
                <a class="btn text-warning" href="blog.php?microspost={$post.id}" style="color:orange;" >update</a>
                    {/if}
                {/if}
                <small>{$post.updated_at}</small>
                <small>{$post.likes}</small>
              </div>
            </div>
          </div>
        {/foreach}
        </div>
      </div>
    </div>
  </div>
  </div>
    <!--custom scripts-->
    <script src="static/js/site_scripts.js"></script>

</body>
</html>