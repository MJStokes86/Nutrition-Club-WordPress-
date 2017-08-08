<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php  bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="https://file.myfontastic.com/dKSBcWp6jndBota4ZsU45Q/icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://use.fontawesome.com/a46e157fb6.js"></script>
  

</head>

<?php 

if(is_home()) {
	$nutrition_club_classes = array('nutrition_club_class', 'my-class');

}

else{
	$nutrition_club_classes = array('no-nurtrition-club-class');
}


 ?>

 <body <?php body_class($nutrition_classes); ?>>


 <nav class="main-transparent is-mobile" data-component="navigation">
    <a href="#" class="menu icon-menu is-mobile"></a>
    <a href="#" class="icon-close is-hidden"></a>
</nav>
<nav class="main" data-component="navigation">
    

   
    <!-- Full Navigation -->
    <div class="full-wrapper">
       <div class="logo"> 
               
            <a href="index.php">
    <img src="<?php bloginfo('template_directory'); ?>/img/StokesNutrition-Logo.png" alt="StokesNutrition">

            </a>
             </div>

              <!-- Mobile Menu -->
    <div class=" is-mobile">


  <i class="fa fa-bars fa-2x nav-toggle"></i>


<div id="mobile-menu">
        <ul class="main-links">
                        <li class=""><a class="" href="#home">Home</a></li>
                            <li class=""><a class="" href="#about">Our Club</a></li>
                            <li class=""><a class="" href="#services">Services</a></li>
                            <li class=""><a class="" href="#products">Products</a></li>
                            <li class=""><a class="" href="#team">Our Team</a></li>
                            <li class=""><a class="" href="#testimonials-area">Testimonials</a></li>
                            <li class=""><a class="" href="#join-area">Join</a></li>
                            <li class=""><a class="" href="#mobile-contact">Contact</a></li>
        </ul>
</div>

      <!--   <ul class="secondary-links">
                    <li id="header-facebook"><a class="fa fa-facebook fa-3x" href="#"></a></li>
        </ul> -->

     
    </div>
        <div class="links-wrapper is-tablet is-desktop">


            <ul class="main-links">
                            <li class=""><a class="" href="#home" target="_self">Home</a></li>
                            <li class=""><a class="" href="#about" target="_self">Our Club</a></li>
                            <li class=""><a class="" href="#services" target="_self">Services</a></li>
                            <li class=""><a class="" href="#products" target="_self">Products</a></li>
                            <li class=""><a class="" href="#team" target="_self">Our Team</a></li>
                            <li class=""><a class="" href="#testimonials" target="_self">Testimonials</a></li>
                            <li class=""><a class="" href="#join">Join</a></li>
                            <li class=""><a class="" href="#contact" target="_self">Contact</a></li>
<!--                             <li class=""><a class="menu-join" href="#" target="_self">JOIN</a></li>
 -->            </ul>

            <ul class="secondary-links">
                       
                        <li id="header-facebook"><a class="fa fa-facebook fa-3x" href="#"></a></li>
                       
                            </ul>

            
        </div>
    </div>

</nav>



 

 
