<?php

    /* REQUIRES */
    // $image   = string (url);
    // $ext     = string;
    // $sizes   = array[int];

    /* RECOMMENDED */
    // $alt     = string;

    /* OPTIONAL */
    // $id      = string;
    // $class   = string;

    $last_size = $sizes[count($sizes) - 1];

    echo '<img sizes="';

    for ($i = count($sizes) - 1; $i > 0; $i--) {
        $min_width = $sizes[$i] * 4;
        echo '(min-width:'.$min_width.'w) ../assets/img/'.$image.'_'.$sizes[$i].'.'.$ext.', ';
    }

    echo '../assets/img/'.$image.'_'.$sizes[$i].'.'.$ext;
    
    echo '" srcset="';
    
    foreach ($sizes as $size) {
        echo '../assets/img/'.$image.'_'.$size.'.'.$ext.' '.$size.'w';
        if ($size !== $last_size) { echo ', '; };
    }

    echo '" src="../assets/img/'.$image.'_'.$last_size.'.'.$ext.'"';
    
    if ($id !== '') { echo ' id="'.$id.'"';}
    if ($class !== '') { echo ' class="'.$class.'"';}

    echo ' alt="'.$alt.'">';

?>