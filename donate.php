<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>

<div class="container-fluid text-sm-center p-5 bg-light">
<h1>Donations help keep dogemap and other csoftware services alive.</h2>
<p>Donating to dogemap keeps dogemap, csoftware, ff, etc alive donating with dogecoin helps not just dogemap but csoftware as a whole.</p>
<p>Address: DQiA2o9Qi9HqcgFicUoSxMvV2hm6FutVzV</p>
<img src="qr.PNG" alt="DQiA2o9Qi9HqcgFicUoSxMvV2hm6FutVzV" />
</div>







<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>