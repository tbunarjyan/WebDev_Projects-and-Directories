<?php

/**
 * Class Writer
 */
class MyXmlWriter extends AbstractWriter
{
    /**
     * JsonWriter constructor.
     */
    public function __construct()
    {
        $this->headers = [
            "Content-Type" => "application/xml"
        ];
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function writeData()
    {
        $this->setHeaders();

        $xml = new SimpleXMLElement('<data/>');
        array_walk_recursive($this->data, array($xml, 'addChild'));

        echo $xml->asXML();
    }
}