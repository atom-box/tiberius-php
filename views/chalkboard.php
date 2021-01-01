<code>

<p class='definition'>You have a red lottery ticket showing ints a, b, and c, each of which is 0, 1, or 2. If they are all the value 2, the result is 10. Otherwise if they are all the same, the result is 5. Otherwise so long as both b and c are different from a, the result is 1. Otherwise the result is 0.</p>

<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/BadgeController.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/Controllers/TicketJudgeController.php';
?>

<?php
$emojiBringer = new BadgeController();
?>


<p class='question'>What is the result for redTicket(2, 2, 2) → 10 ?</p>
<?php 
$answer = redTicket(2, 2, 2);
?>
<p class='answer'>The result is: <?= $answer ?></p>
<?php $emojiCode = $emojiBringer->showBadge($answer); ?>
<p class='answer'>The badge is: &#<?= $emojiCode ?></p>

<p class='question'>What is the result for redTicket(2, 2, 1) → 0 ?</p>
<?php 
$answer = redTicket(2, 2, 1);
?>
<p class='answer'>The result is: <?= $answer ?></p>
<?php $emojiCode = $emojiBringer->showBadge($answer); ?>
<p class='answer'>The badge is: &#<?= $emojiCode ?></p>

<p class='question'>What is the result for redTicket(0, 0, 0) → 5 ?</p>
<?php 
$answer = redTicket(0, 0, 0);
?>
<p class='answer'>The result is: <?= $answer ?></p>
<?php $emojiCode = $emojiBringer->showBadge($answer); ?>
<p class='answer'>The badge is: &#<?= $emojiCode ?></p>


<?php 
function redTicket(int $a, int $b, int $c): int {
    $is_null = null;

    $judger = new TicketJudgeController();
    $payoff = $is_null ?? $judger->scoreTheCombo($a, $b, $c);

    return $payoff;
}
?>

// refactor: add the badge line show in the view.
// refactor: Move more logic of TicketJudgeController out of the view



