<?php

/* URL Methods */

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') { $url = "https://"; }  
else {$url = "http://"; }  
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];

$link = basename(__FILE__, '.php');
if ($link = 'index') {
    $link = '';
};

$isLocal = false;

if (strpos($url, 'dablue.space') !== false) {
    $link = 'https://dablue.space/' . $link;
} else if (strpos($url, 'localhost') !== false) {
    $link = 'http://localhost:3000/' . $link;
    $isLocal = true;
}

echo
    '<head>
        <title>' . $title . '</title>
        
        <!-- META TAGS -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- SEO -->
        <meta name="author" content="@tiodopaave">
        <meta name="description" content="Um presente de Doug para Blue">
        <meta name="keywords" content="' . $keywords . '">
        <link rel="canonical" href="' . $link . '">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com"> 
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">';

        echo '<!-- CSS Stylesheets -->';
        for ($i = 0; $i < count($css); $i++) {
            echo '<link rel="stylesheet" href="CSS/' . $css[$i] . '.css" type="text/css">';
        };

        echo '<!-- Scrypts -->';
        for ($i = 0; $i < count($js); $i++) {
            echo '<script src="JS/' . $js[$i] . '.js"></script>';
        };
        
    echo '
        <link rel="shortcut icon" href="IMG/favicon/favicon.ico">
        <link rel="icon" sizes="16x16 32x32 64x64" href="IMG/favicon/favicon.ico">
        <link rel="icon" type="image/png" sizes="196x196" href="IMG/favicon/favicon-192.png">
        <link rel="icon" type="image/png" sizes="160x160" href="IMG/favicon/favicon-160.png">
        <link rel="icon" type="image/png" sizes="96x96" href="IMG/favicon/favicon-96.png">
        <link rel="icon" type="image/png" sizes="64x64" href="IMG/favicon/favicon-64.png">
        <link rel="icon" type="image/png" sizes="32x32" href="IMG/favicon/favicon-32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="IMG/favicon/favicon-16.png">
        <link rel="apple-touch-icon" href="IMG/favicon/favicon-57.png">
        <link rel="apple-touch-icon" sizes="114x114" href="IMG/favicon/favicon-114.png">
        <link rel="apple-touch-icon" sizes="72x72" href="IMG/favicon/favicon-72.png">
        <link rel="apple-touch-icon" sizes="144x144" href="IMG/favicon/favicon-144.png">
        <link rel="apple-touch-icon" sizes="60x60" href="IMG/favicon/favicon-60.png">
        <link rel="apple-touch-icon" sizes="120x120" href="IMG/favicon/favicon-120.png">
        <link rel="apple-touch-icon" sizes="76x76" href="IMG/favicon/favicon-76.png">
        <link rel="apple-touch-icon" sizes="152x152" href="IMG/favicon/favicon-152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="IMG/favicon/favicon-180.png">
        <meta name="msapplication-TileColor" content="#FFFFFF">
        <meta name="msapplication-TileImage" content="IMG/favicon/favicon-144.png">
        <meta name="msapplication-config" content="IMG/favicon/browserconfig.xml">
        
        </head>';
?>