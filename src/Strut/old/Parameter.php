<?php

namespace Wave\SDK\SchemaGenerator;

class Parameter extends Definition {

    const IN_BODY = 'body';
    const IN_QUERY = 'query';
    const IN_PATH = 'path';
    const IN_GUESS = 'guess';

    /** @var string */
    public $name;

    public function __construct($data = null){
        $this->in = self::IN_GUESS;
        parent::__construct($data);
    }

}