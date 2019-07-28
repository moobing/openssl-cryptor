openssl-cryptor(PHP)
===================

Provide a concise OpenSSL encryptor library.

## Description

OpenSSL Encryptor with 19 Lines of Code.

## Install

Require this library through composer:

```
composer require mbing/openssl-cryptor
```


## Example

```php
use mbing\OpensslCryptor\Cryptor;

$encodeData = 'Here is the data to be encrypted.';
$key = 'eiort832j39fe8we';
//encrypto
$encrypted = Cryptor::Encrypt($encodeData, $key);
//decrypto
$decrypted = Cryptor::Decrypt($encrypted, $key);

```