<!DOCTYPE html>
<html>
<head>
    <title>Test 1 - Números</title>
</head>
<body>
<?php for ($i = 1; $i <= 111; $i++) {
    $color = 'black'; // Default color is black for regular numbers

    if ($i % 3 === 0 && $i % 5 === 0) {
        $color = 'purple';
    } elseif ($i % 3 === 0) {
        $color = 'red';
    } elseif ($i % 5 === 0) {
        $color = 'blue';
    }

    if ($i === 111) {
        echo "<span style='color: green;'>$i</span>";
    } else {
        echo "<span style='color: $color;'>$i</span>, ";
    }

} ?>
</body>
</html>
