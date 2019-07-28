<?php
namespace mbing\opensslCryptor;
/**
 * OpenSSL Cryptor
 */
class Cryptor
{
    public static $iv = '0000000000000000'; // 偏移量
    //OpenSSL加密
    public static function Encrypt($data = '', $key)
    {
        return base64_encode(openssl_encrypt($data, "AES-256-CBC", $key, OPENSSL_RAW_DATA, self::$iv));
    }
    //OpenSSL解密
    public static function Decrypt($data = '', $key)
    {
        return openssl_decrypt(base64_decode($data), "AES-256-CBC", $key, OPENSSL_RAW_DATA, self::$iv);
    }
}