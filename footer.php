<section class="home-module-6">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2>We are locally <span class="br-xs">owned & operated!</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <strong class="title">COLORADO</strong>
                <p>3815 W Service Rd Evans, CO 80620<br />
                    300 E 16th St Suite 209 Greeley, CO 80631</p>
            </div>
            <div class="col">
                <strong class="title">ARLINGTON</strong>
                <p>
                    1920 W Pioneer Pkwy Arlington, TX 76013
                </p>
            </div>
            <div class="col">
                <strong class="title">FRISCO</strong>
                <p>
                    7740 Preston Rd, Frisco, TX 75034 (Car Wash)<br>
					1927 Witt Rd, Frisco, TX 75036
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">

                <strong class="title">AUBREY</strong>
                <p>
                    26780 US HWY 380 E., Aubrey, TX 76227<br>(Car Wash)
                </p>
            </div>
            <div class="col">
                <strong class="title">EL PASO</strong>
                <p>
                    <strong>By Appointment Only</strong><br> <a href="tel:<?php if (!empty(get_option('sherpa_telephone_number'))) : echo get_option('sherpa_telephone_number'); endif; ?>">
                        <?php printPhone(); ?></a>
                </p>
            </div>
            <div class="col">

                <strong class="title">PROSPER</strong>
                <p>
                    1069 N Preston Rd Prosper, TX 75078
                </p>
            </div>
        </div>
    </div>
</section>
<section id="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="row align-items-center">
                    <div class="col logo-footer">
                        <a class="navbar-brand" href='<?php echo get_site_url(); ?>'><img src="<?= IMGURL; ?>logo.png"
                                alt="<?php echo get_bloginfo(
                                'description'
                            ); ?>" /></a>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col col-lg-5 contact-footer d-none d-md-block">
                                <span class="title">&nbsp;</span>
                                <p>Please feel free to contact us. Call our number or check above to see if <span class="br-md">there is an office in your area.</span></p>
                            </div>
                            <div class="col col-lg-7 phone-footer">
                                <div>
                                    <span class="title">Contact</span>
                                    <p><strong>Hail Repair:</strong> Call Carlos: <a href="tel:9154791863">(915) 479-1863
</a><br />
                                        <strong>Non-Hail Dent Repair:</strong> Call Derek: <a href="tel:9152564050">(915)
                                            256-4050</a>
                                   </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="d-md-none d-xs-block d-sm-block">
                <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
            </div> -->
        </div>

        <div class="row flex-row">
            <div class="col d-lg-block d-none">
                <?php echo non_responsive_bs_menu('footer', 'left', SITENAME); ?>
            </div>
            <div class="col col-lg-2"><a href="<?= SITEURL ?>/contact-us/" class="link-button">
                    <button class="btn btn-primary">
                        Contact us today
                    </button></a>

                <div class="d-md-none">
                    <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="d-none d-md-block">
                    <?php
$sm = new SocialMedia(array('facebook', 'twitter'));
$sm->setSize('sm');
$sm->showNetworkButtons();
$sm->setColorType('singleColor');
?>
                </div>
                <p class="small">
                    &copy;
                    <?php echo date('Y'); ?> C&D Dent Guys | All Rights Reserved
                </p>

            </div>
        </div>
    </div>
</section>
<?php wp_footer(); ?>
<?php
/**
 *
 * DO NOT WRITE JAVASCRIPT HERE
 *
 */
?>
</body>

</html>