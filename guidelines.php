<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>

<div class="container-fluid text-sm-center p-5">
<h1>Guidelines for adding locations & Dogemap in general</h2>
<p>1. They must be real any places that are fake will be removed.</p>
<p>2. No self promotion of any kind on dogemap we are not an advertising site we are a site for listing locations that accept dogecoin.</p>
<p>3. Dont be that guy that ruins it for everyone else.</p>
<p>4. Dont place anything illegal on dogemap we are not the darkweb.</p>
<p>5. Dont ask to buy userdata we have no userdata and never will your location is not stored on dogemap's servers.</p>
<p>6. Dont spam locations of the same location we can still ipban people from adding locations that data is again not sold.</p>
<p>7. Have fun exploring places you never thought would accept dogecoin.</p>
<p>8. You can add locations to dogemap that accepts other crypto ASLONG as they also accept dogecoin we will remove places that dont accept dogecoin.</p>
<p>9. Dont spam in the description example: <code>AAAAAAA WAMMY GR RANDOMMMMMMM</code> that dosent help anyone, you can put N/A if there is no description or its obvious in the title.</p>



</div>







<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>