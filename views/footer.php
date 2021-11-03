<footer class="centering-container">


&copy
<?php  
$now = getdate();
echo $now['year']; 
?>

&#127887; <a href="https://littlefurnace.com">Little Furnace</a>

<p>
<?php 
    $imageCount = 4;
    $i = random_int(1, $imageCount);
    $imagePath = "resources/images/alvin{$i}.png";
    ?>
    <img src="<?= $imagePath ?>" title="Alvin Ailey Dance Company" alt="dancer from Alvin Ailey">
    
</p>

</footer>
