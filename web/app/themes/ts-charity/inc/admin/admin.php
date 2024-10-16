<?php
//about theme info
add_action( 'admin_menu', 'ts_charity_abouttheme' );
function ts_charity_abouttheme() {    	
	add_theme_page( esc_html__('About Charity Theme', 'ts-charity'), esc_html__('About Charity Theme', 'ts-charity'), 'edit_theme_options', 'ts_charity_guide', 'ts_charity_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function ts_charity_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'ts_charity_admin_theme_style');

//guidline for about theme
function ts_charity_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Themeshopy has got everything that an individual and group need to be successful in their venture.', 'ts-charity'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( TS_CHARITY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'ts-charity'); ?></a>
			<a href="<?php echo esc_url( TS_CHARITY_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'ts-charity'); ?></a>
			<a href="<?php echo esc_url( TS_CHARITY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'ts-charity'); ?></a>
		</div>
	</div>
	<div class="button-bg">
		<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'ts-charity'); ?></button>
		<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'ts-charity'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'ts-charity'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( TS_CHARITY_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'ts-charity'); ?></a>
			<a href="<?php echo esc_url( TS_CHARITY_CONTACT ); ?>"><?php esc_html_e('Support', 'ts-charity'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'ts-charity'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'ts-charity'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'ts-charity'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'ts-charity'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'ts-charity'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'ts-charity'); ?></b> <?php esc_html_e('Set the front page: Go to Setting >> Reading >> Set the front page display static page to home page', 'ts-charity'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'ts-charity'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( TS_CHARITY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'ts-charity'); ?></a>
			<a href="<?php echo esc_url( TS_CHARITY_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'ts-charity'); ?></a>
			<a href="<?php echo esc_url( TS_CHARITY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'ts-charity'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/Responsive.jpg" alt="" />
	  			<p><?php esc_html_e( 'Our premium Charity WordPress theme is the best option to showcase your good deeds to people and encourage them to participate in the journey of making this earth a better place to live on. Whether you are run an environmental NGO, business-friendly international NGO, child welfare NGO, women rights organization or an old-age home, this premium NGO WordPress theme is all you need to display your work and services in the best possible way. It is important that your website look different and unique from others and do justice to the services and work you have been doing. And what is the better way to do this than choose our premium Charity WordPress theme. It will not just boost up people to join your mission of doing charity but their response will also boost up your spirit of continuing the philanthrophy work with full fledge.', 'ts-charity' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'ts-charity' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'ts-charity' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'ts-charity' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script type="text/javascript">
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>

<?php } ?>