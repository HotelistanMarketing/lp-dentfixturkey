<?php
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60))); // 1 hour
include $_SERVER['DOCUMENT_ROOT'] . '/public/implant/index.php';
