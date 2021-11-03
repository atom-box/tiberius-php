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

        .centering-container {
            text-align: center;
        }
    /* 
    CHALKBOARD CLASSES
    */

        article.codeholder {
            border: 2px solid yellow;
            width: 60%;
            border-radius: 0.3rem;
            padding: 6px;
            background-color: black;
            margin: 4rem;
        }

        code {
            font-size: 1.8rem;
        }

        .definition {
            color: #888;
        }

        .question {
            color: #ffa;
        }

        .answer {
            color: #88f;
        }

    </style>
</head>

<body>
    <header>
        <h1>Challenges.</h1>
    </header>

    <article class="codeholder">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/views/chalkboard.php'; ?>
    </article>

    <article class="codeholder">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/views/chalkboard2.php'; ?>
    </article>

    <article class="codeholder">
    <?php require $_SERVER['DOCUMENT_ROOT'].'/views/chalkboard3.php'; ?>
    </article>
</div>
<?php require $_SERVER['DOCUMENT_ROOT'].'/views/footer.php'; ?>

</body>

</html>