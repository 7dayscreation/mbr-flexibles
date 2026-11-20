<?php
require_once __DIR__ . '/config.php';
$page_title = 'Contact - MBR Flexibles';
$page_desc = 'MBR FLEXIBLES LTD allow you to create a custom package that suits the needs of your product and your consumers, while having great shelf appeal.';
$page_keywords = 'MBR Flexibles, Packaging industry in ahmedabad, Pouch packaging services, Pouch manufacturers ahmedabad, Packaging pouches manufacturers, Flexible laminated pouches, Laminated pouches manufacturer';
$current_page = 'contact';
$header_style = 'light';
include __DIR__ . '/includes/head.php';
include __DIR__ . '/includes/header.php';
?>

<div class="contacts-wrapper-1">
            <div class="container">
                <div class="header-empty-space"></div>
                <div class="empty-space col-xs-b25 col-sm-b50"></div>

                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <div class="h2 light small"><b>CONTACT US</b></div>
                        <div class="empty-space col-xs-b15"></div>
                        <div class="simple-article large light transparent text-center">MBR FLEXIBLES LTD is a Limited Company promoted by well-experienced promoters of MBR Group.</div>
                    </div>
                </div>

                <div class="empty-space col-xs-b30 col-sm-b60"></div>

                <div class="row">
                    <div class="col-sm-3">
                        <div class="contacts-entry">
                            <div class="h4 light small"><b>ADDRESS</b></div>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="simple-article light transparent">
                                MBR Flexibles Ltd.<br>
								79/80, Nr. Chacharwadi Temple<br>
								B/h Pradeep Overseas<br>
								Sarkhej - Bavla Highway, Sanand<br>
								Ahemdabad 382213
                            </div>
                        </div>
                        <div class="empty-space col-xs-b25 col-sm-b0"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contacts-entry">
                            <div class="h4 light small"><b>PHONE</b></div>
                            <div class="empty-space col-xs-b15"></div>
                            
                        </div>
                        <div class="empty-space col-xs-b25 col-sm-b0"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contacts-entry">
                            <div class="h4 light small"><b>EMAIL</b></div>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="simple-article light transparent">
                                <a class="mouseover-simple"  href="mailto:info@mbrflexibles.com">info@mbrflexibles.com</a><br/>
                                
                            </div>
                        </div>
                        <div class="empty-space col-xs-b25 col-sm-b0"></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="contacts-entry">
                            <div class="h4 light small"><b>FOLLOW US</b></div>
                            <div class="empty-space col-xs-b15"></div>
                            <div class="follow">
                                <a class="entry" href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="empty-space col-xs-b55 col-sm-b110"></div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="h4 light"><b>HAVE A QUESTION?</b></div>
                    </div>
                </div>

                <div class="empty-space col-xs-b90 col-sm-b120"></div>
            </div>
        </div>

        <div class="container">
            <div class="contacts-form-1-align">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1">
                        <div class="empty-space col-xs-b60"></div>

                        <form class="contact-form">
                            <div class="row col-xs-b30">
                                <div class="col-sm-6 col-xs-b30 col-sm-b0">
                                    <div class="input-wrapper">
                                        <input name="name" class="input" type="text">
                                        <label>Name</label>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-wrapper">
                                        <input name="email" class="input" type="text">
                                        <label>Email</label>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row col-xs-b30">
                                <div class="col-sm-12">
                                    <div class="input-wrapper">
                                        <input name="subject" class="input" type="text">
                                        <label>Subject</label>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-wrapper">
                                        <textarea name="message" class="input"></textarea>
                                        <label>Message</label>
                                        <span></span>
                                    </div>
                                </div>
                            </div>

                            <div class="empty-space col-xs-b40"></div>

                            <div class="text-center">
                                <div class="button type-3">submit message<input type="submit"/></div>
                            </div>
                        </form>

                        <div class="empty-space col-xs-b60"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="map-wrapper">
            <div id="map-canvas" class="full-width" data-lat="22.889327" data-lng="72.428102" data-zoom="14"></div>
        </div>
        <div class="addresses-block hidden">
            <a class="marker" data-lat="22.889327" data-lng="72.428102" data-string="MBR Flexibles Ltd.. 79/80, Nr. Chacharwadi Temple, B/h Pradeep Overseas, Sarkhej - Bavla Highway, Sanand, Ahemdabad 382213"></a>
        </div>

<?php
$extra_scripts = '
    <!-- MAP -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="' . asset('js/map.js') . '"></script>
    <!-- CONTACT -->
    <script src="' . asset('js/contact.form.js') . '"></script>
';
include __DIR__ . '/includes/footer.php';
include __DIR__ . '/includes/scripts.php';
?>
