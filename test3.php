<?php

error_reporting(E_WARNING);

class CryptAES {
    /* AES加密 */
    public function aesEncode($sourcestr, $key, $iv) {
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $sourcestr, MCRYPT_MODE_CBC, $iv));
    }

    /* AES解密 */
    public function aesDecode($crypttext, $key, $iv) {
        return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, base64_decode($crypttext), MCRYPT_MODE_CBC, $iv));
    }
}

class OpenSSLAES {
    /* AES加密 */
    public function aesEncode($sourcestr, $key, $iv) {
        $sourcestr .= str_repeat(chr(0), (16 - strlen($sourcestr) % 16) % 16);
        return base64_encode(openssl_encrypt($sourcestr, 'aes-128-cbc', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv));
    }

    /* AES解密 */
    public function aesDecode($crypttext, $key, $iv) {
        return rtrim(openssl_decrypt(base64_decode($crypttext), 'aes-128-cbc', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv));
    }
}


$key = substr(md5('12312312'), 3, 16);
$iv = '6543210987654321';
$data = '你好啊，这是什么意思呢？|abcdefghi|';
echo "Source: ";
var_dump($data);
$crypt = new CryptAES();
$openssl = new OpenSSLAES();

$enc = $crypt->aesEncode($data, $key, $iv);
$enc2 = $openssl->aesEncode($data, $key, $iv);
var_dump($enc2);
var_dump(openssl_error_string());

echo "Decrypt:\n";
$dec = $crypt->aesDecode($enc2, $key, $iv);
$dec2 = $openssl->aesDecode($enc, $key, $iv);
$dec3 = $openssl->aesDecode($enc2, $key, $iv);
var_dump($dec);
echo bin2hex($dec) . "\n";
var_dump($dec2);
echo bin2hex($dec2) . "\n";
var_dump($dec3);
echo bin2hex($dec3) . "\n";