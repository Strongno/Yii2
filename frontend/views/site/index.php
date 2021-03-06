<?php
/* @var $this yii\web\View */
use frontend\widgets\newslist\NewsList;
$this->title = 'My Yii Application';
use frontend\widgets\salary\Salary;
use frontend\models\Book;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <?php
            if (Yii::$app->user->identity) {
                echo Yii::$app->user->identity->username;
            }
        ?>
        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <a href="<?php echo Yii::$app->urlManager->createUrl('count/index'); ?>">Количество новостей</a>
        <div class="row">
            <div class="col-lg-4">
                <?php echo NewsList::widget(['showLimit' => 3]) ?>
            </div>
            <div class="col-lg-4">
                <?php echo Salary::widget([
                    'limit' => 2,
                    'column' => array('salary', 'lastName'),
                    'column_order' => 'salary',
                ]); ?>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>
                <p><?php echo Book::className(); ?>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
