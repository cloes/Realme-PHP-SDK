<?php
/**
 * Created by PhpStorm.
 * User: Wayne
 * Date: 2018/1/17
 * Time: 17:34
 */

require_once('SAMLRequestEncoder.php');

$SAMLRequestEncoder = new SAMLRequestEncoder('./saml.xml');

$SAMLRequestString = $SAMLRequestEncoder->getEncodedString();

var_dump($SAMLRequestString);