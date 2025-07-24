<?php

/**
 * The Template part for displaying a message that posts cant be found.
 * 
 * @package Aquila
 */
?>
<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title">
            <?php esc_html_e("Nothing Found", 'aquila');?>
        </h1>

        <div class="page-content">
            <?php if(is_home() && current_user_can('publish_posts')):?>
                <p>
                    <?php 
                        printf(wp_kses(
                            __('Ready to publish your first post? <a href="%s">Get started here</a>', 'aquila'),
                            [
                                'a' => [
                                    'href' => []
                                ]
                            ]
                                ),
                                    esc_url(admin_url('post-new.php'))
                            );
                    ?>
                </p>
                <?php elseif(is_search()): ?>
                    <p>
                        <?php esc_html_e('Sorry but nothing matched your search item', 'aquila');?>
                    </p>
                <?php else: ?>
                <p>
                    <?php esc_html_e('Sorry but nothing matched your search item', 'aquila');?>
                </p>
            <?php endif; ?>
        </div>
    </header>
</section>