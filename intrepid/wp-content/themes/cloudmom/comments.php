<section id="comments" class="comments">
    <div class="container container--jc-center">
        <div class="col col--8 col--lg-10 col--md-10 col--sm-12 col--xs-12">
            <h3 class="comments__title">Comments</h3>

            <?php comment_form(array(
                'class_submit' => 'button',
                'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="'. __('Comment') .'" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
                'fields' => array(
                    'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="'. esc_attr($commenter['comment_author']) .'" placeholder="'. __('Name') .'" size="30" required="required" /></p>',
                    
                    'email'  => '<p class="comment-form-email"><input id="email" name="email" '. ($html5 ? 'type="email"' : 'type="text"') .' value="'. esc_attr($commenter['comment_author_email']) .'" placeholder="'. __('Email') .'" size="30" required="required" /></p>',
                ),
                'title_reply' => '',
                'title_reply_before' => '<h5 id="reply-title" class="comment-reply-title">',
                'title_reply_after' => '</h5>',
            )); ?>
        
            <?php if ( have_comments() ) : ?>
                <?php wp_list_comments( array(
                    'callback' => 'cs__comment_callback',
                    'end-callback' => 'cs__comment_callback_end',
                    'page' => 1,
                    'per_page' => 0,
                    'style' => 'div',
                ));?>

                <?php if ( !comments_open() && get_comments_number() ){ ?>
                    <p><?= 'Comments are closed.'; ?></p>
                <?php } ?>
            <?php endif; // have_comments() ?>
        </div>
    </div>
</section><!-- #comments -->