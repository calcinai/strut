<?php
/**
 * @package    strut
 * @author     Michael Calcinai <michael@calcin.ai>
 */

require __DIR__ . '/../vendor/autoload.php';

use Calcinai\Strut\Definitions\Headers;
use Calcinai\Strut\Definitions\Info;
use Calcinai\Strut\Definitions\Operation;
use Calcinai\Strut\Definitions\Paths;
use Calcinai\Strut\Definitions\PathItem;
use Calcinai\Strut\Definitions\QueryParameterSubSchema;
use Calcinai\Strut\Definitions\Response;
use Calcinai\Strut\Definitions\Responses;
use Calcinai\Strut\Definitions\Schema\Properties\Properties;
use Calcinai\Strut\Swagger;





$schema = Swagger::create()
    ->setInfo(
        Info::create()
            ->setTitle('Swagger Petstore')
            ->setVersion('1.0.0')
            ->setLicense(\Calcinai\Strut\Definitions\License::create()
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
                        ->setSchema($pet)
                    )
                )
            )
        )
    );


print_r(json_encode($schema, JSON_PRETTY_PRINT));


//        "responses": {
//                "200": {
//                    "description": "An paged array of pets",
//                          "headers": {
//                        "x-next": {
//                            "type": "string",
//                            "description": "A link to the next page of responses"
//              }
//            },
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
//      },
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
//  "definitions": {
//    "Pet": {
//        "required": [
//            "id",
//            "name"
//        ],
//      "properties": {
//            "id": {
//                "type": "integer",
//          "format": "int64"
//        },
//        "name": {
//                "type": "string"
//        },
//        "tag": {
//                "type": "string"
//        }
//      }
//    },
//    "Pets": {
//        "type": "array",
//      "items": {
//            "$ref": "#/definitions/Pet"
//      }
//    },
//    "Error": {
//        "required": [
//            "code",
//            "message"
//        ],
//      "properties": {
//            "code": {
//                "type": "integer",
//          "format": "int32"
//        },
//        "message": {
//                "type": "string"
//        }
//      }
//    }
//  }
//}