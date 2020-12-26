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

        div.codeholder {
            border: 2px solid yellow;
            width: 60%;
            border-radius: 0.3rem;
            padding: 6px;
            background-color: black;
        }

        code {
            color: #aaa;
            font-size: 1.8rem;
        }
    </style>
</head>

<body>
    <h1>Challenges.</h1>
    <h2></h2>
    <div class="codeholder">
        <code>
        <?php
        echo "You have a red lottery ticket showing ints a, b, and c, each of which is 0, 1, or 2. If they are all the value 2, the result is 10. Otherwise if they are all the same, the result is 5. Otherwise so long as both b and c are different from a, the result is 1. Otherwise the result is 0.
        <br><br>";
        $answer = redTicket(2, 2, 2);
        echo "
        redTicket(2, 2, 2) → 10
        <br>$answer<br>";
        
        $answer = redTicket(0, 0, 0);
        echo "
        redTicket(0, 0, 0) → 5
        <br>$answer<br>";
        
        $answer = redTicket(2, 2, 1);
        echo "
        redTicket(2, 2, 1) → 0
        <br>$answer<br>";
        
        function redTicket(int $a, int $b, int $c): int {
            return 99;
        }
        
        ?>
    </code>
    </div>
    <h2>

</body>

</html>