<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
  </head>
<body>
    <h1>Recommended Books</h1>

    <?php
        $books = [
            "Do Androids Dream of Electric Sheep",
            "The Langoliers",
            "Hail Mary"
        ]
    ?>
    
    <ul>
        <?php foreach($books as $book) : ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
    </ul>


    <h1>Top Performing Users</h1>

    <?php 
        $users = [
            "Stefan Jeftic",
            "Micko Tomic",
            "Miroslav Ilic"
        ]
    ?>

    <ul>
        <?php foreach($users as $user): ?>
            <li><?= $user ?></li>
        <?php endforeach; ?>
        </ul>

</body>
</html>