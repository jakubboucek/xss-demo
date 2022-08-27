<?php

declare(strict_types=1);

session_start();
setcookie(session_name(), "", time() - 3600, '/');
session_destroy();
session_write_close();

?>
<html lang="cs">
<body>
<h1>Jste odhlášení</h1>
<nav><a href="/">Pokračujte na úvod</a></nav>
</body>
</html>
