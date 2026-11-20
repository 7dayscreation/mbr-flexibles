<?php
/**
 * MBR Flexibles Ltd - Modular Header Component
 */
$current_page = $current_page ?? '';
$header_style = $header_style ?? 'light';
$is_home = ($current_page === 'home');
$is_market_subpage = in_array($current_page, ['food-beverages', 'pharmaceutical', 'home-personal', 'agriculture', 'pet-foods']);
$logo_img = ($header_style === 'white') ? 'img/logo.png' : 'img/logo1.png';
$header_class = ($header_style === 'white') ? 'type-4 fixed white' : 'type-4 light fixed';
?>
<!-- LOADER -->
<div id="preloader">
    <div id="status"></div>
</div>

<?php include __DIR__ . '/menu-inside.php'; ?>

<div id="content-block">
    <!-- HEADER -->
    <header class="<?php echo $header_class; ?>">
        <div class="wide-container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-2">
                    <a class="logo" href="<?php echo url(''); ?>"><img src="<?php echo asset($logo_img); ?>" alt="MBR Flexibles Ltd." /></a>  
                </div>
                <div class="col-xs-6 col-sm-10 text-right">

                    <div class="navigation-wrapper">

                        <a class="logo responsive" href="<?php echo url(''); ?>"><img src="<?php echo asset('img/logo.png'); ?>" alt="MBR Flexibles Ltd." /></a>

                        <?php if (!$is_home): ?>
                        <div class="navigation-overflow">
                            <nav class="text-left clearfix">
                                <ul>
                                    <li class="<?php echo ($current_page === 'home') ? 'active' : ''; ?>"><a href="<?php echo url(''); ?>">Home</a></li>
                                    <li class="<?php echo ($current_page === 'about') ? 'active' : ''; ?>"><a href="<?php echo url('about/'); ?>">About</a></li>
                                    <li class="<?php echo ($current_page === 'infrastructures') ? 'active' : ''; ?>"><a href="<?php echo url('infrastructures/'); ?>">Infrastructures</a></li>
                                    <li class="<?php echo ($current_page === 'markets' || $is_market_subpage) ? 'active' : ''; ?>"><a href="<?php echo url('markets/'); ?>">Markets</a></li>
                                    <li class="<?php echo ($current_page === 'pouch-type') ? 'active' : ''; ?>"><a href="<?php echo url('pouch-type/'); ?>">Pouch Type</a></li>
                                    <li class="<?php echo ($current_page === 'quality-sustainability') ? 'active' : ''; ?>"><a href="<?php echo url('quality-sustainability/'); ?>">Quality & Sustainability</a></li>
                                    <li class="<?php echo ($current_page === 'contact') ? 'active' : ''; ?>"><a href="<?php echo url('contact/'); ?>">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <?php endif; ?>

                    </div>

                    <div class="hamburger-icon open-navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>

                    <div class="hamburger-icon open-overlay" data-rel="1">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="close-layer toggle-visibility"><div class="button-close"></div></div>
    </header>
