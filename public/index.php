<?php

echo "<!-- CAT RUNNING -->";

$viewPath = __DIR__ . '/../app/views/home.html';
if (file_exists($viewPath)) {
    readfile($viewPath);
} else {
    echo "<h2>View not found.</h2>";
}
?>
