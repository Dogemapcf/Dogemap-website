<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>

<div class="container-fluid text-sm-center p-5 bg-light">
<h1>Why the cookies?</h2>
<p>We use cookies to authenticate you with a token, you receive this token when you login but we dont sell your cookies or read third party cookies as we have no need to.</p>
</div>








<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>