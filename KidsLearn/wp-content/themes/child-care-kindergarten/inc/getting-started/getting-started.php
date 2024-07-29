<?php
//about theme info
add_action( 'admin_menu', 'child_care_kindergarten_gettingstarted' );
function child_care_kindergarten_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'child-care-kindergarten'), esc_html__('About Theme', 'child-care-kindergarten'),'edit_theme_options', 'child_care_kindergarten_guide', 'child_care_kindergarten_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function child_care_kindergarten_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'child_care_kindergarten_admin_theme_style');

//guidline for about theme
function child_care_kindergarten_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'child-care-kindergarten' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Child Care Kindergarten WordPress Theme', 'child-care-kindergarten' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'child-care-kindergarten' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'child-care-kindergarten' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'child-care-kindergarten' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'child-care-kindergarten' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'child-care-kindergarten' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'child-care-kindergarten' ); ?> <a href="<?php echo esc_url( CHILD_CARE_KINDERGARTEN_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'child-care-kindergarten' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Child Care Kindergarten theme is suitable for children, education, daycare website, preschool, kids school, primary/elementary school, learning, training center, art & craft school for children and related websites. The theme has an artistic, modern and sophisticated design that all your visitors will like. It is SEO-friendly theme which will assist your website to get indexed quickly on major search engines like Google. Also, it is mobile-friendly with a responsive layout that fits well with all devices. You can add shortcodes to improve the functionality of your website. It is translation-ready and supports RTL layout. It is optimized for speed hence it gives faster page load times. Implemented on bootstrap framework therefore it is handy to use. You can customize it the way you want as it offers many customization and personalization options. With the social media option you can link all your social media pages to show credibility to your work. The testimonial section will let visitors comment on your organization that may help other visitors to choose the best school for their child and result in more admissions to your school. ', 'child-care-kindergarten')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Child Care Kindergarten Theme', 'child-care-kindergarten' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'child-care-kindergarten'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( CHILD_CARE_KINDERGARTEN_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'child-care-kindergarten'); ?></a>
			<a href="<?php echo esc_url( CHILD_CARE_KINDERGARTEN_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'child-care-kindergarten'); ?></a>
			<a href="<?php echo esc_url( CHILD_CARE_KINDERGARTEN_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'child-care-kindergarten'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/child-care-kindergarten.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'child-care-kindergarten'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'child-care-kindergarten'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'child-care-kindergarten'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>