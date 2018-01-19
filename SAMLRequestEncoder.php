<?php

class SAMLRequestEncoder{

    private $SAMLRequestString;
    private $sigAlgString;
    private $relayStateSting;
    private $xmlFile;
    private $sigAlg;

    const DSAwithSHA1 = 'http://www.w3.org/2000/09/xmldsig#dsa-sha1';
    const RSAwithSHA1 = 'http://www.w3.org/2000/09/xmldsig#rsa-sha1';

    public function __construct($xmlFile,$sigAlg,$relayState=''){
        $this->xmlFile = $xmlFile;
        $this->sigAlg  = $sigAlg;
        //$this->sigAlgString = $this->getSigAlgString($sigAlg);

        if (!empty($relayState)){
            $this->relayStateSting = 'RelayState='.$relayState;
        }
    }


    private function getSigAlgString($sigAlg){
        if ($sigAlg == 'dsa-sha1'){
            $sigAlgString = 'SigAlg='.urlencode(self::DSAwithSHA1);
        }elseif ($sigAlg == 'rsa-sha1'){
            $sigAlgString = 'SigAlg='.urlencode(self::RSAwithSHA1);
        }
        return $sigAlgString;
    }

    /*
     * a function for signing the content
     *
     */
    private function sign($content, $sigAlg){
        if ($sigAlg == 'dsa-sha1'){
            openssl_sign($content,$signature,$pkeyid,'SHA1');
        }elseif ($sigAlg == 'rsa-sha1'){
            $pkeyid = openssl_pkey_get_private(file_get_contents('mts_saml_sp.pem'));
            //$pkeyid = openssl_pkey_get_private("file://mts_saml_sp.pfx",'password');

            openssl_sign($content,$signature,$pkeyid,'SHA1');
        }
        return $signature;
    }

    private function getSignatureString($content, $sigAlg){
        $signature = $this->sign($content, $sigAlg);
        $signatureString = 'Signature='.base64_encode($signature);
        return $signatureString;
    }

    private function getSAMLRequestString($xmlFile){
        $content = file_get_contents($xmlFile);
        if($content === false){
            throw new Exception("can not open xml file");
        }

        $deflatedContent = gzdeflate($content);

        $SAMLRequestString = base64_encode($deflatedContent);

        return 'SAMLRequest='.urlencode($SAMLRequestString);
    }

    public function getQueryString(){
        $SAMLRequestString = $this->getSAMLRequestString($this->xmlFile);
        $sigAlgString = $this->getSigAlgString($this->sigAlg);

        if(isset($this->relayStateSting)){
            $contentForSign = $SAMLRequestString.'&'.$this->relayStateSting.'&'.$sigAlgString;
        }else{
            $contentForSign = $SAMLRequestString.'&'.$sigAlgString;
        }

        $signatureString = $this->getSignatureString($contentForSign,$this->sigAlg);

        $result = $contentForSign.'&'.$signatureString;

        return $result;

    }

}

