<?php

declare(strict_types=1);

session_start();

if (isset($_SESSION['admin']) === false || $_SESSION['admin'] !== true) {
    header('Location:/login.php', true, 303);
    die();
}

?>
<html lang="cs">
<body>
<nav>
  <a href="/">Zpět na stránku</a>
  <a href="/logout.php">Odhlásit</a>
</nav>

<h1>Hurá, jsi admin</h1>
</body>
</html>
