<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
  <a class="navbar-brand js-scroll-trigger" href="#page-top">
    <span class="d-block d-lg-none">Clarence Taylor</span>
    <span class="d-none d-lg-block">
      <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
    </span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#education">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
      </li>
    </ul>
  </div>
</nav>
</body>

</html>
