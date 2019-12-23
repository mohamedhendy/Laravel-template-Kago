<?php

Route::post('csp', function (){ return response(null, 204); });

require __DIR__ . DIRECTORY_SEPARATOR . 'auth.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'back.php';
require __DIR__ . DIRECTORY_SEPARATOR . 'front.php';
