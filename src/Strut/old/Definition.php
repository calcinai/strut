<?php


namespace Wave\SDK\SchemaGenerator;


class Definition {

    public function __construct($data = null){

        if(is_array($data) || is_object($data)){
            foreach($data as $key => $value){
                $this->$key = $value;
            }
        }

    }

    public function merge($new){

        if(!is_array($new) && !is_object($new))
            throw new \InvalidArgumentException("Definition::merge() requires an array or object");

        foreach($new as $key => $value){
            $this->$key = $value;
        }

        return $this;
    }

}