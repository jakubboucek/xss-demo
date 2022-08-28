<?php

declare(strict_types=1);

session_start();

$error = null;
if (isset($_POST['signin'])) {
    $pass = $_POST['pass'] ?? '';

    if (password_verify($pass, '$2y$10$d9VZXoJ4sHhi7V5CLUM/c.SeTCAtEKmYFRQFO9QJeAWs7.vU/w2ti')) {
        // Login
        $_SESSION['admin'] = true;
        // Redirect to admin
        header('Location:/admin.php', true, 303);
        die();
    } else {
        $error = 'Zadali jste neplatné heslo, zkuste to znovu';
    }
}

?>
<html lang="cs">
<body>
<nav><a href="/">Zpět na stránku</a></nav>

<h1>Přihlášení do adminu</h1>
<?php if ($error): ?>
  <p style="background-color: pink;font-weight: bold;padding: 1em;"><?= $error ?></p>
<?php endif; ?>
<p>Zadejte heslo do adminu:</p>
<form method="post" action="<?= $_SERVER['REQUEST_URI'] ?>">
  <p><label for="pass">Heslo:</label> <input type="password" id="pass" name="pass" required autofocus></p>
  <input type="submit" name="signin" value="🙍 Přihlásit">
</form>

Konec stránky
</body>
</html>
