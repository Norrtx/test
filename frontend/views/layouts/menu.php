
<?php 
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;

?>
 

<div class="wrap">
    <?php
    NavBar::begin([
        //'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl  ,
        'brandUrl' => ['site/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'About', 'url' => ['/site/index']],
        
        ['label' => 'Port', 'url' => ['/site/port']],
       
        // ['label' => 'Awards', 'url' => ['/site/awards']],
        ['label' => 'Education', 'url' => ['/site/education']],
        ['label' => 'Skills', 'url' => ['/site/skills']],
        //['label' => 'Team', 'url' => ['/site/team']],

        // ['label' => 'Experience', 'url' => ['/site/experience']],
        ['label' => 'Contact', 'url' => ['/site/contact']],

    ];
   
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    