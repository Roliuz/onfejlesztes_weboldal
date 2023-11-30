<?php

$db_name = 'mysql:host=localhost;dbname=onfejlesztes';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);

//weboldal hibaüzenetei
if (isset($uzenet)) {
    foreach ($uzenet as $e) {
        echo '<div class="uzenet">
     <span>' . $e . '</span>
     <i class="fa fa-times" onclick="this.parentElement.remove();"></i>
 </div>';
    }
}
