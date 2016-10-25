<?php

/**
 * Class Writer
 */
abstract class AbstractWriter implements IWritable
{
    protected $data;

    protected $headers;
    
    public function setHeaders()
    {
        foreach ($this->headers as $header => $value) {
            header($header . ':' . $value);
        }
    }
}