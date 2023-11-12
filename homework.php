<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Favorite movies</title>
</head>

<body>
    <?php
        $movies = [
            [
                'name' => 'Braveheart',
                'releaseYear' => 1995,
            ],
            [
                'name' => 'Guardians of the Galaxy Vol. 3',
                'releaseYear' => 2023,
            ],
            [
                'name' => '300',
                'releaseYear' => 2006,
            ],

        ];

        function filterByYear($movies, $year)
        {
            $filteredMovies = [];

            foreach ($movies as $movie){
                if ($movie['releaseYear'] >= $year){
                    $filteredMovies[] = $movie;
                }
            }

            return $filteredMovies;
        }
    ?>

<ul>
        <?php foreach (filterByYear($movies, '2000') as $movie) : ?>
            <li>
                <a href="<?= $movie['releaseYear'] ?>">
                    <?= $movie['name'] ?> (<?= $movie['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html