<div class="grid_24 content_wrapper">
    <div class="grid_16 alpha">
        <?php
        $limit = inkthemes_get_option('posts_per_page');
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        // The Query
        $the_query = new WP_Query();
        $the_query->query('showposts=' . $limit . '&paged=' . $paged);
        ?>
        <!--Start Content-->
        <div class="content">
            <?php //if (function_exists('inkthemes_breadcrumbs')) inkthemes_breadcrumbs();  ?>
            <!-- Start the Loop. -->
            <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <!--Start Post-->
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="post_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e('Permanent Link to', 'cloriato-lite'); ?> <?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                            </a></h1>
                        <ul class="post_meta">
                            <li class="posted_by"><span><?php _e('By', 'cloriato-lite'); ?></span>
                                <?php the_author_posts_link(); ?>
                            </li>
                            <li class="post_date">
                                <?php the_time('M-j-Y') ?>
                            </li>
                            <li class="post_category">
                                <?php the_category(', '); ?>
                            </li>
                            <li class="post_comment">
                                <?php comments_popup_link('0 Comments.', '1 Comment.', '% Comments.'); ?>
                            </li>
                        </ul>
                        <hr/>
                        <div class="post_content">
                            <?php if ((has_post_thumbnail())) { ?>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('post_thumbnail', array('class' => 'postimg')); ?>
                                </a>
                                <?php
                            } else {
                                ?>
                                <a href="<?php the_permalink(); ?>"> <?php echo inkthemes_main_image(); ?> </a>
                                <?php
                            }
                            ?>
                            <?php the_excerpt(); ?>
                            <div class="clear"></div>
                            <?php wp_link_pages(array('before' => '' . __('Pages:', 'cloriato-lite'), 'after' => '')); ?>
                            <p>
                                <?php the_tags(); ?>
                            </p>
                            <a class="read_more" href="<?php the_permalink(); ?>"></a></div>
                    </div>
                    <!--End Post-->
                <?php endwhile;
            else:
                ?>
                <!--End Loop-->
<?php endif; ?>
        </div>
  </div>
</div> 
