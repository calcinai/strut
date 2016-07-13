<?php


namespace Wave\SDK\SchemaGenerator;


abstract class AbstractGenerator {

    abstract protected function getOperations();

    public function generateSchema(){

        $paths = $this->getOperations();

        return array(
            'swagger' => '2.0',
            'info' => array(
                'title' => 'An API description',
                'version' => '1.0.0'
            ),
            'paths' => $paths
        );

    }

}