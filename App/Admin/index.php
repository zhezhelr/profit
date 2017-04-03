<?php

require __DIR__ . '/../../autoload.php';
$data = \App\Models\Article::findAll();
include __DIR__ . '/../Templates/adminIndex.php';