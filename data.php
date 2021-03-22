<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>

<div class="container-fluid text-sm-center p-5">
<h1>Do you sell any data to third parties?</h2>
<p>No your data is not sold to third parties we only use your login info to allow you to login to your account and update things. Your data is your data.</p>
<h1>I want to buy the data.</h1>
<p>Ok please email: no@csoftware.cf</p>
</div>








<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>