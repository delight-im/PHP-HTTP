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

\Delight\Http\ResponseHeader::add('X-C08a89582f64bb96', 'caebdac147484892');
\Delight\Http\ResponseHeader::add('X-C08a89582f64bb96', 'b0420816e9ec7b71');
\Delight\Http\ResponseHeader::add('X-C08a89582f64bb96', '96af309d3d39426a');
assert(\Delight\Http\ResponseHeader::get('X-C08a89582f64bb96') !== null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') !== null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') !== null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') !== null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') === null) or exit;
assert(\Delight\Http\ResponseHeader::get('X-C08a89582f64bb96') === null) or exit;

\Delight\Http\ResponseHeader::add('X-Ed429f99cf4df084', '190d964f15db158f');
\Delight\Http\ResponseHeader::add('X-Ed429f99cf4df084', '290d964f15db158f');
\Delight\Http\ResponseHeader::add('X-Ed429f99cf4df084', '390d964f15db158f');
assert(\Delight\Http\ResponseHeader::get('X-Ed429f99cf4df084') !== null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '2') === 'X-Ed429f99cf4df084: 290d964f15db158f') or exit;
assert(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '2') === null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '3') === 'X-Ed429f99cf4df084: 390d964f15db158f') or exit;
assert(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '3') === null) or exit;
assert(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '1') === 'X-Ed429f99cf4df084: 190d964f15db158f') or exit;
assert(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '1') === null) or exit;
assert(\Delight\Http\ResponseHeader::get('X-Ed429f99cf4df084') === null) or exit;

echo 'ALL TESTS PASSED'."\n";
