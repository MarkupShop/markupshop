<?php get_header();
	// load icons
    get_template_part('svg');
?>

<section id="intro" role="banner">

	<h1 class="page-title">
		<svg viewBox="0 0 400 400" class="main-logo" aria-label="MarkupShop">
			<title>MarkupShop</title>
            <use xlink:href="#markupshop-logo"></use>
        </svg>
	</h1>

	<h2>A small development agency focused on helping people build the things they need.</h2>

</section>

<section id="about" role="section">

	<h3 class="section-header">About Us</h3>

	<div class="about-text">
		<p>Organizations and their clients are desperate for reliable development when they need it &mdash; and we&rsquo;re here to help.</p>
		<p>We believe that well-crafted development is necessary to produce quality products. We're obsessive about delivering high-quality code and doing it on time.</p>
		<p>We&rsquo;re not interested in being the biggest agency around &mdash; just a valuable partner for the folks we work with.</p>
	</div>

</section><!--#about-->

<section id="services" role="section">

	<h3 class="section-header">Services</h3>

	<dl class="development">
		<dt>
            <span class="icon">
                <svg viewBox="0 0 50 50" class="shape-tab">
                    <use xlink:href="#icon-development"></use>
                </svg>
            </span>
            Front-End Development
        </dt>
		<dd>Our bread and butter is custom built sites that convert on your goals.</dd>
	</dl>

	<dl class="customization">
		<dt>
            <span class="icon">
                <svg viewBox="-1 0 25 25" class="shape-tab">
                    <use xlink:href="#icon-customization"></use>
                </svg>
            </span>
            CMS Customization
        </dt>
		<dd>Have a CMS that just needs a little work? We&rsquo;re here for you, too.</dd>
	</dl>

	<dl class="support">
		<dt>
            <span class="icon">
                <svg viewBox="0 0 15 15" class="shape-tab">
                    <use xlink:href="#icon-support"></use>
                </svg>
            </span>
            Ongoing Support
        </dt>
		<dd>We can also be your retainer-free support team.</dd>
	</dl>

</section><!--#services-->

<section id="contact" role="section">

	<div class="contact-text">

		<h3 class="section-header">Get In Touch</h3>
		
		<a href="mailto:contact@markupshop.com">contact<span>@markupshop.com</span></a> 
	
		<p>If you&rsquo;ve got a project ready to start, or are just looking for someone to be your &ldquo;go-to&rdquo; developers in the future, we&rsquo;d love to hear from you. We love talking with others about their projects and helping folks map out the way forward.</p>
		
		<div id="bios">

			<div class="mobley">
				<img alt="Josh Mobley" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/mobley_circle.png" />
				<dl>
					<dt class="name">Josh Mobley</dt>
					<dd class="job-title">Managing Partner</dd>
				</dl>
			</div>

			<div class="rucker">
				<img alt="Josh Rucker" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/rucker_circle.png" />
				<dl>
					<dt class="name">Josh Rucker</dt>
					<dd class="job-title">Partner</dd>
				</dl>
			</div>

		</div>
		
	</div>
	
</section>

<?php get_footer(); ?>
