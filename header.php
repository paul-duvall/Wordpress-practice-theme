<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<?php

  if( is_home() ):
    $awesome_classes = array('awesome-class');
  else:
    $awesome_classes = array('not-awesome-class');
  endif;
?>


<!-- body_class enables you to add classes to the body of each page - use array 'firstclass', 'secondclass' to specify the classes -->
<body <?php body_class($awesome_classes); ?>>

  <?php wp_nav_menu(array('theme_location'=>'primary')); ?>
  