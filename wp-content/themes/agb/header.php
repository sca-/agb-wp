<?php
/**
 * The template for displaying the header
 *
 */
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    
    <link rel="icon" href="images/agbFavIcon_16x16.png" type="image/x-icon" />
    <link rel="shortcut icon" href="images/agbFavIcon_16x16.png" type="image/x-icon" />
		<?php wp_head(); ?>
    

    <title>AGB - производство и реализация светодиодных ламп</title>
</head>


<body>
	<div class="page">
		<header>
		    <div class="container">
		        <div class="row">
		            <div class="logo col-md-4">
		                <a href="#"><img src="images/logo.png" alt="logo"/></a>
		            </div>
		            <div class="phone-wrap col-md-8">
		                <div class="phone"><i></i><span><? the_field('phone'); ?></span></div>
		                <div class="backcall"><a href="#">Бесплатный обратный
		                    звонок</a></div>
		            </div>
		        </div>
		        <div class="row">
		            <nav class="top-menu navbar">
		                <ul class="nav nav-tabs">
		                    <li class="active"><a href="#about"><? the_field('btnAbout'); ?></a></li>
		                    <li><a href="#products" class=""><? the_field('btnProducts'); ?></a></li>
		                    <li><a href="#calc" class=""><? the_field('btnPluses'); ?></a></li>
		                    <li><a href="#ship" class=""><? the_field('btnDelivery'); ?></a></li>
		                    <li><a href="#contacts" class=""><? the_field('btnContact'); ?></a></li>
		                    <li><a href="#"><? the_field('btnZacaz'); ?></a></li>
		                </ul>
		            </nav>
		        </div>
		    </div>
		</header>

