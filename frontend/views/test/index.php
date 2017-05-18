<?php

foreach ($list as $item): ?>

<h1><a href="<?php echo Yii::$app->urlManager->createUrl(['test/view', 'id' =>$item['id']]); ?>"><?php echo $item['title']; ?></a></h1>
<h6><?php echo $item['content']; ?></h6>

<?php endforeach; ?>
