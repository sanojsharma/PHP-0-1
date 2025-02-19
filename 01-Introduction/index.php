<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variable in HTML</title>
</head>
<body>

    <?php
        $message = "Hello, World!";
        $name = "John Doe";
    ?>

    <h1><?php echo $message; ?></h1>
    <p>Welcome, <?php echo $name; ?>!</p>

</body>
</html>