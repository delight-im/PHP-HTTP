<?php

/*
 * PHP-HTTP (https://github.com/delight-im/PHP-HTTP)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

// enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 'stdout');

// enable assertions
ini_set('assert.active', 1);
ini_set('zend.assertions', 1);
ini_set('assert.exception', 1);

header('Content-type: text/plain; charset=utf-8');

require __DIR__.'/../vendor/autoload.php';

\Delight\Http\ResponseHeader::set('X-Dd75c0cffe64df82', '535ab646c2f8451a');
assert(\Delight\Http\ResponseHeader::get('X-Dd75c0cffe64df82') === 'X-Dd75c0cffe64df82: 535ab646c2f8451a') or exit;
assert(\Delight\Http\ResponseHeader::get('Content-type') === 'Content-type: text/plain; charset=utf-8') or exit;
assert(\Delight\Http\ResponseHeader::get('Content-type', 'text/p') === 'Content-type: text/plain; charset=utf-8') or exit;
assert(\Delight\Http\ResponseHeader::get('Content-type', 'text/h') === null) or exit;

\Delight\Http\ResponseHeader::remove('X-Dd75c0cffe64df82', 'z');
assert(\Delight\Http\ResponseHeader::get('X-Dd75c0cffe64df82') === 'X-Dd75c0cffe64df82: 535ab646c2f8451a') or exit;

\Delight\Http\ResponseHeader::remove('X-Dd75c0cffe64df82', substr('535ab646c2f8451a', 0, 4));
assert(\Delight\Http\ResponseHeader::get('X-Dd75c0cffe64df82') === null) or exit;

\Delight\Http\ResponseHeader::set('X-Ff4d986c9f5de0b9', '846157f7e880442a');
assert(\Delight\Http\ResponseHeader::get('X-Ff4d986c9f5de0b9') === 'X-Ff4d986c9f5de0b9: 846157f7e880442a') or exit;

assert(\Delight\Http\ResponseHeader::take('X-Ff4d986c9f5de0b9') === 'X-Ff4d986c9f5de0b9: 846157f7e880442a') or exit;
assert(\Delight\Http\ResponseHeader::get('X-Ff4d986c9f5de0b9') === null) or exit;

echo 'ALL TESTS PASSED'."\n";
