<?php
    function css($css) {
    if (isset($css)) {
        if (is_array($css)) {
            foreach ($css as $file) {
                echo '<link rel="stylesheet" href="'.$file.'" media="screen" />'."\n";
            }
        } else {
            echo '<link rel="stylesheet" href="'.$css.'" media="screen" />'."\n";
        }
    }
}

function js($js) {
    if (isset($js)) {
        if (is_array($js)) {
            foreach ($js as $file) {
                echo '<script type="text/javascript" src="'.$file.'"></script>'."\n";
            }
        } else {
            echo '<script type="text/javascript" src="'.$js.'"></script>'."\n";
        }
    }
}

?>
