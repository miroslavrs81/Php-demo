<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <h1>Top performing users</h1>

    <?php
        $users = [
            "Stefan Jeftic",
            "Micko Tomic",
            "Miroslav Ilic"
        ];
    ?>

    <ul>
        <?php foreach ($users as $user) : ?>
            <li><?= $user ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>