<?php
/**
 * Static HTML Generator for MBR Flexibles Ltd
 * Compiles modular PHP source into clean, extensionless directory routes:
 * 
 * /                                       -> index.html
 * https://mbrflexibles.com/about/                  -> about/index.html
 * https://mbrflexibles.com/infrastructures/        -> infrastructures/index.html
 * https://mbrflexibles.com/markets/                -> markets/index.html
 * https://mbrflexibles.com/food-beverages/         -> food-beverages/index.html
 * https://mbrflexibles.com/pharmaceutical/         -> pharmaceutical/index.html
 * https://mbrflexibles.com/home-personal/          -> home-personal/index.html
 * https://mbrflexibles.com/agriculture/            -> agriculture/index.html
 * https://mbrflexibles.com/pet-foods/              -> pet-foods/index.html
 * https://mbrflexibles.com/pouch-type/             -> pouch-type/index.html
 * https://mbrflexibles.com/quality-sustainability/ -> quality-sustainability/index.html
 * https://mbrflexibles.com/contact/                -> contact/index.html
 * https://mbrflexibles.com/terms/                  -> terms/index.html
 * https://mbrflexibles.com/policy/                 -> policy/index.html
 */

ini_set('default_charset', 'UTF-8');
if (function_exists('mb_internal_encoding')) {
    mb_internal_encoding('UTF-8');
}

$currentDir = __DIR__;
if (basename($currentDir) === '_php_backup') {
    $sourceDir = $currentDir;
    $targetRootDir = dirname($currentDir);
} else {
    $sourceDir = $currentDir . '/_php_backup';
    $targetRootDir = $currentDir;
}

$pages = [
    [
        'source' => $sourceDir . '/index.php',
        'rel_dir' => '',
        'canonical' => 'https://mbrflexibles.com/',
    ],
    [
        'source' => $sourceDir . '/about.php',
        'rel_dir' => 'about',
        'canonical' => 'https://mbrflexibles.com/about/',
    ],
    [
        'source' => $sourceDir . '/infrastructures.php',
        'rel_dir' => 'infrastructures',
        'canonical' => 'https://mbrflexibles.com/infrastructures/',
    ],
    [
        'source' => $sourceDir . '/markets.php',
        'rel_dir' => 'markets',
        'canonical' => 'https://mbrflexibles.com/markets/',
    ],
    [
        'source' => $sourceDir . '/food-beverages.php',
        'rel_dir' => 'food-beverages',
        'canonical' => 'https://mbrflexibles.com/food-beverages/',
    ],
    [
        'source' => $sourceDir . '/pharmaceutical.php',
        'rel_dir' => 'pharmaceutical',
        'canonical' => 'https://mbrflexibles.com/pharmaceutical/',
    ],
    [
        'source' => $sourceDir . '/home-personal.php',
        'rel_dir' => 'home-personal',
        'canonical' => 'https://mbrflexibles.com/home-personal/',
    ],
    [
        'source' => $sourceDir . '/agriculture.php',
        'rel_dir' => 'agriculture',
        'canonical' => 'https://mbrflexibles.com/agriculture/',
    ],
    [
        'source' => $sourceDir . '/pet-foods.php',
        'rel_dir' => 'pet-foods',
        'canonical' => 'https://mbrflexibles.com/pet-foods/',
    ],
    [
        'source' => $sourceDir . '/pouch-type.php',
        'rel_dir' => 'pouch-type',
        'canonical' => 'https://mbrflexibles.com/pouch-type/',
    ],
    [
        'source' => $sourceDir . '/quality-sustainability.php',
        'rel_dir' => 'quality-sustainability',
        'canonical' => 'https://mbrflexibles.com/quality-sustainability/',
    ],
    [
        'source' => $sourceDir . '/contact.php',
        'rel_dir' => 'contact',
        'canonical' => 'https://mbrflexibles.com/contact/',
    ],
    [
        'source' => $sourceDir . '/terms.php',
        'rel_dir' => 'terms',
        'canonical' => 'https://mbrflexibles.com/terms/',
    ],
    [
        'source' => $sourceDir . '/policy.php',
        'rel_dir' => 'policy',
        'canonical' => 'https://mbrflexibles.com/policy/',
    ],
];

echo "=====================================================\n";
echo "MBR Flexibles Ltd - Clean Static HTML Generator\n";
echo "=====================================================\n";
echo "Source dir: " . $sourceDir . "\n";
echo "Target Root: " . $targetRootDir . "\n\n";

foreach ($pages as $p) {
    if (!file_exists($p['source'])) {
        echo "Warning: Source file not found: " . $p['source'] . "\n";
        continue;
    }

    $isSubfolder = ($p['rel_dir'] !== '');
    $rootPrefix = $isSubfolder ? '../' : '';

    if ($isSubfolder) {
        $targetFolder = $targetRootDir . '/' . $p['rel_dir'];
        if (!is_dir($targetFolder)) {
            mkdir($targetFolder, 0755, true);
        }
        $targetFile = $targetFolder . '/index.html';
    } else {
        $targetFile = $targetRootDir . '/index.html';
    }

    echo "Processing: " . basename($p['source']) . " -> " . ($isSubfolder ? $p['rel_dir'] . '/index.html' : 'index.html') . "\n";

    $phpCode = '
        ini_set("default_charset", "UTF-8");
        $_SERVER["HTTPS"] = "on";
        $_SERVER["SERVER_PORT"] = 443;
        $_SERVER["HTTP_HOST"] = "mbrflexibles.com";
        $_SERVER["DOCUMENT_ROOT"] = ' . var_export($targetRootDir, true) . ';
        $root_prefix = ' . var_export($rootPrefix, true) . ';
        chdir(' . var_export($sourceDir, true) . ');
        ob_start();
        include ' . var_export($p['source'], true) . ';
        $html = ob_get_clean();
        echo $html;
    ';

    $tempScript = $sourceDir . '/temp_runner.php';
    file_put_contents($tempScript, '<?php ' . $phpCode);

    $phpBinary = 'C:\\xampp\\php\\php.exe';
    if (!file_exists($phpBinary)) {
        $phpBinary = 'php';
    }

    $rendered = shell_exec($phpBinary . ' ' . escapeshellarg($tempScript));
    @unlink($tempScript);

    if (empty($rendered)) {
        die("Error rendering " . $p['source'] . "\n");
    }

    // 1. Make internal navigation links clean & portable
    if ($isSubfolder) {
        $linkMap = [
            'href="index.php"' => 'href="../"',
            'href="index.html"' => 'href="../"',
            'href="./"' => 'href="../"',
            'href="about.php"' => 'href="../about/"',
            'href="about.html"' => 'href="../about/"',
            'href="infrastructures.php"' => 'href="../infrastructures/"',
            'href="infrastructures.html"' => 'href="../infrastructures/"',
            'href="markets.php"' => 'href="../markets/"',
            'href="markets.html"' => 'href="../markets/"',
            'href="food-beverages.php"' => 'href="../food-beverages/"',
            'href="food-beverages.html"' => 'href="../food-beverages/"',
            'href="pharmaceutical.php"' => 'href="../pharmaceutical/"',
            'href="pharmaceutical.html"' => 'href="../pharmaceutical/"',
            'href="home-personal.php"' => 'href="../home-personal/"',
            'href="home-personal.html"' => 'href="../home-personal/"',
            'href="agriculture.php"' => 'href="../agriculture/"',
            'href="agriculture.html"' => 'href="../agriculture/"',
            'href="pet-foods.php"' => 'href="../pet-foods/"',
            'href="pet-foods.html"' => 'href="../pet-foods/"',
            'href="pouch-type.php"' => 'href="../pouch-type/"',
            'href="pouch-type.html"' => 'href="../pouch-type/"',
            'href="quality-sustainability.php"' => 'href="../quality-sustainability/"',
            'href="quality-sustainability.html"' => 'href="../quality-sustainability/"',
            'href="contact.php"' => 'href="../contact/"',
            'href="contact.html"' => 'href="../contact/"',
            'href="terms.php"' => 'href="../terms/"',
            'href="terms.html"' => 'href="../terms/"',
            'href="policy.php"' => 'href="../policy/"',
            'href="policy.html"' => 'href="../policy/"',
        ];

        // Replace asset URLs that do not already have ../
        $assetPatterns = [
            '/(href|src|data-src)=["\'](?!\.\.\/|https?:\/\/|\/\/|#|data:|mailto:|tel:)(css|js|img|fonts)\//i' => '$1="../$2/',
            '/url\((["\']?)(?!\.\.\/|https?:\/\/|\/\/|data:)(img|css|fonts)\//i' => 'url($1../$2/',
        ];

        foreach ($linkMap as $from => $to) {
            $rendered = str_replace($from, $to, $rendered);
        }

        foreach ($assetPatterns as $pattern => $replacement) {
            $rendered = preg_replace($pattern, $replacement, $rendered);
        }
    } else {
        // Root page links
        $linkMap = [
            'href="index.php"' => 'href="./"',
            'href="index.html"' => 'href="./"',
            'href="about.php"' => 'href="about/"',
            'href="about.html"' => 'href="about/"',
            'href="infrastructures.php"' => 'href="infrastructures/"',
            'href="infrastructures.html"' => 'href="infrastructures/"',
            'href="markets.php"' => 'href="markets/"',
            'href="markets.html"' => 'href="markets/"',
            'href="food-beverages.php"' => 'href="food-beverages/"',
            'href="food-beverages.html"' => 'href="food-beverages/"',
            'href="pharmaceutical.php"' => 'href="pharmaceutical/"',
            'href="pharmaceutical.html"' => 'href="pharmaceutical/"',
            'href="home-personal.php"' => 'href="home-personal/"',
            'href="home-personal.html"' => 'href="home-personal/"',
            'href="agriculture.php"' => 'href="agriculture/"',
            'href="agriculture.html"' => 'href="agriculture/"',
            'href="pet-foods.php"' => 'href="pet-foods/"',
            'href="pet-foods.html"' => 'href="pet-foods/"',
            'href="pouch-type.php"' => 'href="pouch-type/"',
            'href="pouch-type.html"' => 'href="pouch-type/"',
            'href="quality-sustainability.php"' => 'href="quality-sustainability/"',
            'href="quality-sustainability.html"' => 'href="quality-sustainability/"',
            'href="contact.php"' => 'href="contact/"',
            'href="contact.html"' => 'href="contact/"',
            'href="terms.php"' => 'href="terms/"',
            'href="terms.html"' => 'href="terms/"',
            'href="policy.php"' => 'href="policy/"',
            'href="policy.html"' => 'href="policy/"',
        ];

        foreach ($linkMap as $from => $to) {
            $rendered = str_replace($from, $to, $rendered);
        }
    }

    // 2. Protect and ensure canonical URL
    if (strpos($rendered, '<link rel="canonical"') !== false) {
        $rendered = preg_replace('/<link\s+rel="canonical"\s+href="[^"]*"/i', '<link rel="canonical" href="' . $p['canonical'] . '"', $rendered);
    } else {
        $rendered = str_replace('</title>', "</title>\n    <link rel=\"canonical\" href=\"{$p['canonical']}\" />", $rendered);
    }

    // 3. Ensure HTTPS protocols
    $rendered = str_replace('http://fonts.googleapis.com', 'https://fonts.googleapis.com', $rendered);
    $rendered = str_replace('http://7dayscreation.com', 'https://7dayscreation.com', $rendered);

    file_put_contents($targetFile, $rendered);
    echo "Saved: " . ($isSubfolder ? $p['rel_dir'] . '/index.html' : 'index.html') . " (" . strlen($rendered) . " bytes)\n";
}

echo "\nAll 14 clean static HTML pages successfully generated!\n";
