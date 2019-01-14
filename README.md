# Strut
Yet another OpenAPI/Swagger manipulation library!

This library is almost 100% generated code by [Gendarme](https://github.com/calcinai/gendarme). The reasoning behind this is that all the information required to manipulate a schema outlined in the specification.

## Installation
via composer
```
composer require calcinai/strut
```

## Usage
The test case for this is the OpenAPI petstore.

The library will deserialize an OpenAPI specification into native PHP objects, then serialize it back into its original form, with the only differences (sometimes) being the order of properties in objects (which is of no consequence).

### Loading documents

```php
$schema = json_decode(file_get_contents('http://petstore.swagger.io/v2/swagger.json'));
$openapi = \Calcinai\Strut\OpenAPI::create($schema);
print_r($swagger);
```

This will produce (snipped):

```
Calcinai\Strut\OpenAPI Object
(
    [data:protected] => Array
        (
            [openapi] => 3.0
            [info] => Calcinai\Strut\Definitions\Info Object
                (
                    [data:protected] => Array
                        (
                            [version] => 1.0.0
                            [title] => OpenAPI Petstore
                            [license] => Calcinai\Strut\Definitions\License Object
                                (
                                    [data:protected] => Array
                                        (
                                            [name] => MIT
                                        )

                                )

                        )

                )

            [servers] => Array
                (
                    [0] => Calcinai\Strut\Definitions\Server Object
                        (
                            [data:protected] => Array
                                (
                                    [url] => https://petstore.openapis.org/v1
                                    [description] => Development server
                                )

                        )

                )

            [paths] => Calcinai\Strut\Definitions\Paths Object
                (
                    [data:protected] => Array
                        (
                            [/pets] => Calcinai\Strut\Definitions\PathItem Object
                                (
                                    [data:protected] => Array
                                        (
                                            [get] => Calcinai\Strut\Definitions\Operation Object
                                                (
                                                    [data:protected] => Array
                                                        (
                                                            [summary] => List all pets
                                                            [operationId] => listPets
                                                            [tags] => Array
                                                                (
                                                                    [0] => pets
                                                                )

                                                            [parameters] => Array
                                                                (
                                                                    [0] => Calcinai\Strut\Definitions\Parameter Object
                                                                        (
                                                                            [data:protected] => Array
                                                                                (
                                                                                    [name] => limit
                                                                                    [in] => query
                                                                                    [description] => How many items to return at one time (max 100)
                                                                                    [required] => 
                                                                                    [schema] => Calcinai\Strut\Definitions\Schema Object
                                                                                        (
                                                                                            [data:protected] => Array
                                                                                                (
                                                                                                    [type] => integer
                                                                                                    [format] => int32
                                                                                                )

                                                                                        )

                                                                                )

                                                                        )

                                                                )

                                                            [responses] => Calcinai\Strut\Definitions\Responses Object
                                                                (
                                                                    [data:protected] => Array
                                                                        (
                                                                            [200] => Calcinai\Strut\Definitions\Response Object
                                                                                (
                                                                                    [data:protected] => Array
                                                                                        (
                                                                                            [description] => An paged array of pets
                                                                                            [headers] => Calcinai\Strut\Definitions\HeadersOrReferences Object
                                                                                                (
                                                                                                    [data:protected] => Array
                                                                                                        (
                                                                                                            [x-next] => Calcinai\Strut\Definitions\Header Object
                                                                                                                (
                                                                                                                    [data:protected] => Array
                                                                                                                        (
                                                                                                                            [schema] => Calcinai\Strut\Definitions\Schema Object
                                                                                                                                (
                                                                                                                                    [data:protected] => Array
                                                                                                                                        (
                                                                                                                                            [type] => string
                                                                                                                                        )

                                                                                                                                )

                                                                                                                            [description] => A link to the next page of responses
                                                                                                                        )

                                                                                                                )

                                                                                                        )

                                                                                                )

                                                                                            [content] => Calcinai\Strut\Definitions\MediaTypes Object
                                                                                                (
                                                                                                    [data:protected] => Array
                                                                                                        (
                                                                                                            [application/json] => Calcinai\Strut\Definitions\MediaType Object
                                                                                                                (
                                                                                                                    [data:protected] => Array
                                                                                                                        (
                                                                                                                            [schema] => Calcinai\Strut\Definitions\Reference Object
                                                                                                                                (
                                                                                                                                    [data:protected] => Array
                                                                                                                                        (
                                                                                                                                            [$ref] => #/components/schemas/Pets
                                                                                                                                        )

                                                                                                                                )

                                                                                                                        )

                                                                                                                )

                                                                                                        )

                                                                                                )

                                                                                        )

                                                                                )

...
```


### Creating and modifying documents

The following is an example of how that schema would be programatically generated:

```php
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


$schema = OpenAPI::create()
    ->setInfo(
        Info::create()
            ->setTitle('Swagger Petstore')
            ->setVersion('1.0.0')
            ->setLicense(
                License::create()
                    ->setName('MIT')
            )
    )
    ->addServer(\Calcinai\Strut\Definitions\Server::create()->setUrl('petstore.swagger.io'))
    ->setPaths(Paths::create()
        ->set('/pets', PathItem::create()
            ->setGet(Operation::create()
                ->setSummary('List all pets')
                ->setOperationId('listPets')
                ->addTag('pets')
                ->setResponses(Responses::create()
                    ->set('200', Response::create()
                        ->setDescription('A paged array of pets')
                    )
                    ->set('default', Response::create()
                        ->setDescription('Unexpected error')
                    )
                )
            )
        )
    )
    ->setComponents(\Calcinai\Strut\Definitions\Components::create()
        ->setSchemas(\Calcinai\Strut\Definitions\SchemasOrReferences::create()
            ->set('Pet', $pet)
            ->set('Pets', $pets)
            ->set('Error', $error)
        )
    );

echo json_encode($schema, JSON_PRETTY_PRINT);
```

This will output:

```json
{
    "info": {
        "title": "Swagger Petstore",
        "version": "1.0.0",
        "license": {
            "name": "MIT"
        }
    },
    "servers": [
        {
            "url": "petstore.swagger.io"
        }
    ],
    "paths": {
        "\/pets": {
            "get": {
                "summary": "List all pets",
                "operationId": "listPets",
                "tags": [
                    "pets"
                ],
                "responses": {
                    "200": {
                        "description": "A paged array of pets"
                    },
                    "default": {
                        "description": "Unexpected error"
                    }
                }
            }
        }
    },
    "components": {
        "schemas": {
            "Pet": {
                "required": [
                    "id",
                    "name"
                ],
                "properties": {
                    "id": {
                        "type": "integer",
                        "format": "int64"
                    },
                    "name": {
                        "type": "string"
                    },
                    "tag": {
                        "type": "string"
                    }
                }
            },
            "Pets": {
                "type": "array",
                "items": {
                    "required": [
                        "id",
                        "name"
                    ],
                    "properties": {
                        "id": {
                            "type": "integer",
                            "format": "int64"
                        },
                        "name": {
                            "type": "string"
                        },
                        "tag": {
                            "type": "string"
                        }
                    }
                }
            },
            "Error": {
                "required": [
                    "code",
                    "message"
                ],
                "properties": {
                    "code": {
                        "type": "integer",
                        "format": "int32"
                    },
                    "error": {
                        "type": "string"
                    }
                }
            }
        }
    }
}
```

This isn't the full example, but it gives an idea of the structure.

## Contributing
I'd love feedback and/or contributions, but they will probably need to target the generation library.  Head to [Gendarme](https://github.com/calcinai/gendarme) if this sounds like you.  Basic command for generating this library is 

```
./bin/gendarme generate --namespace "Calcinai\Strut" --root-class Swagger  ../strut/lib/schema.json ../strut/src/
```
