
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="assets/img/logo-fav.png">
      <title>Web Reports</title>
      <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
      <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
            <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
            
            
      </head>
      <?php $this->beginBody() ?>
      <body class="be-splash-screen">
            <div class="be-wrapper be-login">
                  <div class="be-content">
                        
                        <?= $content ?>
                        
                  </div>
            </div>
            <?php $this->endBody() ?>
            <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
            <script src="assets/js/main.js" type="text/javascript"></script>
            <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                  //initialize the javascript
                  App.init();
            });
            
            </script>
      </body>
      </html>
      <?php $this->endPage() ?>
