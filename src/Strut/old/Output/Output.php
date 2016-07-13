<?php


namespace Wave\SDK\SchemaGenerator\Output;


use Wave\SDK\SchemaGenerator\Parser\Parser;

abstract class Output {

    protected static $defaults = [
        // a unique name to identify this API within the generated SDK
        'name' => 'api',
        // Human friendly title
        'title' => 'An API',
        // Human friendly description
        'description' => 'An API Description',
        // Version of this release
        'version' => '0.0.1'
    ];


    /** @var Parser */
    protected $parser;

    public function __construct(Parser $parser){
        $this->parser = $parser;
    }

    abstract function generate();

}