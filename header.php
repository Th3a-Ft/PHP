<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo "
    <title>$hpage</title>
    " ?>
    <link rel="stylesheet" href="style/stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<header>
    <a href="index.php"><img src="img/logo_php.png"></a>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item whitetext">
            <a class="nav-link " href="index.php">Accueil</a>
        </li>
        <li class="nav-item dropdown whitetext">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Boutique</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="basket.php">Basketball Edition</a></li>
                <li><a class="dropdown-item" href="summer.php">Summer Edition</a></li>
            </ul>
        <li class="nav-item whitetext">
            <a class="nav-link" href="contact.php">Contact</a>
        </li>
</header>



