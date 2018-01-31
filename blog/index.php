<?php
// blog page
$ch = curl_init("https://api.dropinblog.com/v1/html/?b=QPCQQ2NR5VOGYC0Z195J&c=".$_GET['c']."&p=".$_GET['p']."&page=".$_GET['page']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$dib = json_decode($response);
?>


<?php echo $dib->data->content ?>
