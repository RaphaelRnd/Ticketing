<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" /
        <title>Mon Blog</title>
    </head>
    <body>
        <div id="global">
            <header>
                <a href="index.php"><h1 id="titreBlog">Mon Blog</h1></a>
                <p>Je vous souhaite la bienvenue sur ce modeste blog.</p>
            </header>
            <div id="contenu">
                <?php
                $bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8',
                        'adminmonblog', 'raph');
                $billets = $bdd->query('select * from T_BILLET LEFT JOIN T_ETAT ON T_BILLET.BIL_id = T_ETAT.id order by BIL_ID desc');
                foreach ($billets as $billet):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreBillet"><?= $billet['BIL_TITRE'] ?></h1>
                            <time><?= $billet['BIL_DATE'] ?></time>
                        </header>
                        <p><?= $billet['BIL_CONTENU'] ?></p>
                        <p><?= $billet['Etat'] ?></p>
                    </article>
                    <hr />
                <?php endforeach; ?>
            </div> <!-- #contenu -->
            <footer id="piedBlog">
                Blog réalisé avec PHP, HTML5 et CSS.
            </footer>
        </div> <!-- #global -->
    </body>
</html>
