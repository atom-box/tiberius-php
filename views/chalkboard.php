<code>

<p class='definition'>You have a red lottery ticket showing ints a, b, and c, each of which is 0, 1, or 2. If they are all the value 2, the result is 10. Otherwise if they are all the same, the result is 5. Otherwise so long as both b and c are different from a, the result is 1. Otherwise the result is 0.</p>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/BadgeController.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/TicketJudgeController.php';
?>

<?php
$emojiBringer = new BadgeController();
$judger = new TicketJudgeController();
?>


<p class='question'>What is the result for redTicket(2, 2, 2) → 10 ?</p>
<?php 
$answer =  $judger->scoreTheCombo(2, 2, 2);
$emojiCode = $emojiBringer->showBadge($answer);
?>
<p class='answer'>The badge is: &#<?= $emojiCode ?></p>



<p class='question'>What is the result for redTicket(2, 2, 1) → 0 ?</p>
<?php 
$answer =  $judger->scoreTheCombo(2, 2, 1);
$emojiCode = $emojiBringer->showBadge($answer);
?>
<p class='answer'>The badge is: &#<?= $emojiCode ?></p>



<p class='question'>What is the result for redTicket(0, 0, 0) → 5 ?</p>
<?php 
$answer =  $judger->scoreTheCombo(0, 0, 0);
$emojiCode = $emojiBringer->showBadge($answer);
?>
<p class='answer'>The badge is: &#<?= $emojiCode ?></p>
</code>