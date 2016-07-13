<?php


namespace Wave\SDK\SchemaGenerator\Parser;


abstract class Parser {

    abstract public function getOperations();
    abstract public function getDefinitions();

}