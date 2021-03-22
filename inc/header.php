<html>
<head>
<div id="loader"></div>
<?php include dirname(__FILE__) . "/head.php"; if($_SERVER["HTTPS"] != "on")
{
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}?>

<script src="/assets/js/purecookie.js" ></script>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand dogetext" href="/"><img src="../assets/img/dmb.png" width="90px"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link dogetext btn btn-success" aria-current="page" href="add">Add to map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dogetext" href="about">About/Why</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dogetext" href="data">Do you sell my data?</a>
        </li>
       <!-- <li class="nav-item">
          <a class="nav-link dogetext" href="account">manage account</a>
        </li> -->
        <li class="nav-item">
          <a class="nav-link dogetext" href="guidelines">adding guidelines</a>
        </li>
        <li class="nav-item">
          <a class="nav-link dogetext" href="apidoc">API</a>
        </li>
      </ul>
      <a class="nav-link dogetext" href="donate">donate:DQiA2o9Qi9HqcgFicUoSxMvV2hm6FutVzV</a>
      <a href="#" class="n-o btn btn-info dogetext" id="dmlm"></a>
    </div>
  </div>
</nav>
</head>
<div id="application">