<!DOCTYPE html>
<html>
    <head>
        <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <?php wp_head(); ?>

        <link href='http://fonts.googleapis.com/css?family=Quantico:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>

	<?php include_once("analytics.php"); ?>


    </head>
    
    <body>
        
<style>
	.searchbox {
		margin: 10px 20px 10px 20px;
		float: left;
		width: 80%;
	}

	.searchboxmenu {
		width: 270px;
	}
</style>        
<!-- Begin Header -->
        <div class="col-md-12 header-lg-cont container">
        <div class="container">
            <div class="navbar navbar-inverse navbar-static-top">

		<div class="navbar-header">
                <h1 class="navbar-brand"><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
                
                    <button class="navbar-toggle" data-toggle="collapse" data-target = ".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
</div>

                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="<?php bloginfo('wpurl'); ?>">Home</a></li>

                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Categories <b class="caret"></b></a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php wp_list_categories('orderby=name&title_li='); ?>
                                </ul>

                            </li>
                            
                           <!--  <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Search <b class="caret"></b></a>
                                <ul class="dropdown-menu searchboxmenu" role="menu">
                                    <li><input type="text" class="form-control searchbox" placeholder="Search"></li>
                                </ul>

                            </li> -->

                            <li><a href="<?php bloginfo('wpurl'); ?>/about">About</a></li>
                            <li><a href="<?php bloginfo('wpurl'); ?>/contact">Contact</a></li>

                        </ul>
                    </div>
            </div>
        </div>
            </div>
        <!-- End Header -->
        
        <!-- Begin Content -->
        <div class="container">