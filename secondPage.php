<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Page</title>
</head>
<body>
    <!-- Walaa Alobaidi 2220004083 -->
    <!-- Hatoon Alkathiri 2210002905 -->
    <h2>PHP:</h2>
    <?php
        $color = $_POST['color'];
        $number = $_POST['number'];
        if (is_numeric($number) && $number >= 5 && $number <= 50) {
        print("<p style='color: $color; font-size: {$number}px;'>Working in the lab is great</p>");
    } else {
        print("<p>Invalid input please enter a number between 5 and 50</p>");
    }
    ?>
</body>
</html>