<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>
<div class="container-fluid text-sm-center p-5">
<p>This is for developers.</p>
<h2>DOGEMAP has a API any dogedev can use!</h2>
<a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc/4.0/">Creative Commons Attribution-NonCommercial 4.0 International License</a>.
<H3>Dogemap list all locations</h3>
<p>APIKEY: NOT APPLICABLE</p>
<P>METHOD: GET</P>
<p>PARAMS: NOT APPLICABLE</p>
<p>https://dogemap.cf/api/?function=listalllocations</p>
<H3>Dogemap Add a new location</h3>
<p>APIKEY: NOT APPLICABLE</p>
<P>METHOD: GET</P>
<p>PARAMS: company, description, address,website,category</p>
<p>https://dogemap.cf/api/?function=addtomap&company=(name)&description=(description)&address=(address in a URL format)&website=(website without http:// or https://)&category=(category)</p>
<h3>ISSUES and how to resolve them</h3>
<p>i get this error <code>This location dosent exist according to OSM check the address and try again try removing the house number or unit number and place the full address in the description the address box is for the address but also the lat and lon.</code> How do i fix this?</p>
<p>This is due to OSM(Open street maps) not regonizing the address in question try removing the house number or unit number and see if it works with that exclusively if not try filtering it more by keeping the street and the city.</p>
<p>I get errors relating to a parameter being missing (<code>You are missing a required parameter.</code>) how do i fix this?</p>
<p>Check if you have all the parameters that are required in your code if one is missing it will not function and will output a error saying that its missing check the documentation and check your code and see if you are missing something if not check the request method it could be because its either a POST request or a GET request when it needs to be the other way round.</p>
</div>







<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>