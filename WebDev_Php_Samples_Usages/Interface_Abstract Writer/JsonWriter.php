<?php

/**
 * Class Writer
 */
class JsonWriter extends AbstractWriter
{
    /**
     * JsonWriter constructor.
     */
    public function __construct()
    {
        $this->headers = [
            "Content-Type" => "application/json"
        ];
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function writeData()
    {
        $this->setHeaders();

        echo json_encode($this->data);
    }
}