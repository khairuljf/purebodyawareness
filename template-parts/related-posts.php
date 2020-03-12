<?php
/**
 * Template part for displaying related posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package purebodyawareness
 */
?>


<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
if( $related ) foreach( $related as $post ) {
setup_postdata($post);

?>
<div class="col-sm-6">
                    <a href="<?php the_permalink() ?>"
                       title="<?php the_title(); ?>" class="post-list-item-anchor">
                        <article class="post-list-article">

                            <div class="post-list-item"
                                 style="background-image:url('<?php the_post_thumbnail_url();?>')"></div>

                            <div class="post-list-item-info">
                                <div class="post-list-item-date"> <?php echo date('l,' . 'F' . 'j'); ?> <!--Friday, March 6 --> </div>

                                <div class="ui-hr blog-item-hr">
                                    <hr class="fx-main-color-background-color-10"/>
                                </div>

                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>

                            </div>
                        </article>

                    </a>
                </div>
<?php }
wp_reset_postdata(); ?>