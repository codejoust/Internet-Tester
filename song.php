<?php

// Random file script!
$files = glob("songs/*.mp3");
$rand_key = array_rand($files);
header("Location: " . $files[$rand_key]);

