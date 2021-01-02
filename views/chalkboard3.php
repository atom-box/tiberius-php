<code>

<p class='definition'></p>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/ChalkThreeController.php';
$solver = new ChalkThreeController();
?>

<p class='definition'>
    <?= $solver->describeChallenge(); ?>
</p>

<p class='question'> 
    haveThree([3, 1, 3, 1, 3]) → true
</p>
<p class='answer'>
    Here's an answer:
    <?= $solver->haveThree([3, 1, 3, 1, 3]); ?>
</p>

<p class='question'> 
    haveThree([3, 1, 3
    , 3]) → false
    $solver->haveThree();
<p class='answer'>
    Here's an answer:
    <?= $solver->haveThree([3, 1, 3, 3]); ?>
</p>


<p class='question'> 
    haveThree([3, 4, 3, 3
    , 4]) → false
    $solver->haveThree();
<p class='answer'>
    Here's an answer:
    <?= $solver->haveThree([3, 4, 3, 3, 4]); ?>
</p>


</code>
