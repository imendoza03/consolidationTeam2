<?php 
namespace Tools;

class Serializer {
    /** Method serialize with two parameters:
    * @param array $associativeArray associative array ['key1' => 'value', 'key2' => 'other value']
    * @param string $format json or nativephp
    * 
    * @return string json or nativephp representation
    */
    public function serializer($associativeArray, $format) {
        if ($format == 'json'){
            return json_encode($associativeArray);
        } else if ($format == 'nativephp'){
            return serialize($associativeArray);
        } else {
            throw new \RuntimeException('You provided a wrong format! json or nativephp');
        }
    }
}