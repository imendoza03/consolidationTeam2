<?php
namespace feature_metadata;

class Metadata
{
    private $information;
    
    public function __construct(array $information)
    {
    
       $this->information = $information;
    }
    
    public function getConfiguration()
    {
        return $this->information;
    }
}