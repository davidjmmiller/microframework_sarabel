<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <title>Hosting z506</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="/css/slick.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>

<body>
<nav id="mainNav" class="navbar navbar-default navbar-full">
    <div class="container container-nav">
        <div class="navbar-header">
            <button aria-expanded="false" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="index.html">
                <img class="logo" src="/images/logo.png" width="143" height="18">
            </a>
        </div>
        <div style="height: 1px;" aria-expanded="false" class="navbar-collapse collapse" id="bs">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#info"><?php echo t('about');?></a></li>
                <li><a href="#features"><?php echo t('features');?></a></li>
                <li><a href="#pricing"><?php echo t('pricing');?></a></li>
                <li><a href="#footer"><?php echo t('contact');?></a></li>
                <!--<li><a class="chat-button" href="#">Live Chat</a></li>-->
            </ul>
        </div>
    </div>
</nav>
<div id="top-content" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center rocket-animation-holder">
                <div class="rocket-animation">
                    <div class="rocket">
                        <img src="/images/rocket.png" width="136" height="190">
                        <span class="rocket-line rline1"></span>
                        <span class="rocket-line rline2"></span>
                        <span class="rocket-line rline3"></span>
                    </div>
                    <div class="cloud cloud1"><img src="/images/cloud.png" width="60" height="35"></div>
                    <div class="cloud cloud2"><img src="/images/cloud.png" width="60" height="35"></div>
                    <div class="cloud cloud3"><img src="/images/cloud.png" width="60" height="35"></div>
                </div>
                <h1><?php echo t('hero_message');?></h1>
                <h4><?php echo t('hero_submessage');?></h4>
                <div class="domain-form-holder">
                    <form id="domain-form">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-9 domain-text-holder">
                                    <input id="domain-text" class="domain-text" type="text" name="domain" />
                                    <i class="hroc hroc-search-icon"></i>
                                </div>
                                <div class="col-xs-12 col-md-3 btn-go-holder">
                                    <input id="search-domain" class="btn-go" type="button" name="submit" value="<?php echo t('button_go');?>" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4><?php echo t('ready_to_go_in_seconds');?></h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-3">
                <div id="info-box1" class="info-box opened-info">
                    <div class="info-icon"><i class="hroc hroc-business"></i></div>
                    <div class="info-title"><?php echo t('tangible_improvements');?></div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box2" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-transport"></i></div>
                    <div class="info-title"><?php echo t('fast_as_a_rocket');?></div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box3" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-technology"></i></div>
                    <div class="info-title"><?php echo t('ideas_to_life');?></div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
            <div class="col-xs-12 col-md-3">
                <div id="info-box4" class="info-box">
                    <div class="info-icon"><i class="hroc hroc-search"></i></div>
                    <div class="info-title"><?php echo t('discover_z506');?></div>
                    <div class="info-circle"><div class="circle-icon"></div></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text1" class="container-fluid info-text-holder">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-business"></i>
                    <div><?php echo t('tangible_improvements');?></div>
                </div>
                <div class="info-text">
                    <?php echo t('tangible_improvements_message');?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text2" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-transport"></i>
                    <div><?php echo t('fast_rocket');?></div>
                </div>
                <div class="info-text">
                    <?php echo t('tangible_improvements_message');?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text3" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-technology"></i>
                    <div><?php echo t('ideas_to_life');?></div>
                </div>
                <div class="info-text">
                    <?php echo t('ideas_to_life_message');?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="info-text4" class="container-fluid info-text-holder info-closed">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="info-title-icon">
                    <i class="hroc hroc-search"></i>
                    <div><?php echo t('discover_hosting_506');?></div>
                </div>
                <div class="info-text">
                    <?php echo t('discover_hosting_506_message');?>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="features" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4><?php echo t('hosting_features');?></h4>
                <h5><?php echo t('hosting_features_message');?></h5>
            </div>
        </div>
        <div class="row feature-row rtl-row">
            <div class="col-sm-12 col-md-5 text-center">
                <img class="feature-image" src="/images/feature1.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="feature-title"><?php echo t('security_guaranteed');?></div>
                <div class="feature-subtitle"><?php echo t('security_guaranteed_subtitle');?></div>
                <div class="feature-text">
                    <p><?php echo t('security_guaranteed_p1');?></p>
                    <p><?php echo t('security_guaranteed_p2');?></p>
                </div>
                <a class="feature-button" href="#"><?php echo t('select_plan');?></a>
            </div>
        </div>
        <div class="row feature-row">
            <div class="col-sm-12 col-md-5 text-center">
                <img class="feature-image" src="/images/feature2.png">
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="feature-title"><?php echo t('fast_rocket_h1');?></div>
                <div class="feature-subtitle"><?php echo t('fast_rocket_h2');?></div>
                <div class="feature-text">
                    <p><?php echo t('fast_rocket_p1');?></p>

                    <p><?php echo t('fast_rocket_p2');?></p>
                </div>
                <a class="feature-button" href="#"><?php echo t('select_plan');?></a>
            </div>
        </div>
    </div>
</div>
<div id="starting" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sx-12 col-md-6">
                <h4><?php echo t('start_your_building');?></h4>
            </div>
            <div class="col-sx-12 col-md-3">
                <div class="price-holder">
                    <div class="currency">$</div>
                    <div class="number">
                        <div class="num-big">3</div>
                        <div class="num-small-holder">
                            <div class="plan-info"><?php echo t('starting_from');?></div>
                            <div class="num-small">.38<div class="duration">/m</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sx-12 col-md-3">
                <a class="plan-button" href="#"><?php echo t('select_plan');?></a>
            </div>
        </div>
    </div>
</div>
<div id="pricing" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Pricing the Priceless</h4>
                <h5>Best prices ever for Search and Register your Domain name!</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="plan-box">
                    <div class="plan-box-header color-bg1">
                        <div class="plan-title">Starter</div>
                        <div class="price-holder">
                            <div class="currency">$</div>
                            <div class="number">
                                <div class="num-big">3</div>
                                <div class="num-small-holder">
                                    <div class="num-small">.38<div class="duration">/mo</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plan-box-content">
                        <ul class="c-list">
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Unlimited Storage</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>500 Protected Files</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>All Sharing Features</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Realtime Revoke</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Access to Party Integrations</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Free Native Apps</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>QNote Editor</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Offline File Access</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Basic Versioning</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Single Sign on</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>2-Factor Autentication</li>
                        </ul>
                    </div>
                    <div class="plan-box-button">
                        <a class="color-bg1" href="#">Select plan</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="plan-box best-seller">
                    <div class="plan-box-header color-bg2">
                        <div class="plan-title">Advanced</div>
                        <div class="price-holder">
                            <div class="currency">$</div>
                            <div class="number">
                                <div class="num-big">5</div>
                                <div class="num-small-holder">
                                    <div class="num-small">.38<div class="duration">/mo</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plan-box-content">
                        <ul class="c-list">
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Unlimited Storage</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>500 Protected Files</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>All Sharing Features</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Realtime Revoke</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Access to Party Integrations</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Free Native Apps</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>QNote Editor</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Offline File Access</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Basic Versioning</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Single Sign on</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>2-Factor Autentication</li>
                        </ul>
                    </div>
                    <div class="plan-box-button">
                        <a class="color-bg2" href="#">Select plan</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="plan-box">
                    <div class="plan-box-header color-bg3">
                        <div class="plan-title">Ultra</div>
                        <div class="price-holder">
                            <div class="currency">$</div>
                            <div class="number">
                                <div class="num-big">8</div>
                                <div class="num-small-holder">
                                    <div class="num-small">.38<div class="duration">/mo</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plan-box-content">
                        <ul class="c-list">
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Unlimited Storage</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>500 Protected Files</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>All Sharing Features</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Realtime Revoke</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Access to Party Integrations</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Free Native Apps</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>QNote Editor</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Offline File Access</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Basic Versioning</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>Single Sign on</li>
                            <li class="c-item not-inc"><i class="fas fa-check" aria-hidden="true"></i>2-Factor Autentication</li>
                        </ul>
                    </div>
                    <div class="plan-box-button">
                        <a class="color-bg3" href="#">Select plan</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="plan-box">
                    <div class="plan-box-header color-bg4">
                        <div class="plan-title">Pro</div>
                        <div class="price-holder">
                            <div class="currency">$</div>
                            <div class="number">
                                <div class="num-big">13</div>
                                <div class="num-small-holder">
                                    <div class="num-small">.38<div class="duration">/mo</div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="plan-box-content">
                        <ul class="c-list">
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Unlimited Storage</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>500 Protected Files</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>All Sharing Features</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Realtime Revoke</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Access to Party Integrations</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Free Native Apps</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>QNote Editor</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Offline File Access</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Basic Versioning</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>Single Sign on</li>
                            <li class="c-item"><i class="fas fa-check" aria-hidden="true"></i>2-Factor Autentication</li>
                        </ul>
                    </div>
                    <div class="plan-box-button">
                        <a class="color-bg4" href="#">Select plan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="reasons" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>More reasons why you’ll love Hostrocket</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="reason-box">
                    <h5>24/7  Amazing support</h5>
                    <p>Our support staff is available 24/7/365 to assist you via Telephone, LiveChat, or Email with any hosting-related issues</p>
                </div>
                <div class="reason-box">
                    <h5>45 Day Guarantee</h5>
                    <p>Try our services at no risk! If you're not completely satisfied you can cancel within 45 days for a complete refund.</p>
                </div>
                <div class="reason-box">
                    <h5>99.9% uptime</h5>
                    <p>The availability of your website is our top priority. We stand by that fact with our uptime guarantee!</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <iframe class="vimeo" src="https://player.vimeo.com/video/72978544" width="100%" height="310" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
<div id="testimonials" class="container-fluid">
    <div class="container">
        <div class="row text-center">
            <div class="col-xs-12">
                <div class="testimonials-slider">
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-slide">
                        <div class="slide-content">
                            <div class="col-sm-12 col-md-3">
                                <img src="/images/sample.jpg" alt="">
                            </div>
                            <div class="col-sm-12 col-md-9">
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque quos dolores et quas molestias excepturi.<br>
                                    praesentium voluptatum deleniti atque corrupti quos et quas molestias excepturi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footer" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 row-title">
                <h4>Get in touch</h4>
                <h5>You’re a step further to make the best desicion</h5>
            </div>
        </div>
        <div class="row main-footer-content">
            <p>Hostrocket network covers +250 countries and devices ranging from<br>
                desktops and laptops to smart phones and tablets.</p>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="contact-box">
                    <i class="hroc hroc-whatsapp"></i> +(038) 38 638036
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="contact-box">
                    <i class="hroc hroc-envelope"></i> hello@hostrocket.com
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
                <div class="contact-box">
                    <i class="hroc hroc-instagram"></i> @hostrocket
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/createjs.min.js"></script>
<script src="/js/slick.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>