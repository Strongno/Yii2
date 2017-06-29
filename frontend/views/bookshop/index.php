<?php
/* @var $this yii\web\View
 * @var $booklist[] frontend\models\Book  */
?>
<h1>Books</h1>

<?php foreach ($booklist as $book): ?>
<div class="col-md-10">
    <h3><?php echo $book->name; ?></h3>
    <p><?php echo $book->getDatePublished(); ?></p>
    <?php echo $book->getPublisherName(); ?>
    <?php foreach($book->getAuthors() as $author): ?>
    <p> <?php echo $author->first_name . ' ' .$author->last_name; ?></p>
    <?php        endforeach; ?>
</div>


<?php endforeach; ?>
