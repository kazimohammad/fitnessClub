<?php get_header(); ?>
    <!-- Header part end-->

<?php get_template_part( 'templates-parts/content', 'hero' ) ?>

    <!--::exclusive_item_part start::-->
<?php get_template_part( 'templates-parts/content', 'about' ) ?>
    <!--::exclusive_item_part end::-->

    <!-- extends part start-->
<?php get_template_part( 'templates-parts/content', 'extend' ) ?>
    <!-- team part end-->

    <!--::exclusive_item_part start::-->
    <?php get_template_part( 'templates-parts/content', 'offer' ) ?>
<!--::exclusive_item_part end::-->

    <!--::review_part start::-->
   <?php get_template_part( 'templates-parts/content', 'testimonial' ) ?>
    <!--::review_part end::-->

    <!--::calculate_part start::-->
<?php get_template_part( 'templates-parts/content', 'physical_information' ) ?>
    <!--::calculate_part end::-->

    <!--::exclusive_item_part start::-->
<?php get_template_part( 'templates-parts/content','our_team' ) ?>
    <!--::exclusive_item_part end::-->

    <!--:::::::::::sibscribe part start:::::::::::::-->
 <?php get_template_part( 'templates-parts/content', 'subscriber' ) ?>
    <!--:::::::::::sibscribe part end:::::::::::::-->

    <!-- footer part start-->
 <?php get_footer(); ?>