<?php
	// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) : ?>
		<div class="password-protect-content">
			<?php 
				_e('This post is password protected. Enter the password to view comments', 'homeland'); 
			?>
		</div><?php
		return;
	endif;
?>

<!-- Comments Area -->
<div class="comments" id="comments">
	<?php 
		if ( have_comments() ) : ?>
			<h3>
				<?php 
					comments_number( 
						__( 'No Comments', 'homeland' ), 
						__( 'One Comment', 'homeland' ), 
						__( '% Comments', 'homeland' ) 
					); 
				?>
			</h3>
			<ul class="comment-list">
		 		<?php 
		 			$args = array ('type' => 'comment', 'callback' => 'homeland_theme_comment');
					wp_list_comments( $args ); 		
		 		?>
		 	</ul><?php
	 	else :    
			if ('open' == $post->comment_status) : ?>
				<h3 style="color:#FF0000 !important; margin-bottom:0;">
					<?php 
						comments_number( 
							__( 'No Comments', 'homeland' ), 
							__( 'One Comment', 'homeland' ), 
							__( '% Comments', 'homeland' ) 
						); 
					?>
				</h3><?php 
			else : ?>            
				<h3><?php sanitize_title( _e('Comments are closed.', 'homeland') ); ?></h3><?php 
			endif; 
	 	endif;
	?>
</div>

<!-- Comment Form -->
<?php 
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields = array(
		'author' => '<p><input type="text" id="author" placeholder="'. __( 'Name', 'homeland' ) .'" name="author" ' . $aria_req . ' value="' . esc_attr( $commenter['comment_author'] ) . '" tabindex="1" /></p>',
		'email' => '<p><input type="text" id="email" placeholder="'. __( 'Email Address', 'homeland' ) .'" name="email" ' . $aria_req . ' value="' . esc_attr( $commenter['comment_author_email'] ) . '" tabindex="2" /></p>',
		'URL' => '<p><input type="text" id="url" placeholder="' . __( 'Website', 'homeland' ) . '" name="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" tabindex="3" /></p>'
	);

	$args = array(
		'id_form'           => 'commentform',
		'id_submit'         => 'submit',
		'class_submit'      => 'submit',
		'name_submit'       => 'submit',
		'title_reply'       => __( 'Leave a Comment', 'homeland' ),
		'title_reply_to'    => __( 'Leave a Comment to %s', 'homeland' ),
		'cancel_reply_link' => __( 'Cancel Reply', 'homeland' ),
		'label_submit'      => __( 'Post a Message', 'homeland' ),
		'format'            => 'xhtml',
		'comment_field' => '<p><textarea id="comment" placeholder="'. __( 'Message', 'homeland' ) .'" name="comment" ' . $aria_req . ' tabindex="4" rows="0" cols="0"></textarea></p>',
		'comment_notes_before' => '',
		'comment_notes_after' => '<p class="form-allowed-tags">' .
			sprintf(
				__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s','homeland' ),
			'<code>' . allowed_tags() . '</code>') . '</p>',
		'fields' => apply_filters( 'comment_form_default_fields', $fields),
	);

	comment_form($args); 
?>
