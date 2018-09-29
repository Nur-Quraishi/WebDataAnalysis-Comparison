<?php
    include '../Common/simple_html_dom.php';
    $content = file_get_html($_POST['fullSite']);
    $price = $content->find('.price');

    echo $price[0];
?>
