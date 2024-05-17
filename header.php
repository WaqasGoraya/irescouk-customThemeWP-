<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ************************************************************************ !-->
    <!-- *****                                                              ***** !-->
    <!-- *****      ¤ Designed and Developed by Curve360Solutions           ***** !-->
    <!-- *****               http://curve360solutions.com/                  ***** !-->
    <!-- *****                                                              ***** !-->
    <!-- ************************************************************************ !-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (is_front_page() || is_home()) {
                echo get_bloginfo('name');
            } else {
                echo wp_title('');
            } ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <?php get_template_part('template-parts/header/site-header'); ?>