<?php

declare(strict_types=1);

?>
<html lang="cs">
<body>
<nav><a href="/admin.php">Admin</a></nav>

<p>Hledání:
<form method="get" action="<?= $_SERVER['REQUEST_URI'] ?>">
  <input type="text" name="query" placeholder="co hledáte?">
  <input type="submit" value="🔍 Hledat">
</form>
</p>

<?php if (isset($_GET['query'])): ?>

  <h2>Výsledky vyhledávání pro výraz <?= $_GET['query'] ?>:</h2>

  <ul>
    <li>Lorem ipsum dolor sit amet.</li>
    <li>Consectetur adipiscing elit.</li>
    <li>Vivamus fermentum vestibulum.</li>
    <li>Felis sed molestie.</li>
  </ul>
<?php endif; ?>
</body>
</html>
