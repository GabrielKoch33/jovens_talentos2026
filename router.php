<?php
// php -S localhost:8000 router.php
$uri = urldecode($_SERVER["REQUEST_URI"]);
$path = '.' . $uri;

// Se for uma pasta, lista o conteúdo dela
if (is_dir($path)) {
    $files = array_diff(scandir($path), ['.', '..']);
    echo "<h2>Conteúdo de $uri</h2><ul>";
    if ($uri !== '/') {
        echo "<li><a href='" . dirname($uri) . "'>.. (voltar)</a></li>";
    }
    foreach ($files as $file) {
        $link = rtrim($uri, '/') . '/' . $file;
        echo "<li><a href='$link'>$file</a></li>";
    }
    echo "</ul>";
    return true;
}
return false; // arquivo existe, deixa o servidor tratar normalmente