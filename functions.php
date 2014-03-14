<?php  
//Register Nav Menus  
register_nav_menus(array('header-menu' => __( 'Damien-Menu' ),));  
?>  
<?php
/** widgets */
if( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name' => 'First_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Second_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Third_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name' => 'Fourth_sidebar',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}

function aurelius_comment($comment, $args, $depth) 
{
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment" id="li-comment-<?php comment_ID(); ?>">
        <div class="comment_left">
            <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?></div>
        </div>
        <div class="comment_main">
            <div class="comment_top">
                
                <?php printf(__('<cite class="author_name">%s</cite>'), get_comment_author_link()); ?>
                
            </div>
            <div class="comment_text">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em>你的评论正在审核，稍后会显示出来！</em><br />
                <?php endif; ?>
                    <?php comment_text(); ?>
            </div>
            <div class="comment_bottom">
                <span class="comment_time">发表于：<?php echo get_comment_time('Y-m-d H:i'); ?></span>
                <br/>
                <span class="reply"><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复', 'add_below' =>$add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?></span>
                <span class="revamp"><?php edit_comment_link('修改'); ?></span>
            </div>
        </div>
    </li>
<?php } ?>


