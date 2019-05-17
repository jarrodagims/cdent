<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-50587003-1', 'auto');
	  ga('send', 'pageview');
	</script>	
	
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>

    <?php if (!empty(get_option('sherpa_schema'))): ?>

    <?= get_option('sherpa_schema') ?>

    <?php endif; ?>
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"name": "C and D Dent Guys",
		"image": "http://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"@type": "AutoRepair",
		"description": "Offering paintless dent repair, dent removal, hail damage repair, and auto dent repair in El Paso, TX and all across the nation.",
		"url": "https://www.candddentguys.com/",	
			"logo":"https:\/\/www.candddentguys.com\/img\/dentguyslogo.png",
		"department": 
		[
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys East",
		"image": "https://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "El Paso",
			"addressRegion": "TX",
			"postalCode": "79936",
			"streetAddress": "1441 N. Zaragoza",
			"telephone": "915- 479-1863"
		},
		"geo": {"@type": "GeoCoordinates",
			"latitude": "31.7359269",
			"longitude": "-106.2965191"
		},
		"hasMap": "https://www.google.com/maps/place/1441+N+Zaragoza+Rd,+El+Paso,+TX+79936/@31.7359269,-106.2965191,17z/data=!3m1!4b1!4m5!3m4!1s0x86e7439c98428eb7:0xf2be46d1fcb7b764!8m2!3d31.7359269!4d-106.2943304"
	},
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys Zaragoza",
		"image": "https://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "El Paso",
			"addressRegion": "TX",
			"postalCode": "79936",
			"streetAddress": "1404 N. Zaragoza",
			"telephone": "915- 479-1863"
		},
		"geo": {"@type": "GeoCoordinates",
			"latitude": "31.7359269",
			"longitude": "-106.2965191"
		},
		"hasMap": "https://www.google.com/maps/place/1441+N+Zaragoza+Rd,+El+Paso,+TX+79936/@31.7359269,-106.2965191,17z/data=!3m1!4b1!4m5!3m4!1s0x86e7439c98428eb7:0xf2be46d1fcb7b764!8m2!3d31.7359269!4d-106.2943304"
	},
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys Central",
		"image": "https://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "El Paso",
			"addressRegion": "TX",
			"postalCode": "79905",
			"streetAddress": "220 Chelsea Drive",
			"telephone": "915- 479-1863"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "31.773872",
			"longitude": "-106.4275307"
		},
		"hasMap": "https://www.google.com/maps/place/220+Chelsea+St,+El+Paso,+TX+79905/@31.773872,-106.4275307,17z/data=!3m1!4b1!4m5!3m4!1s0x86e75bccddaf6b15:0x1cb630b0784c9a40!8m2!3d31.773872!4d-106.425342"
	},
	{

		"@type": "AutoRepair",
		"name": "C and D Dent Guys Lower Valley",
		"image": "https://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "El Paso",
			"addressRegion": "TX",
			"postalCode": "79915",
			"streetAddress": "7924 Gateway Blvd East Ste 102",
			"telephone": "915- 479-1863"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "31.773872",
			"longitude": "-106.4275307"
		},
		"hasMap": "https://www.google.com/maps/place/7924+Gateway+Blvd+E+%23102,+El+Paso,+TX+79915/@31.7531398,-106.3506694,17z/data=!3m1!4b1!4m5!3m4!1s0x86e75b4d6eba31e7:0x97d2d48a1ea34fa1!8m2!3d31.7531398!4d-106.3484807"
	},
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys Socorro",
		"image": "https://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "El Paso",
			"addressRegion": "TX",
			"postalCode": "79927",
			"streetAddress": "600 Delhi Drive",
			"telephone": "(877) 354-3368 "
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "31.6719188",
			"longitude": "-106.2857735"
		},
		"hasMap": "https://www.google.com/maps/place/600+Delhi+Dr,+Socorro,+TX+79927/@31.6719188,-106.2857735,17z/data=!3m1!4b1!4m5!3m4!1s0x86e7426e2143e223:0x2fe9f89c563afc!8m2!3d31.6719188!4d-106.2835848"
	},
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys Las Cruces",
		"image": "https://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "Las Cruces",
			"addressRegion": "NM",
			"postalCode": "88001",
			"streetAddress": "406 Roundtree Place",
			"telephone": "(877) 354-3368 "
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "32.3026",
			"longitude": "-106.7961887"
		},
		"hasMap": "https://www.google.com/maps/place/406+Roundtree+Pl,+Las+Cruces,+NM+88005/@32.3026,-106.7961887,17z/data=!3m1!4b1!4m5!3m4!1s0x86de3d8ad44488b3:0xb40af0c3f5c7dddc!8m2!3d32.3026!4d-106.794"
	},
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys Arlington",
		"image": "http://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "Arlington",
			"addressRegion": "TX",
			"postalCode": "76013",
			"streetAddress": "1920 W Pioneer Pkwy"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "32.708433",
			"longitude": "-97.1400567"
		},
		"hasMap": "https://www.google.com/maps/place/1920+W+Pioneer+Pkwy,+Arlington,+TX+76013/@32.708433,-97.1400567,17z/data=!3m1!4b1!4m5!3m4!1s0x864e7cd84795222d:0xce58718f8eeae2aa!8m2!3d32.708433!4d-97.137868"
	},
	{
		"@type": "AutoRepair",
		"name": "C and D Dent Guys San Antonio",
		"image": "http://www.candddentguys.com/wp-content/uploads/2016/11/canddentguys-logo.jpg",
		"address": {
			"@type": "PostalAddress",
			"addressLocality": "San Antonio",
			"addressRegion": "TX",
			"postalCode": "78238",
			"streetAddress": "6780 Bandera Road"
		},
		"geo": {
			"@type": "GeoCoordinates",
			"latitude": "29.4955832",
			"longitude": "-98.6220615"
		},
		"hasMap": "https://www.google.com/maps/place/6780+Bandera+Rd,+San+Antonio,+TX+78238/@29.4954868,-98.6221784,17z/data=!3m1!4b1!4m5!3m4!1s0x865c5d7717813857:0x7c3cc6d119b77b69!8m2!3d29.4954868!4d-98.6199897"
		}	
		],
		"sameAs" : [ "https://www.facebook.com/pages/CD-Dent-Guys/383932885019931",
		"https://twitter.com/CDDentGuys",
		"https://plus.google.com/u/0/102100463266227922028?review=1"
		]
	}
	</script>

	<!-- Default Statcounter code for C&D Dent Guys
	https://www.candddentguys.com/ -->
	<script type="text/javascript">
	var sc_project=8085692; 
	var sc_invisible=1; 
	var sc_security="0d323da7"; 
	</script>
	<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async=""></script>
	<noscript><div class="statcounter"><a title="Web Analytics"
	href="http://statcounter.com/" target="_blank"><img
	class="statcounter"
	src="//c.statcounter.com/8085692/0/0d323da7/1/" alt="Web
	Analytics"></a></div></noscript>
	<!-- End of Statcounter Code -->	
	<script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/950027049/?random=1549043984741&amp;cv=9&amp;fst=1549043984741&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=1080&amp;u_w=1920&amp;u_ah=1040&amp;u_aw=1920&amp;u_cd=24&amp;u_his=2&amp;u_tz=-420&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;sendb=1&amp;frm=0&amp;url=https%3A%2F%2Fwww.candddentguys.com%2F&amp;tiba=C%20%26%20D%20Dent%20Guys%20%7C%20Car%20Dent%20Repair%20%26%20Hail%20Damage%20Repair%20in%20El%20Paso&amp;rfmt=3&amp;fmt=4"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/10a/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.googleapis.com/maps-api-v3/api/js/35/10a/util.js"></script>
	
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = '/thank-you/';
}, false );
</script>	
	</head>

<body <?php body_class(); ?>>
    <?php if(is_front_page()) : ?>
    <div class="chevron-bg">
        <?php endif; ?>
        <div class="landing-bg">
            <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser.</p>
    <p class="browsehappy">Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
            <div class="top-header <?php if(!is_front_page()) : ?>internal<?php endif; ?>">
                <div class="container">
                    <div class="v-align row">
                        <div class="col-xs-12 navbar-button text-center">


                            <a class="navbar-brand d-lg-block d-none" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                                    alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>

                            <?php echo responsive_bs_menu('primary', 'left', SITENAME); ?>

                            <div class="navbar-right">

                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>">
                                            <?php printPhone(); ?></a><br>									    
											1927 Witt Rd, Frisco, TX 75036<br>
											1069 N Preston Rd Prosper, TX 75078<br>											
											7740 Preston Rd, Frisco, TX 75034 (Car Wash)<br>
											26780 US HWY 380 E., Aubrey, TX 76227 (Car Wash)</li>
                                    <li class="menu-item directions"><a href="<?php echo get_site_url() ?>/contact-us/"><span>6455
                                                Hiller Suite 10, El Paso, Texas 79925</span></a></a></li>
                                    <li class="menu-item contact"><a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>"><span>Call
                                                Us Today!
                                                <?php printPhone(); ?></span></a></li>
                                </ul>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <?php if(!is_front_page()) : ?>
        </div>
        <?php endif; ?>


        <?php if(!is_front_page()) : ?>
        <a class="navbar-brand d-xs-block d-lg-none" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
        <?php endif; ?>