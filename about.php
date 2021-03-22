<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>
<div class="container-fluid text-sm-center p-5" style="background-image: url('assets/img/Dogemap_icon_bg.png'); opacity: 0.5; background-repeat: no-repeat; background-position: left; ">
<p>dogemap is a map system to display stores around the world that support dogecoin as payment and uses your location to find stores near you do we sell this data? No.</p>
<h1>Why start dogemap?</h2>
<p>Because why not dogecoin is rising to a dollar so why not help out the community.</p>
<p>the community needs a map for finding places and im here to provide and i wanted to make it self sustaining while keeping it clean and uncluttered.</p>
<p>Feel free to share dogemap on twitter. #dogemap</p>


<a class="n-o" href="https://twitter.com/csoftwarecf/">Csoftware Twitter</a>
<br/>
<a class="n-o" href="https://twitter.com/dogecoin/">Dogecoin Twitter</a>
<br/>
<a class="n-o" href="https://twitter.com/bluethefoxyt/">The mega trash Developer twitter</a>
<br/>
<a class="n-o" href="https://csoftware.cf/">csoftware website</a>
<br/>
<a class="n-o" href="https://bluethefox.cf/">dev website</a>
<br/>
<p>LANGUAGE LIST: PHP, JAVASCRIPT, JSON, HTML</p>



<h1>Dogemap is the community map.</h1>



</div>







<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>