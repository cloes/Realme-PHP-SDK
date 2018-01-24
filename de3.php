<?php

$post = file_get_contents('post.txt');

$baseDecodedContent = base64_decode($post);

file_put_contents('post_base_decoded.txt',$baseDecodedContent);