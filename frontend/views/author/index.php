<?php
/* @var $this yii\web\View */
/* @var $authorList[] frontend\models\Author */
use yii\helpers\Url;
?>
<h1> Authors</h1>
<br>
<a href="<?php echo Url::to(['author/create']) ?>" class='btn btn-info'>Create new author</a>
</ br>
<table class='table table-condensed'> 
     <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Edit</th>
        <th>Detele</th>
    </tr>
<?php foreach ($authorList as $author) : ?>
    <tr>
        <td><?php echo $author->first_name; ?></td>
        <td><?php echo $author->last_name; ?></td>
        <td><a href="<?php echo Url::to(['author/update', 'id' => $author->id]); ?>" class='btn btn-info'>Edit</a></td>
        <td><a href="<?php echo Url::to(['author/delete', 'id' => $author->id]); ?>" class='btn btn-danger'>Delete</a></td>
    </tr>
<?php endforeach; ?>
</table>