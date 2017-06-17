<?php
/*
 * @var @this yii\web\View
 * $var $model frontend\models\Subscribe
 */
//if (Yii::$app->session->hasFlash('subscribeStatus')) {
//    echo Yii::$app->session->getFlash('subscribeStatus');
//}

$this->title = 'Подпишись на новости';
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Description of page...',
]);
$this->params['breadcrumbs'] = [
    $this->title,
];

if ($model->hasErrors()) {
    var_dump($model->getErrors());
}
?>
<form method='post'>
    <p>Email:</p>
    <input type='text' name='email'/>
    <br><br>
    <input type='submit' />
</form>