<?php
if ($model->hasErrors()) {
    var_dump($model->getErrors());
}
?>
<form method='post'>
    <p>First Name</p>
    <input type='text' name='firstName' />
    <br><br>
    
    <p>Middle Name</p>
    <input type='text' name='middleName' />
    <br><br>
    
    <p>Last Name</p>
    <input type='text' name='lastName' />
    <br><br>
    
    <input type="submit" />
</form>
