# PHP-HTTP

Hypertext Transfer Protocol (HTTP) utilities for PHP

## Requirements

 * PHP 5.3.0+

## Installation

 1. Include the library via Composer [[?]](https://github.com/delight-im/Knowledge/blob/master/Composer%20(PHP).md):

    ```
    $ composer require delight-im/http
    ```

 1. Include the Composer autoloader:

    ```php
    require __DIR__ . '/vendor/autoload.php';
    ```

## Usage

### Response headers

 * Retrieving a header (with optional value prefix)

   ```php
   $header = \Delight\Http\ResponseHeader::get('Content-Type');
   // or
   $header = \Delight\Http\ResponseHeader::get('Content-Type', 'text/');
   ```

 * Setting a header (overwriting other headers with the same name)

   ```php
   \Delight\Http\ResponseHeader::set('X-Frame-Options', 'sameorigin');
   ```

 * Adding a header (preserving other headers with the same name)

   ```php
   \Delight\Http\ResponseHeader::add('Vary', 'User-Agent');
   ```

 * Removing a header (with optional value prefix)

   ```php
   $success = \Delight\Http\ResponseHeader::remove('X-Powered-By');
   // or
   $success = \Delight\Http\ResponseHeader::remove('X-Powered-By', 'PHP');
   ```

 * Retrieving and removing a header at once (with optional value prefix)

   ```php
   $header = \Delight\Http\ResponseHeader::take('Set-Cookie');
   // or
   $header = \Delight\Http\ResponseHeader::take('Set-Cookie', 'mysession=');
   ```

## Contributing

All contributions are welcome! If you wish to contribute, please create an issue first so that your feature, problem or question can be discussed.

## License

This project is licensed under the terms of the [MIT License](https://opensource.org/licenses/MIT).
