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
        $css = array_splice(scandir('../netuno/assets/css'), 2);
        foreach ($css as $css) {
            echo '<link rel="stylesheet" href="../netuno/assets/css/' . $css . '" type="text/css">';
        };

        echo '<!-- Scrypts -->';
        $js = array_splice(scandir('../netuno/assets/js'), 2);
        foreach ($js as $js) {
            echo '<script src="../netuno/assets/js/' . $js . '"></script>';
        };
        
    echo '</head>';
?>