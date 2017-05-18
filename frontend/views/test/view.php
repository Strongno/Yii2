<?php
use yii\helpers\Url;
?>

<h1><?php echo $item['title']; ?></h1>
<h6><?php echo $item['content']; ?></h6>
<a href="<?php echo Url::to(['test/index']); ?>" class='btn btn-info'>Назад</a>