<!doctype html>
<html>
<head>
    <title>PHP Variable Operations</title>
    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: linear-gradient(135deg, #74ABE2, #cfd1e5ff);
            color: #fff;
            text-align: center;
            margin: 0;
            padding: 50px;
        }
        h1 {
            font-size: 36px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        h2, h3 {
            margin: 15px 0;
        }
        .box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            margin: 20px auto;
            width: 60%;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }
        .result {
            background: rgba(0, 0, 0, 0.3);
            padding: 10px;
            border-radius: 10px;
            font-size: 18px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>PHP Variables and Operations</h1>

    <div class="box">
        <?php
            // integer variables
            $x = 10;
            $y = 20;

            // float variables
            $a = 12.5;
            $b = 7.3;

            // string variables
            $framework = "Laravel";
            echo "<h2>Welcome to $framework ($version)</h2>";

            echo "<div class='result'>";
            echo "<strong>Integer Addition:</strong> $x + $y = " . ($x + $y) . "<br>";
            echo "<strong>Float Addition:</strong> $a + $b = " . ($a + $b) . "<br>";
            echo "<strong>Mixed Operation:</strong> $x + $a = " . ($x + $a) . "<br>";
            echo "<strong>String Concatenation:</strong> " . $framework . " - Powerful & Scalable!<br>";
            echo "</div>";

            echo "<h3>Type Information:</h3>";
            echo "<div class='result'>";
            var_dump($x);
            echo "<br>";
            var_dump($a);
            echo "<br>";
            var_dump($framework);
            echo "</div>";
        ?>
    </div>
</body>
</html>
