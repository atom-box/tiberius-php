<code>

<p class='definition'>You have a red lottery ticket showing ints a, b, and c, each of which is 0, 1, or 2. If they are all the value 2, the result is 10. Otherwise if they are all the same, the result is 5. Otherwise so long as both b and c are different from a, the result is 1. Otherwise the result is 0.</p>


<p class='question'>redTicket(2, 2, 2) → 10</p>
<?php 
$answer = redTicket(2, 2, 2);
echo "<p class='answer'>".$answer."</p>";
?>

<p class='question'>redTicket(2, 2, 1) → 0</p>
<?php 
$answer = redTicket(2, 2, 1);
echo "<p class='answer'>".$answer."</p>";
?>

<p class='question'>redTicket(0, 0, 0) → 5</p>
<?php 
$answer = redTicket(0, 0, 0);
echo "<p class='answer'>".$answer."</p>";
?>


<?php 
function redTicket(int $a, int $b, int $c): int {
    $is_null = 101.3;
    // switch ($nums){
        //     case : 
            //         return 33;
            // }
            $payoff = $is_null ?? 44;
            return $payoff;
}
?>

<?php
require $_SERVER['DOCUMENT_ROOT'].'/Controllers/BadgeController.php';
$emojiBringer = new BadgeController();
$badge1 = $emojiBringer->showBadge(1);
$badge2 = $emojiBringer->showBadge(2);
$badge3 = $emojiBringer->showBadge(3);
$badge4 = $emojiBringer->showBadge(42);
?>
<p>&#<?=$badge1  ?></p><p>&#<?=$badge2  ?></p><p>&#<?=$badge3  ?>;</p><p>&#<?=$badge4  ?>;</p>
</code>
