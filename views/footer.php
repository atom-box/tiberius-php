<footer>
    <p>2020 &#127887;
    <?php 
    $imageCount = 4;
    $i = random_int(1, $imageCount);
    $imagePath = "resources/images/alvin{$i}.png";
    ?>
    <img src="<?= $imagePath ?>" alt="dancer from Alvin Ailey">
    </p>
</footer>
