<code>

<p class='definition'>We'll say a number is special if it is a multiple of 11 or if it is one more than a multiple of 11. Return true if the given non-negative number is special. 
</p>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/ElevenController.php';
$solver = new ElevenController();
?>




<p class='question'>
<p class='question'>$solver->specialEleven(10) → true </p>
<p class='answer'>Here's an answer: <?=$solver->specialEleven(10)?></p>
<p class='question'>$solver->specialEleven(11) → true </p>
<p class='answer'>Here's an answer: <?=$solver->specialEleven(11)?></p>
<p class='question'>$solver->specialEleven(22) → true </p>
<p class='answer'>Here's an answer: <?=$solver->specialEleven(22)?></p>
<p class='question'>$solver->specialEleven(23) → true </p>
<p class='answer'>Here's an answer: <?=$solver->specialEleven(23)?></p>
<p class='question'>$solver->specialEleven(24) → false </p>
<p class='answer'>Here's an answer: <?=$solver->specialEleven(24)?></p>
</p>

</code>