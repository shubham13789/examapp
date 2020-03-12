<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\sidenav\SideNav;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
   
    ?>

    <div class="main_container">
        
    <div class="col-md-2 ">
    <br><br><br><br>
            <?php
                 echo SideNav::widget([
                    'type' => SideNav::TYPE_DEFAULT,
                    'heading' => 'Options',
                    'items' => [
                        [
                            'url' => 'index.php?r=student#',
                            'label' => 'Home',
                            'icon' => 'home'
                        ],
                        [
                            'url' => 'index.php?r=student#',
                            'label' => 'student',
                        ],
                        [
                            'url' => 'index.php?r=department#',
                            'label' => 'department',
                        ],
                        [
                            'url' => 'index.php?r=examination#',
                            'label' => 'exam',
                        ],
                        
                        [
                            'url' => 'index.php?r=marks-obtained#',
                            'label' => 'student marks',
                        ],
                        [
                            'url' => 'index.php?r=total-marks#',
                            'label' => 'total marks',
                        ],
                        [
                            'url' => 'index.php?r=degree#',
                            'label' => 'degree',
                        ],
                        [
                            'url' => 'index.php?r=academic-year-semester#',
                            'label' => 'Academic year semester',
                        ],
                        [
                            'url' => 'index.php?r=subject#',
                            'label' => 'subject',
                        ],
                        [
                            'url' => 'index.php?r=course#',
                            'label' => 'Courses',
                        ],
                        [
                            'url' => 'index.php?r=semester#',
                            'label' => 'semester',
                        ],
                        [
                            'url' => 'index.php?r=academic-year#',
                            'label' => 'Academic Year',
                        ],
                        [
                            'url' => 'index.php?r=degree-subject#',
                            'label' => 'degree-subject',
                        ],
                        
                        [
                            'label' => 'Help',
                            'icon' => 'question-sign',
                            'items' => [
                                ['label' => 'student', 'icon'=>'info-sign', 'url'=>'index.php?r=student#'],
                                ['label' => 'teacher', 'icon'=>'phone', 'url'=>'index.php?r=teacher#'],
                            ],
                        ],
                    ],
                ]);
            ?>  
        </div>
        <div class="col-md-10 right_col">
            <br>
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            
            <?= $content ?>
        </div>
        
    </div>
    
</div>
<!-- <br>
<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
