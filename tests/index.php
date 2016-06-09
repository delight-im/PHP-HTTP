<?php

/*
 * Copyright (c) delight.im <info@delight.im>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
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

define('TEST_HEADER_NAME', 'X-PHP-HTTP-Test');
define('TEST_HEADER_VALUE', 42);
define('TEST_HEADER', TEST_HEADER_NAME.': '.TEST_HEADER_VALUE);

\Delight\Http\ResponseHeader::set(TEST_HEADER_NAME, TEST_HEADER_VALUE);
assert(\Delight\Http\ResponseHeader::get(TEST_HEADER_NAME) === TEST_HEADER) or exit;
assert(\Delight\Http\ResponseHeader::get('Content-type') === 'Content-type: text/plain; charset=utf-8') or exit;
assert(\Delight\Http\ResponseHeader::get('Content-type', 'text/p') === 'Content-type: text/plain; charset=utf-8') or exit;
assert(\Delight\Http\ResponseHeader::get('Content-type', 'text/h') === null) or exit;

\Delight\Http\ResponseHeader::remove(TEST_HEADER_NAME, 'a');
assert(\Delight\Http\ResponseHeader::get(TEST_HEADER_NAME) === TEST_HEADER) or exit;

\Delight\Http\ResponseHeader::remove(TEST_HEADER_NAME, substr(TEST_HEADER_VALUE, 0, 4));
assert(\Delight\Http\ResponseHeader::get(TEST_HEADER_NAME) === null) or exit;

\Delight\Http\ResponseHeader::set(TEST_HEADER_NAME, TEST_HEADER_VALUE);
assert(\Delight\Http\ResponseHeader::get(TEST_HEADER_NAME) === TEST_HEADER) or exit;

assert(\Delight\Http\ResponseHeader::take(TEST_HEADER_NAME) === TEST_HEADER) or exit;
assert(\Delight\Http\ResponseHeader::get(TEST_HEADER_NAME) === null) or exit;

echo 'ALL TESTS PASSED'."\n";
