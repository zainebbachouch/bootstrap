<!DOCTYPE html>
<html lang="en">
 <head>
<meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1">
 <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
 <meta name="author" content="">
 <title><?php echo get_bloginfo( 'name' ); ?></title>
 <br>

<a href="<?php bloginfo( 'wpurl' );?>">
</a>

 <link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstra
p.min.css" rel="stylesheet">
<link href="<?php bloginfo( 'template_directory' );?>/css/blog.css"
rel="stylesheet"> 

 <script
src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></sc
ript>
 <script
src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script
>

 <![endif]--> <?php wp_head();?>
 </head>
 <body>
 <div class="blog-masthead">
 <div class="container">
<nav class="blog-nav">
<a class="blog-nav-item active" href="#">Home</a>
<a class="blog-nav-item" href="#">New features</a>
<a class="blog-nav-item" href="#">Press</a> <a class="blognav-item" href="#">New hires</a>
<a class="blog-nav-item" href="#">About</a>
</nav>
 </div>
 </div>
 <div class="container">
 <div class="blog-header">
<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?>
</p>
 </div>