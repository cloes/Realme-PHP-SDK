<?php

$response = <<<EOD
<saml:Assertion xmlns:saml="urn:oasis:names:tc:SAML:2.0:assertion" ID="s208b1e913d1cbc624cc460731a07d0a20029f0fe2" IssueInstant="2018-01-23T11:19:44Z" Version="2.0">
<saml:Issuer>https://mts.realme.govt.nz/saml2</saml:Issuer><ds:Signature xmlns:ds="http://www.w3.org/2000/09/xmldsig#">
<ds:SignedInfo>
<ds:CanonicalizationMethod Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#"></ds:CanonicalizationMethod>
<ds:SignatureMethod Algorithm="http://www.w3.org/2000/09/xmldsig#rsa-sha1"></ds:SignatureMethod>
<ds:Reference URI="#s208b1e913d1cbc624cc460731a07d0a20029f0fe2">
<ds:Transforms>
<ds:Transform Algorithm="http://www.w3.org/2000/09/xmldsig#enveloped-signature"></ds:Transform>
<ds:Transform Algorithm="http://www.w3.org/2001/10/xml-exc-c14n#"></ds:Transform>
</ds:Transforms>
<ds:DigestMethod Algorithm="http://www.w3.org/2000/09/xmldsig#sha1"></ds:DigestMethod>
<ds:DigestValue>VtVdWXO0ra7OOBUT6S5X0QyaNAk=</ds:DigestValue>
</ds:Reference>
</ds:SignedInfo>
<ds:SignatureValue>
emG7LErhFWVv6CqGvrY3IxeKT8MssQn8ZfrkuLIwZgnxSoCunq8sqnJDd5U2YIhp/jJwn2R/fA4L
foAeIlDwMX+/VRTcBoQAer5lBNPDqIWFqzza1R5+KxTfgQAe+tgvLAypk7M18u8vwAkLSaNtlE2Y
zu7CK5i6QVN+3V6Rt2LzjoQE8MYZwG9Qu75+xHeurZ9xzccfG64FmAB5QG+vRFXVUeYCywGuhhen
8AvFn+zOfSdxfe/FIXDCp4a4dajHFtuJTBhbX255skKX+XPebApydgJlulQ5VX/Xzr27Kpnbo4J0
WGDLOs/FyssV79a3LszIKyBqVjP4fy0GZ3gYCA==
</ds:SignatureValue>
<ds:KeyInfo>
<ds:X509Data>
<ds:X509Certificate>
MIIECTCCAvGgAwIBAgIEM4QPozANBgkqhkiG9w0BAQUFADCBtDELMAkGA1UEBhMCTloxEzARBgNV
BAgTCldlbGxpbmd0b24xEzARBgNVBAcTCldlbGxpbmd0b24xJzAlBgNVBAoTHkRlcGFydG1lbnQg
b2YgSW50ZXJuYWwgQWZmYWlyczEnMCUGA1UECxMeRGVwYXJ0bWVudCBvZiBJbnRlcm5hbCBBZmZh
aXJzMSkwJwYDVQQDEyBtdHMuc2lnbmluZy5sb2dvbi5yZWFsbWUuZ292dC5uejAeFw0xMzA5MTEy
MTU5NDVaFw0yMzA5MDkyMTU5NDVaMIG0MQswCQYDVQQGEwJOWjETMBEGA1UECBMKV2VsbGluZ3Rv
bjETMBEGA1UEBxMKV2VsbGluZ3RvbjEnMCUGA1UEChMeRGVwYXJ0bWVudCBvZiBJbnRlcm5hbCBB
ZmZhaXJzMScwJQYDVQQLEx5EZXBhcnRtZW50IG9mIEludGVybmFsIEFmZmFpcnMxKTAnBgNVBAMT
IG10cy5zaWduaW5nLmxvZ29uLnJlYWxtZS5nb3Z0Lm56MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8A
MIIBCgKCAQEA5A+xjCmkrgqpSnkhCllJeisEfZn0VoyhLrPRSyZfjikufWhNoR9lDUP1wjqz/jIm
q7H46t8qHFkGbLO85ODkCsYiq+gSxh+TF1K3bGwtlz7m6QYFNURFid7AH8NaXEF6rylogHjSoJx/
1cuujIcb/qXCd0YXDICVqG74g0jkyk3V3gJuy5utTft6KrU/h9IuIudTP5xKwcaRtXlZoZkxxcOa
P6aBw8EPks3mfA7pknOtb1fvlYF4bXggNFYqxJCtBi5gLYQISRL8UWAW/EdN+mDIXn9BuQAsuS3s
1DTx/+dJy+9CZXNzK5i6bCj6TBnugasbkoOx8fdpYBmGlIZO7QIDAQABoyEwHzAdBgNVHQ4EFgQU
k53+2zIt62M8okGTDzgEiYfDR4swDQYJKoZIhvcNAQEFBQADggEBAFatYWgm1Tst/UbCDOXYziVp
nzCs8DPcswcETlQuju3Y4ys/spMgugrErqxyWcEB9nf9amtYFPkeuCwQ9PUxHCjSCCzmS9T6PhK+
iX83vL+IlMe3RsR9pdAYBI2lUcTMLHy2jGfgwTF+nGvH/48PImu7EAZj7pQgY3gk3J1F23BZ28aH
5N+RuDBY+17nk/yiqierT1J8/RUE2SGT9029sM0XSTQNYj3rB7K6foISbhqeiNlVDBmXUBWNtNxX
k6M088a1Op/ZucUC1haKpHtsszuF8wxC0PApX+yZWdiOPTewCWBhRjWMbr1gQJ7FV+LcpIHUqxaq
JPsnOwYNA0BljHk=
</ds:X509Certificate>
</ds:X509Data>
</ds:KeyInfo>
</ds:Signature><saml:Subject>
<saml:NameID Format="urn:oasis:names:tc:SAML:2.0:nameid-format:persistent" NameQualifier="https://mts.realme.govt.nz/saml2" SPNameQualifier="http://myrealme.test/mts2/sp">CloesTest</saml:NameID><saml:SubjectConfirmation Method="urn:oasis:names:tc:SAML:2.0:cm:bearer">
<saml:SubjectConfirmationData InResponseTo="a958a20e059c26d1cfb73163b1a6c4f9" NotOnOrAfter="2018-01-23T11:29:44Z" Recipient="http://52.198.228.221/post.php"></saml:SubjectConfirmationData></saml:SubjectConfirmation>
</saml:Subject><saml:Conditions NotBefore="2018-01-23T11:09:44Z" NotOnOrAfter="2018-01-23T11:29:44Z">
<saml:AudienceRestriction>
<saml:Audience>http://myrealme.test/mts2/sp</saml:Audience>
</saml:AudienceRestriction>
</saml:Conditions>
<saml:AuthnStatement AuthnInstant="2018-01-23T11:19:44Z" SessionIndex="s217b46f7dc993c8eca69f20759bead732962ddb01"><saml:AuthnContext><saml:AuthnContextClassRef>urn:nzl:govt:ict:stds:authn:deployment:GLS:SAML:2.0:ac:classes:ModStrength</saml:AuthnContextClassRef></saml:AuthnContext></saml:AuthnStatement></saml:Assertion>
EOD;


$dom = new DOMDocument();
$dom->loadXML($response);
$doc = $dom->documentElement;
$xpath = new DOMXpath($dom);

//$xpath->registerNamespace('samlp', 'urn:oasis:names:tc:SAML:2.0:protocol');
//$xpath->registerNamespace('saml', 'urn:oasis:names:tc:SAML:2.0:assertion');


$xpath->registerNamespace('saml', 'urn:oasis:names:tc:SAML:2.0:assertion');
$xpath->registerNamespace('ds', 'http://www.w3.org/2000/09/xmldsig#');


$tmp = $xpath->query('/saml:Assertion/saml:Subject/saml:NameID', $doc);
echo $tmp[0]->textContent;
exit;

foreach ($xpath->query('/saml:Assertion/saml:Subject/saml:NameID', $doc) as $attr) {
    var_dump($attr->textContent);

    /*
    echo " # Attribute: " . $attr->getAttribute('Name') . "<br/>";
    foreach ($xpath->query('saml:AttributeValue', $attr) as $value) {
        echo "   Value: " . $value->textContent . "<br/>";
    }
    */
}

//https://stackoverflow.com/questions/31099829/retrieve-attributes-and-nameid-from-a-saml-response-xml?rq=1


/*
foreach ($xpath->query('/samlp:Response/saml:Assertion/saml:AttributeStatement/saml:Attribute', $doc) as $attr) {
    echo " # Attribute: " . $attr->getAttribute('Name') . "<br/>";
    foreach ($xpath->query('saml:AttributeValue', $attr) as $value) {
        echo "   Value: " . $value->textContent . "<br/>";
    }
}
*/