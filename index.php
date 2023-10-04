<?php
include_once 'top.php';
include_once 'menu.php';
include_once 'logIn.php';
?>

<div>
    <div class="container-fluid px-4">
        <?php
        //membuat logik sederhana untuk mengarahkan url ke file
        //yang mempunyai extension .php
        //routing => file yang mengarahkan url
        
        $url = $_GET['url'];
        if($url == 'dashboard'){
            include_once 'dashboard.php';
        } else if(!empty($url)){
            include_once ''.$url.'.php';
        } else {
            'dashboard.php';
        }
        ?>
</div>
</div>

<?php


include_once 'button.php';
?>