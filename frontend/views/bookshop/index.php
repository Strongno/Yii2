<?php
/* @var $this yii\web\View
 * @var $booklist[] frontend\models\Book  */

use yii\helpers\Html;
?>
<h1>Books</h1>
<p>
    <?php echo Html::a('Create new book', ['create'], ['class' => 'btn btn-primary']); ?>
</p>
<table class='table table-condensed'> 
    <tr>
        <th>Book name</th>
        <th>Date published</th>
        <th>Publisher</th>
        <!--<th>Full name</th>-->
        <th>Edit</th>
        <th>Delete</th>
        
    </tr>
     <?php foreach ($booklist as $book): ?>
    <tr>
        <div class="col-md-10">
            <td><?php echo $book->name; ?></td>
            <td><?php echo $book->getDatePublished(); ?></td>
            <td><?php echo $book->getPublisherName(); ?></td>
            <!--<td><?php echo $book->getFullName(); ?></td>-->
            <td><?php echo Html::a('Edit Book', ['index', 'id' => $book->id]) ?></td>
            <td><?php echo Html::a('Detele Book', ['bookshop/delete', 'id' => $book->id]); ?></td>
        </div>
    </tr>
    <?php endforeach; ?>
</table>