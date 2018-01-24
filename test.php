<?php

$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-128-cbc'));

var_dump(strlen($iv));

var_dump(base64_encode($iv));

var_dump(strlen(base64_encode($iv)));