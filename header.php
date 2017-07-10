<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php  bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
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
    <!-- Mobile Menu -->
    <div class="links-wrapper is-mobile">

    <label for="toggle-mobile-menu" ></label>


        <ul class="main-links">
                         <li class=""><a class="menu-clubs" href="#" target="_self">Home</a></li>
                            <li class=""><a class="menu-classes" href="#" target="_self">Our Club</a></li>
                            <li class=""><a class="menu-training" href="#" target="_self">Services</a></li>
                            <li class=""><a class="menu-pilates" href="#" target="_self">Products</a></li>
                            <li class=""><a class="menu-spa" href="#" target="_self">Our Team</a></li>
                            <li class=""><a class="menu-spotlight" href="#" target="_self">Testimonials</a></li>
                            <li class=""><a class="menu-magazine" href="#" target="_blank">Join</a></li>
                            <li class=""><a class="menu-hotel" href="#" target="_self">Contact</a></li>
        </ul>

        <ul class="secondary-links">
                    <li id="header-facebook"><a class="fa fa-facebook fa-3x" href="#"></a></li>
        </ul>

     
    </div>

   
    <!-- Full Navigation -->
    <div class="full-wrapper">
       <div class="logo"> 
               
            <a href="index.php">
    <img src="<?php bloginfo('template_directory'); ?>/img/StokesNutrition-Logo.png" alt="StokesNutrition">

            </a>
             </div>

        <div class="links-wrapper is-tablet is-desktop">
            <ul class="main-links">
                            <li class=""><a class="menu-clubs" href="#" target="_self">Home</a></li>
                            <li class=""><a class="menu-classes" href="#" target="_self">Our Club</a></li>
                            <li class=""><a class="menu-training" href="#" target="_self">Services</a></li>
                            <li class=""><a class="menu-pilates" href="#" target="_self">Products</a></li>
                            <li class=""><a class="menu-spa" href="#" target="_self">Our Team</a></li>
                            <li class=""><a class="menu-spotlight" href="#" target="_self">Testimonials</a></li>
                            <li class=""><a class="menu-magazine" href="#" target="_blank">Join</a></li>
                            <li class=""><a class="menu-hotel" href="#" target="_self">Contact</a></li>
<!--                             <li class=""><a class="menu-join" href="#" target="_self">JOIN</a></li>
 -->            </ul>

            <ul class="secondary-links">
                       
                        <li id="header-facebook"><a class="fa fa-facebook fa-3x" href="#"></a></li>
                       
                            </ul>

            
        </div>
    </div>

</nav>



 

 
