<?php

/*
 * template name:Privacy
 * */

get_header();

?>
<main role="main">
    <!-- section -->
    <section>

        <div id="flex-component-0" class="ui-content-panel left" style="background-color: #F6F6F6">
            <div class="container ui-content-panel-container">
                <div class="ui-content-panel-content">

                    <div class="ui-content-panel-texts">
                        <h2 class="ui-content-panel-header" style="color:#000">
                            Privacy Policy </h2>

                        <div class="ui-hr ui-content-panel-hr">
                            <hr class="fx-main-color-background-color-10"/>
                        </div>


                        <div class="ui-content-panel-paragraph" style="color:#000">
                            <div class="ui-content-panel-paragraph-content" style="color:#000">

                                <?php
                                while ( have_posts() ) : the_post();

                                    the_content();

                                endwhile; // End of the loop.
                                ?>


                            </div>
                        </div>
                    </div>

                    <div class="ui-content-panel-action-buttons">
                        <div class="ui-content-panel-action-button fx-btn">
                            <a href="<?php echo site_url() ?>" class="ui-action-button outline fx-highlight-1-color-background-color-10 fx-highlight-1-color-border-color"
                               target="_blank">Return to Home
                            </a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /section -->
</main>
<?php

get_footer();
?>