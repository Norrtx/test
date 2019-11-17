<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

  <style>
.circle{ 
    height: 230px;  
    width: 250px;  
    border: 3px solid #fff; 
    border-radius: 150%; 
    box-shadow: 0 0 100px rgba(0, 10, 1, 1);
    align:center;
}
</style>
</head>

<body id="page-top">
      
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav" align="center">
    <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top"> -->
      <!-- <span class="d-block d-lg-none"></span> -->
      <!-- <span class="d-none d-lg-block"> -->
      <img class="circle"  class="img-fluid img-profile rounded-circle mx-auto mt-2" src="<?=Url::to(['img/profile.jpg']);?>" align="center" alt=""><br>
      <!-- </span> -->
    <!-- </a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <div class="nav-item"><br>
         <a class="nav-link js-scroll-trigger"  href="<?=Url::to(['site/index'])?> "> About</a></div><br>
        <div class="nav-item">
        
        <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/education'])?>">Education</a><br>
        </div>
        <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/skills'])?>">Skills</a><br>
        </div>
       
        <div class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?=Url::to(['site/contact'])?>">Contact</a>
        </div>
      </ul>
    </div>
  </nav>

</body>