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

namespace Delight\Http;

/** HTTP response headers sent by the server */
final class ResponseHeader {

	private function __construct() { }

	/**
	 * Returns the header with the specified name (and optional value prefix)
	 *
	 * @param string $name the name of the header
	 * @param string $valuePrefix the optional string to match at the beginning of the header's value
	 * @return string|null the header (if found) or `null`
	 */
	public static function get($name, $valuePrefix = '') {
		$nameLength = strlen($name);
		$valuePrefixLength = strlen($valuePrefix);

		$headers = headers_list();

		foreach ($headers as $header) {
			if (substr($header, 0, $nameLength) === $name) {
				if (substr($header, $nameLength + 2, $valuePrefixLength) === $valuePrefix) {
					return $header;
				}
			}
		}

		return null;
	}

	/**
	 * Sets the header with the specified name and value
	 *
	 * @param string $name the name of the header
	 * @param string $value the corresponding value for the header
	 */
	public static function set($name, $value) {
		header($name.': '.$value);
	}

	/**
	 * Removes the header with the specified name (and optional value prefix)
	 *
	 * @param string $name the name of the header
	 * @param string $valuePrefix the optional string to match at the beginning of the header's value
	 */
	public static function remove($name, $valuePrefix = '') {
		if (empty($valuePrefix)) {
			header_remove($name);
		}
		else {
			$found = self::get($name, $valuePrefix);

			if (isset($found)) {
				header_remove($name);
			}
		}
	}

	/**
	 * Returns and removes the header with the specified name (and optional value prefix)
	 *
	 * @param string $name the name of the header
	 * @param string $valuePrefix the optional string to match at the beginning of the header's value
	 * @return string|null the header (if found) or `null`
	 */
	public static function take($name, $valuePrefix = '') {
		$found = self::get($name, $valuePrefix);

		if (isset($found)) {
			header_remove($name);

			return $found;
		}
		else {
			return null;
		}
	}

}
