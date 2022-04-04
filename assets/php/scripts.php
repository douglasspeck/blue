<?php

    echo '<!-- Scripts -->';
    $js = array_splice(scandir('./assets/js'), 2);
    foreach ($js as $js) {
        echo '<script src="./assets/js/' . $js . '"></script>';
    };

?>