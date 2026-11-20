<?php
/**
 * MBR Flexibles Ltd - Modular Menu Component
 * Converted from menu-inside.php into a reusable module section for all pages
 */
$current_page = $current_page ?? '';
$is_market_subpage = in_array($current_page, ['food-beverages', 'pharmaceutical', 'home-personal', 'agriculture', 'pet-foods']);
?>
<div class="overlay" data-rel="1">
    <div class="animation-wrapper full-size"></div>
    <div class="content-wrapper full-size">
        <div class="cell-view page-height">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-xs-b30 col-sm-0">
                        <nav class="text-left clearfix">
                            <ul>
                                <li class="<?php echo ($current_page === 'home') ? 'active' : ''; ?>">
                                    <a href="<?php echo url(''); ?>">Home</a>
                                </li>
                                <li class="<?php echo ($current_page === 'about') ? 'active' : ''; ?>">
                                    <a href="<?php echo url('about/'); ?>">About</a>
                                </li>
                                <li class="<?php echo ($current_page === 'infrastructures') ? 'active' : ''; ?>">
                                    <a href="<?php echo url('infrastructures/'); ?>">Infrastructures</a>
                                </li>
                                <li class="<?php echo ($current_page === 'markets' || $is_market_subpage) ? 'active' : ''; ?>">
                                    <a href="<?php echo url('markets/'); ?>">Markets</a>
                                </li>
                                <li class="<?php echo ($current_page === 'pouch-type') ? 'active' : ''; ?>">
                                    <a href="<?php echo url('pouch-type/'); ?>">Pouch Type</a>
                                </li>
                                <li class="<?php echo ($current_page === 'quality-sustainability') ? 'active' : ''; ?>">
                                    <a href="<?php echo url('quality-sustainability/'); ?>">Quality & Sustainability</a>
                                </li>
                                <li class="<?php echo ($current_page === 'contact') ? 'active' : ''; ?>">
                                    <a href="<?php echo url('contact/'); ?>">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-offset-1 col-xs-b30 col-sm-0">
                        <div class="simple-article light transparent col-xs-b30 col-sm-b50">
                            <div class="h4 small">INFORMATION</div>
                            <div class="empty-space col-xs-b10"></div>
                            <p align="">MBR Flexibles Ltd.<br>
                            79/80, Nr. Chacharwadi Temple<br>
                            B/h Pradeep Overseas<br>
                            Sarkhej - Bavla Highway, Sanand<br>
                            Ahmedabad 382213</p>
                        </div>
                        <div class="simple-article light transparent col-xs-b30 col-sm-b50">
                            <div class="h4 small">CONTACT INFO</div>
                            <div class="empty-space col-xs-b10"></div>
                            <p>Email: <a class="mouseover-simple" href="mailto:info@mbrflexibles.com" style="color: #fff;"><b>info@mbrflexibles.com</b></a></p>
                        </div>
                        <div class="h4 small light">FOLLOW ME</div>
                        <div class="empty-space col-xs-b15"></div>
                        <div class="follow">
                            <a href="https://www.facebook.com/" target="_blank" class="entry"><i class="fa fa-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-md-offset-1">
                        <div class="simple-article light col-xs-b10">Coming soon</div>
                    </div>
                </div>
            </div>
        </div>
        <a class="button-close"></a>
    </div>
</div>
