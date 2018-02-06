<?php

$base64Content = file_get_contents('aes_key.txt');

$baseDecodedContent = base64_decode($base64Content);

$pkeyid = openssl_pkey_get_private(file_get_contents('mts_saml_sp.pem'));

//openssl_sign($content,$signature,$pkeyid,'SHA1');

openssl_private_decrypt($baseDecodedContent, $decryptedAESKey, $pkeyid);

//var_dump($decryptedAESKey);

$AESContent = base64_decode(file_get_contents('aes_content.txt'));

file_put_contents('baseDecodedAESContent.txt',$AESContent);

$iv = substr($AESContent,0,16);

$realAESContent = substr($AESContent,16);

echo strlen($realAESContent);

//$result = openssl_decrypt($realAESContent,'AES-128-CBC',$decryptedAESKey,OPENSSL_RAW_DATA,$iv);
$result = openssl_decrypt($realAESContent,'AES-128-CBC',$decryptedAESKey,OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING,$iv);

//$result = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $decryptedAESKey, $realAESContent, MCRYPT_MODE_CBC, $iv);

//$result = substr($result,0,strrpos($result,'>') + 1);

$paddingLen = ord($result[strlen($result)-1]);
$result = substr($result,0, strlen($result)-$paddingLen);

//$result = substr($result,0,strrpos($result,'>') + 1);

file_put_contents('result',$result);

$simplexml = simplexml_load_string($result);

$json = json_encode($simplexml);
$array = json_decode($json,TRUE);

//var_dump($simplexml->NameID->attributes());

//print_r($simplexml->NameID->attributes());

header("Content-type: text/html; charset=utf-8"); 

var_dump($array);

//var_dump($result);
