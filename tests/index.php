<?php

/*
 * PHP-HTTP (https://github.com/delight-im/PHP-HTTP)
 * Copyright (c) delight.im (https://www.delight.im/)
 * Licensed under the MIT License (https://opensource.org/licenses/MIT)
 */

// enable error reporting
\error_reporting(\E_ALL);
\ini_set('display_errors', 'stdout');

\header('Content-Type: text/plain; charset=utf-8');

require __DIR__ . '/../vendor/autoload.php';

function fail($lineNumber) {
	exit('Error on line ' . $lineNumber);
}

// start output buffering
\ob_start();

\Delight\Http\ResponseHeader::set('X-Dd75c0cffe64df82', '535ab646c2f8451a');
(\Delight\Http\ResponseHeader::get('X-Dd75c0cffe64df82') === 'X-Dd75c0cffe64df82: 535ab646c2f8451a') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('Content-Type') === 'Content-Type: text/plain; charset=utf-8') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('Content-Type', 'text/p') === 'Content-Type: text/plain; charset=utf-8') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('Content-Type', 'text/h') === null) or \fail(__LINE__);

(\Delight\Http\ResponseHeader::remove('X-Dd75c0cffe64df82', 'z') === false) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Dd75c0cffe64df82') === 'X-Dd75c0cffe64df82: 535ab646c2f8451a') or \fail(__LINE__);

(\Delight\Http\ResponseHeader::remove('X-Dd75c0cffe64df82', \substr('535ab646c2f8451a', 0, 4)) === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Dd75c0cffe64df82') === null) or \fail(__LINE__);

\Delight\Http\ResponseHeader::set('X-Ff4d986c9f5de0b9', '846157f7e880442a');
(\Delight\Http\ResponseHeader::get('X-Ff4d986c9f5de0b9') === 'X-Ff4d986c9f5de0b9: 846157f7e880442a') or \fail(__LINE__);

(\Delight\Http\ResponseHeader::take('X-Ff4d986c9f5de0b9') === 'X-Ff4d986c9f5de0b9: 846157f7e880442a') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ff4d986c9f5de0b9') === null) or \fail(__LINE__);

\Delight\Http\ResponseHeader::add('X-C08a89582f64bb96', 'caebdac147484892');
\Delight\Http\ResponseHeader::add('X-C08a89582f64bb96', 'b0420816e9ec7b71');
\Delight\Http\ResponseHeader::add('X-C08a89582f64bb96', '96af309d3d39426a');
(\Delight\Http\ResponseHeader::get('X-C08a89582f64bb96') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-C08a89582f64bb96') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-C08a89582f64bb96') === null) or \fail(__LINE__);

\Delight\Http\ResponseHeader::add('X-Ed429f99cf4df084', '190d964f15db158f');
\Delight\Http\ResponseHeader::add('X-Ed429f99cf4df084', '290d964f15db158f');
\Delight\Http\ResponseHeader::add('X-Ed429f99cf4df084', '390d964f15db158f');
(\Delight\Http\ResponseHeader::get('X-Ed429f99cf4df084') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '2') === 'X-Ed429f99cf4df084: 290d964f15db158f') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '2') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '3') === 'X-Ed429f99cf4df084: 390d964f15db158f') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '3') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '1') === 'X-Ed429f99cf4df084: 190d964f15db158f') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::take('X-Ed429f99cf4df084', '1') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ed429f99cf4df084') === null) or \fail(__LINE__);

\Delight\Http\ResponseHeader::set('X-Fb61d1020e187480', 'c2d7a80cda4145cd');
\Delight\Http\ResponseHeader::set('X-B26cb22b1b06f99a', 'b755c55b79f69b3c');
\Delight\Http\ResponseHeader::add('X-Aeef46c385398098', '1fe95dd27b13a48a');
\Delight\Http\ResponseHeader::add('X-Aeef46c385398098', '2fe95dd27b13a48a');
\Delight\Http\ResponseHeader::add('X-Aeef46c385398098', '3fe95dd27b13a48a');
(\Delight\Http\ResponseHeader::get('X-Fb61d1020e187480') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B26cb22b1b06f99a') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098', '2') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Aeef46c385398098', '2') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Fb61d1020e187480') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B26cb22b1b06f99a') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098', '2') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-B26cb22b1b06f99a') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Fb61d1020e187480') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B26cb22b1b06f99a') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098', '2') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Fb61d1020e187480') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Fb61d1020e187480') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B26cb22b1b06f99a') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098', '2') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Aeef46c385398098') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Fb61d1020e187480') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B26cb22b1b06f99a') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098', '2') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Aeef46c385398098') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Fb61d1020e187480') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B26cb22b1b06f99a') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Aeef46c385398098', '2') === null) or \fail(__LINE__);

\Delight\Http\ResponseHeader::set('X-B0b8ed49addae9a7', '817cD2c2cb94bbdd');
(\Delight\Http\ResponseHeader::get('X-B0b8ed49addae9a7') === 'X-B0b8ed49addae9a7: 817cD2c2cb94bbdd') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B0B8ED49ADDAE9A7') === 'X-B0b8ed49addae9a7: 817cD2c2cb94bbdd') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('x-b0b8ed49addae9a7') === 'X-B0b8ed49addae9a7: 817cD2c2cb94bbdd') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B0b8ed49addae9a7', '817cD') === 'X-B0b8ed49addae9a7: 817cD2c2cb94bbdd') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B0b8ed49addae9a7', '817CD') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B0b8ed49addae9a7', '817cd') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B0b8ed49adda') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-B0b8ed49addae9a7') === 'X-B0b8ed49addae9a7: 817cD2c2cb94bbdd') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-B0b8ed49addae9a7') === true) or \fail(__LINE__);

\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6F1DDA6CD696709') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('x-e6f1dda6cd696709') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709', 'cD57') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709', 'CD57') === false) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709', 'cd57') === false) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd69') === false) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);

\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6F1DDA6CD696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('x-e6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6f1dda6cd696709', 'cD57') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6f1dda6cd696709', 'CD57') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6f1dda6cd696709', 'cd57') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6f1dda6cd69') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-E6f1dda6cd696709') === true) or \fail(__LINE__);
\Delight\Http\ResponseHeader::set('X-E6f1dda6cd696709', 'cD571abab1cc4b1b');
(\Delight\Http\ResponseHeader::take('X-E6f1dda6cd696709') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-E6f1dda6cd696709') === null) or \fail(__LINE__);

\header('X-Dbf97c884f247135:8c7039d7e753d34d');
(\Delight\Http\ResponseHeader::get('X-Dbf97c884f247135', '8c') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Dbf97c884f247135') === true) or \fail(__LINE__);
\header('X-Dbf97c884f247135: 8c7039d7e753d34d');
(\Delight\Http\ResponseHeader::get('X-Dbf97c884f247135', '8c') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Dbf97c884f247135') === true) or \fail(__LINE__);
\header('X-Dbf97c884f247135:  8c7039d7e753d34d');
(\Delight\Http\ResponseHeader::get('X-Dbf97c884f247135', '8c') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Dbf97c884f247135') === true) or \fail(__LINE__);
\header('X-Dbf97c884f247135:	8c7039d7e753d34d');
(\Delight\Http\ResponseHeader::get('X-Dbf97c884f247135', '8c') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Dbf97c884f247135') === true) or \fail(__LINE__);
\header('X-Dbf97c884f247135:		8c7039d7e753d34d');
(\Delight\Http\ResponseHeader::get('X-Dbf97c884f247135', '8c') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Dbf97c884f247135') === true) or \fail(__LINE__);
\header('X-Dbf97c884f247135:	 8c7039d7e753d34d');
(\Delight\Http\ResponseHeader::get('X-Dbf97c884f247135', '8c') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::remove('X-Dbf97c884f247135') === true) or \fail(__LINE__);

\header('X-Bdd6ef28f9347582:975181c1666babcf');
(\Delight\Http\ResponseHeader::remove('X-Bdd6ef28f9347582', '975') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Bdd6ef28f9347582') === null) or \fail(__LINE__);
\header('X-Bdd6ef28f9347582: 975181c1666babcf');
(\Delight\Http\ResponseHeader::remove('X-Bdd6ef28f9347582', '975') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Bdd6ef28f9347582') === null) or \fail(__LINE__);
\header('X-Bdd6ef28f9347582:  975181c1666babcf');
(\Delight\Http\ResponseHeader::remove('X-Bdd6ef28f9347582', '975') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Bdd6ef28f9347582') === null) or \fail(__LINE__);
\header('X-Bdd6ef28f9347582:	975181c1666babcf');
(\Delight\Http\ResponseHeader::remove('X-Bdd6ef28f9347582', '975') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Bdd6ef28f9347582') === null) or \fail(__LINE__);
\header('X-Bdd6ef28f9347582:		975181c1666babcf');
(\Delight\Http\ResponseHeader::remove('X-Bdd6ef28f9347582', '975') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Bdd6ef28f9347582') === null) or \fail(__LINE__);
\header('X-Bdd6ef28f9347582:	 975181c1666babcf');
(\Delight\Http\ResponseHeader::remove('X-Bdd6ef28f9347582', '975') === true) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Bdd6ef28f9347582') === null) or \fail(__LINE__);

\header('X-Ca7e51a515534d0d:422b93bf8b1b45a7');
(\Delight\Http\ResponseHeader::take('X-Ca7e51a515534d0d', '42') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ca7e51a515534d0d') === null) or \fail(__LINE__);
\header('X-Ca7e51a515534d0d: 422b93bf8b1b45a7');
(\Delight\Http\ResponseHeader::take('X-Ca7e51a515534d0d', '42') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ca7e51a515534d0d') === null) or \fail(__LINE__);
\header('X-Ca7e51a515534d0d:  422b93bf8b1b45a7');
(\Delight\Http\ResponseHeader::take('X-Ca7e51a515534d0d', '42') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ca7e51a515534d0d') === null) or \fail(__LINE__);
\header('X-Ca7e51a515534d0d:	422b93bf8b1b45a7');
(\Delight\Http\ResponseHeader::take('X-Ca7e51a515534d0d', '42') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ca7e51a515534d0d') === null) or \fail(__LINE__);
\header('X-Ca7e51a515534d0d:		422b93bf8b1b45a7');
(\Delight\Http\ResponseHeader::take('X-Ca7e51a515534d0d', '42') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ca7e51a515534d0d') === null) or \fail(__LINE__);
\header('X-Ca7e51a515534d0d:	 422b93bf8b1b45a7');
(\Delight\Http\ResponseHeader::take('X-Ca7e51a515534d0d', '42') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Ca7e51a515534d0d') === null) or \fail(__LINE__);

\header('X-Cfc0bcd8696f4899:  7a31e8a76126477c ');
(\Delight\Http\ResponseHeader::get('X-Cfc0bcd8696f4899') !== null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::getValue('X-Cfc0bcd8696f4899') === '7a31e8a76126477c') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::getValue('X-Cfc0bcd8696f4899', '7a31e') === '7a31e8a76126477c') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::takeValue('X-Cfc0bcd8696f4899', '7a31e') === '7a31e8a76126477c') or \fail(__LINE__);
(\Delight\Http\ResponseHeader::getValue('X-Cfc0bcd8696f4899') === null) or \fail(__LINE__);
(\Delight\Http\ResponseHeader::get('X-Cfc0bcd8696f4899') === null) or \fail(__LINE__);

echo 'ALL TESTS PASSED' . "\n";
