<?php

require_once "../vendor/autoload.php";

use App\Controllers\SongController;

$controller = new SongController();

$controller->showSong();

?>