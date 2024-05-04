<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-estate-dark-house
 */

$footer_logo = get_theme_mod('footer_logo');
if (get_theme_mod('footer_logo')) {
	$footer_logo = get_theme_mod('footer_logo');
}
$footer_content = get_theme_mod('footer_content');
$footer_phone_number = get_theme_mod('footer_phone_number');
$email_address = get_theme_mod('footer_email_address');

?>

<?php if(!empty($email_address) && !empty($footer_phone_number) && !empty($footer_content)):?>
<footer class="sec-footer">
	<div class="container top-f">
		<div class="fbody">
			<h2 class="ftitle"><?php echo esc_html__('Villa Blue & Green', 'real-estate-dark-house'); ?></h2>
			<div class="row">
				<div class="col-sm-4">
					<div class="fcard">
						<span class="icon"><i class="fas fa-map-marker-alt"></i></span>
						<div class="fcard-body">
							<div class="label"><?php echo esc_html($footer_content);?></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="fcard">
						<span class="icon"><i class="far fa-envelope"></i></span>
						<div class="fcard-body">
							<div class="label"><?php echo esc_html__('E-mail', 'real-estate-dark-house'); ?></div>
							<div class="value"><?php echo esc_html($email_address);?></div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="fcard">
						<span class="icon"><i class="fas fa-phone"></i></span>
						<div class="fcard-body">
							<div class="label"><?php echo esc_html__('Phone', 'real-estate-dark-house'); ?></div>
							<div class="value"><?php echo esc_html($footer_phone_number);?></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom d-none d-sm-block">
			<div class="menu">
				<?php echo wp_nav_menu(array(
					'menu'  => '6',
					'container'       => 'nav',
					'container_class' => 'footer-menu',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '6',
					'echo'            => true,
					'fallback_cb'     => '__return_false',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
					'theme_location' => is_user_logged_in() ? 'main_menu' : 'main_menu',
					'depth'           => 0,
				)); ?>
			</div>
		</div>
	</div>
	<div class="bottom-f">
		<div class="container">
			<?php if(!empty(get_theme_mod( 'footer_powered_by_link' ))):?>
				<a href="<?php echo esc_url(get_theme_mod( 'footer_powered_by_link' ));?>" target="_blank"><?php echo esc_html(get_theme_mod( 'footer_powered_by' ));?></a>
			<?php else:?>
				<?php echo esc_html(get_theme_mod( 'footer_powered_by' ));?>
			<?php endif;?>
		</div>
	</div>
</footer>
<?php else:?>
<footer class="sec-footer">
	<div class="bottom-f">
		<div class="container">
			<?php if(!empty(get_theme_mod( 'footer_powered_by_link' ))):?>
				<a href="<?php echo esc_url(get_theme_mod( 'footer_powered_by_link' ));?>" target="_blank"><?php echo esc_html(get_theme_mod( 'footer_powered_by' ));?></a>
			<?php else:?>
				<?php echo esc_html(get_theme_mod( 'footer_powered_by' ));?>
			<?php endif;?>
		</div>
	</div>
</footer>
<?php endif;?>
</div><!--wrapper end-->
<?php wp_footer(); ?>
</body>

</html>