<html>

<head>
    <title>Hello</title>
    <style>
        body {
            color: dodgerblue;
            background-color: darkblue;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 3rem;
        }

        article.codeholder {
            border: 2px solid yellow;
            width: 60%;
            border-radius: 0.3rem;
            padding: 6px;
            backgroundlor: black;
        }

        code {
            color: #aaa;
            font-size: 1.8rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Challenges.</h1>
    </header>


    <article class="codeholder">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/views/chalkboard.php'; ?>
        ////
    </article>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php'; ?>

</body>

</html>