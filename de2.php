<?php

$base64Content = file_get_contents('aes_key.txt');

$baseDecodedContent = base64_decode($base64Content);

$pkeyid = openssl_pkey_get_private(file_get_contents('mts_saml_sp.pem'));

//openssl_sign($content,$signature,$pkeyid,'SHA1');

openssl_private_decrypt($baseDecodedContent, $decryptedAESKey, $pkeyid);

var_dump($decryptedAESKey);

$AESContent = base64_decode(file_get_contents('aes_content.txt'));

file_put_contents('baseDecodedAESContent.txt',$AESContent);

$iv = substr($AESContent,0,16);

$realAESContent = substr($AESContent,16);

echo strlen($realAESContent);

$result = openssl_decrypt($realAESContent,'AES-128-CBC',$decryptedAESKey,OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING,$iv);

//$result = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $decryptedAESKey, $realAESContent, MCRYPT_MODE_CBC, $iv);

file_put_contents('result',$result);

$simplexml = simplexml_load_file('result');

echo $simplexml->getName();

header("Content-type: text/html; charset=utf-8"); 

var_dump($result);
