<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon premier container</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body class="text-center">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Docker</h3>
                <nav class="nav nav-masthead justify-content-center">
                    <a class="nav-link active" href="#">Accueil</a>
                    <a class="nav-link" href="#">Contact</a>
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <h1 class="cover-heading">Les enregistrements de notre BDD</h1>
        </main>
        
        <section style="text-align: left !important; margin-top:40px;">
            <ul>
                <?php
                    $credentials = [
                        'host' => getenv('MYSQL_HOST'),
                        'user' => getenv('MYSQL_USER'),
                        'password' => getenv('MYSQL_PASS'),
                        'db' => getenv('MYSQL_DB')
                    ];

                    $bdd = new PDO('mysql:host='.$credentials['host'].';dbname='.$credentials['db'].';charset=utf8', $credentials['user'], $credentials['password']);

                    $query = $bdd->query('SELECT * FROM tweets ORDER BY id DESC');
                    $datas = $query->fetchAll();

                    foreach ($datas as $row) {
                        $date = new \DateTime($row['created_at']);

                        printf('<li><strong class="red">%s</strong> - <small class="green">%s</small> : %s</li>',
                            $row['author'],
                            $date->format('d/m/Y H:i:s'),
                            $row['msg'],
                        );
                    }
                ?>
            </ul>
        </section>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p></p>
            </div>
        </footer>
    </div>
</body>

</html>