<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="web programming :: strings" />
    <meta name="keywords" content="web, programming" />
    <title>string process</title>
</head>
<body>
    <h1>web programming - lab 4</h1>
    <h2>standard palindromes</h2>
    <form action="standardpalindromeself.php" method="POST">
        <label for="word">word: </label>
        <input type="text" name="word" />
        <input type="submit" value="submit" />
    </form>
    <?php
        if (isset($_POST["word"]))
        {
            $str = $_POST["word"];
            $pattern = "/^[A-Za-z [:punct:]]+$/";
            if (preg_match($pattern, $_POST["word"], $match))
            {
                $strip = preg_replace("/[[:punct:] ]+/", "", $str);
                $rev = strrev($strip);
                if (!strcmp($strip, $rev))
                    echo "<p>$str is a standard palindrome</p>";
                else
                    echo "<p>$str is not a standard palindrome</p>";
            }
            else
            {
                echo "<p>please enter a string containing only letters or spaces</p>";
            }
        }
    ?>
</body>
</html>
