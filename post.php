<?php
var_dump($_POST);

file_put_contents('post.txt',$_POST);

$decodedContent = base64_decode($_POST['SAMLResponse']);

var_dump($decodedContent);

file_put_contents('baseDecoded.txt',$decodedContent);

$inflatedContent = gzinflate($decodedContent);

file_put_contents('inflated.txt',$inflatedContent);
