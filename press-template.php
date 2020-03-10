<?php
/*
Template Name: Press Template
*/
?>

<div class="container-fluid">
    <div class="row">
    <?php
$args = array(
    'post_type' => 'press',
    'post_status' => 'publish',
    'posts_per_page' => 10, 
    'orderby' => 'title',
    'order' => 'ASC'
);

$pressLoop = new WP_Query( $args ); 
    
while ( $pressLoop->have_posts() ) : $pressLoop->the_post(); 

?>
<div class="col-md-6">
        <?php
    echo the_title(); 
    the_excerpt(); ?>
    </div>
    <?php
endwhile;

wp_reset_postdata(); 
?> 
    </div>
</div>