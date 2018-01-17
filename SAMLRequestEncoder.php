<?php

class SAMLRequestEncoder{

    private $base64Content;

    public function __construct($xmlFile){

        $content = file_get_contents($xmlFile);
        if($content === false){
            throw new Exception("can not open xml file");
        }

        $deflatedContent = gzdeflate($content);
    
        $this->base64Content = base64_encode($deflatedContent);
    }

    public function getEncodedString(){
        return $this->base64Content;
    }

}

