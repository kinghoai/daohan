<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage nganhang
 * @since Ngan Hang 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="respond" class="comment-respond">
    <?php if ( have_comments() ) : ?>
    <h3 id="reply-title" class="comment-reply-title">
        <?php
        $comments_number = get_comments_number();
        if ( 1 === $comments_number ) {
            /* translators: %s: post title */
            printf( _x( '1 bình luận đã được gửi đến bài viết &ldquo;%s&rdquo;', 'comments title', 'nganhang' ), get_the_title() );
        } else {
            printf(
            /* translators: 1: number of comments, 2: post title */
                _nx(
                    '%1$s bình luận trên &ldquo;%2$s&rdquo;',
                    '%1$s bình luận trên &ldquo;%2$s&rdquo;',
                    $comments_number,
                    'comments title',
                    'nganhang'
                ),
                number_format_i18n( $comments_number ),
                get_the_title()
            );
        }
        ?>
    </h3>
    <?php the_comments_navigation(); ?>
    <ol class="comment-list">
        <?php
        wp_list_comments( array(
            'style'       => 'ol',
            'short_ping'  => true,
            'avatar_size' => 54,
        ) );
        ?>
    </ol><!-- .comment-list -->
    <?php the_comments_navigation(); ?>
    <?php endif; // Check for have_comments(). ?>
    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php _e( 'Bình luận đã khóa.', 'nganhang' ); ?></p>
    <?php endif; ?>

    <?php
    $fields = array(
        'author' =>
            '<input id="author" name="author" type="text" placeholder="Họ và tên*" value="' . esc_attr( $commenter['comment_author'] ) .
            '" size="30"' . $aria_req . ' />',

        'email' =>
            '<input id="email" name="email" type="text" placeholder="Email*" value="' . esc_attr(  $commenter['comment_author_email'] ) .
            '" size="30"' . $aria_req . ' />',

        
    );
    comment_form( array(
        'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h3>',
        'title_reply' => __('Để lại một bình luận','nganhang'),
        'comment_notes_before' => '<p class="comment-notes">' . __( 'Email của bạn sẽ không công khai. Các trường bắt buộc được đánh dấu *' ) . ( $req ? $required_text : '' ) . '</p>',
        'comment_field' => '<p class="comment-form-comment"><textarea style="resize: none;" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="bình luận"></textarea></p>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
        'label_submit' => __('Gửi bình luận','nganhang')
    ) );
    ?>
</div><!-- #respond -->

