<?php
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{
	$title = 'browse';
	include dirname(__FILE__) . '/inc/header.php';
}
?>
<div class="container-fluid text-sm-center p-5" >
<form id="addform" method="get" action="#">
<p>* means required.</p>
<br/>
<input id="company" type="text" required class="form-control" placeholder="Name of business*"/>
<br/>
<input id="description" type="text" required class="form-control" placeholder="small description*"/>
<br/>
<input id="website"type="text" class="form-control" placeholder="website URL example dogemap.cf http:// or https:// is not needed"/>
<br/>
<p>The address will be turned into longatude and latitude cords.</p>
<br/>
<input id="address"type="address" required class="form-control" placeholder="Address* example: 8 lupis st, southampton, england, united kingdom"/>
<br/>
<p>Category (ATM, Food, Etc)</p>
<select id="category" class="form-select" aria-label="Select category">
  <option value="1">ATM</option>
  <option selected value="2">Shop</option>
  <option value="3">Restraunt</option>
  <option value="4">Other</option>
  
</select>
<p>By clicking add to map you are agreeing that this info is public and can be viewed by anyone and can be removed by csoftware or mods.</p>

<input type="submit" class="btn btn-success" value="Add to map"/>
<h3 id="status">
</h3></form>



<script>
$( "#addform" ).submit(function( event ) {
  document.getElementById("loader").style.display = "block";
  document.getElementById("status").innerHTML = "Submitting...";
$.get( "api/",{ function: "addtomap",company: $('#company').val(),description:$('#description').val(),website: $('#website').val(),address: $('#address').val(),category: $('#combo :selected').text()}, function( data ) {
  console.log(data);
  var obj = JSON.parse(data);
  if(obj['error']){
    //alert(obj.msg);
    swal("error", obj.msg, "error");
    document.getElementById("loader").style.display = "none";
  document.getElementById("status").innerHTML = "ERROR";
  }else{
  document.getElementById("loader").style.display = "none";
  document.getElementById("status").innerHTML = "done";
  }

});
event.preventDefault();
});

</script>
</div>








<?php 
$isXHR = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtoupper($_SERVER['HTTP_X_REQUESTED_WITH']) === 'XMLHTTPREQUEST';

if (!$isXHR)
{

include dirname(__FILE__) . '/inc/footer.php';
}
?>