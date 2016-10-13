<?php
/**
 * @package    strut
 * @author     Michael Calcinai <michael@calcin.ai>
 */

require __DIR__ . '/../vendor/autoload.php';

use Calcinai\Strut\Swagger;
use Calcinai\Strut\Definitions\Definitions;
use Calcinai\Strut\Definitions\Info;
use Calcinai\Strut\Definitions\Operation;
use Calcinai\Strut\Definitions\Paths;
use Calcinai\Strut\Definitions\PathItem;
use Calcinai\Strut\Definitions\QueryParameterSubSchema;
use Calcinai\Strut\Definitions\Responses;
use Calcinai\Strut\Definitions\Response;
use Calcinai\Strut\Definitions\Headers;
use Calcinai\Strut\Definitions\Header;
use Calcinai\Strut\Definitions\JsonReference;
use Calcinai\Strut\Definitions\License;
use Calcinai\Strut\Definitions\Schema;
use Calcinai\Strut\Definitions\Schema\Properties\Properties;

$pet = Schema::create()
    ->addRequired('id')
    ->addRequired('name')

    ->setProperties(Properties::create()
        ->set('id', Schema::create()
            ->setType('integer')
            ->setFormat('int64')
        )
        ->set('name', Schema::create()
            ->setType('string')
        )
        ->set('tag', Schema::create()
            ->setType('string')
        )
    );

$pets = Schema::create()
    ->setType('array')
    ->setItems($pet);


$error = Schema::create()
    ->addRequired('code')
    ->addRequired('message')

    ->setProperties(Properties::create()
        ->set('code', Schema::create()
            ->setType('integer')
            ->setFormat('int32')
        )
        ->set('error', Schema::create()
            ->setType('string')
        )
    );


$swagger = Swagger::create()
    ->setInfo(
        Info::create()
            ->setTitle('Swagger Petstore')
            ->setVersion('1.0.0')
            ->setLicense(
                License::create()
                ->setName('MIT')
            )
    )

    ->setHost('petstore.swagger.io')
    ->setBasePath('/v1')
    ->addScheme('http')

    ->setConsumes(['application/json'])
    ->setProduces(['application/json'])

    ->setPaths(Paths::create()
        ->set('/pets', PathItem::create()
            ->setGet(Operation::create()
                ->setSummary('List all pets')
                ->setOperationId('listPets')
                ->addTag('pets')

                ->addParameter(QueryParameterSubSchema::create()
                    ->setName('Limit')
                    ->setDescription('How many items to return at one time (max 100)')
                    ->setRequired(false)
                    ->setType('integer')
                    ->setFormat('int32')

                )

                ->setResponses(Responses::create()
                    ->set('200', Response::create()
                        ->setDescription('A paged array of pets')
                        ->setHeaders(Headers::create()
                            ->set('x-next', Header::create()
                                ->setType('string')
                                ->setDescription('A link to the next page of responses')
                            )
                        )
                        ->setSchema($pets)
                    )
                    ->set('default', Response::create()
                        ->setDescription('Unexpected error')
                        ->setSchema($error)
                    )
                )
            )
        )
    )
    ->setDefinitions(Definitions::create()
        ->set('Pet', $pet)
        ->set('Pets', $pets)
        ->set('Error', $error)
    )

;


print_r(json_encode($swagger, JSON_PRETTY_PRINT));


//      "post": {
//            "summary": "Create a pet",
//        "operationId": "createPets",
//        "tags": [
//                "pets"
//            ],
//        "responses": {
//                "201": {
//                    "description": "Null response"
//          },
//          "default": {
//                    "description": "unexpected error",
//            "schema": {
//                        "$ref": "#/definitions/Error"
//            }
//          }
//        }
//      }
//    },
//    "/pets/{petId}": {
//        "get": {
//            "summary": "Info for a specific pet",
//        "operationId": "showPetById",
//        "tags": [
//                "pets"
//            ],
//        "parameters": [
//          {
//              "name": "petId",
//            "in": "path",
//            "required": true,
//            "description": "The id of the pet to retrieve",
//            "type": "string"
//          }
//        ],
//        "responses": {
//                "200": {
//                    "description": "Expected response to a valid request",
//            "schema": {
//                        "$ref": "#/definitions/Pets"
//            }
//          },
//          "default": {
//                    "description": "unexpected error",
//            "schema": {
//                        "$ref": "#/definitions/Error"
//            }
//          }
//        }
//      }
//    }
//  },
//
//
//    }
//  }
//}