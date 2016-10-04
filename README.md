# Strut
Yet another OpenAPI/Swagger manipulation library!

This library is almost 100% generated code by [Gendarme](https://github.com/calcinai/gendarme). The reasoning behind this is that all the infomation required to manipulate a schema outlined in the specification.

## Installation
via composer
```
composer require calcinai/strut
```

## Usage
The test case for this is the OpenAPI petstore, the following is an example of how that schema would be programatically generated:

```php
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


echo json_encode($schema, JSON_PRETTY_PRINT);
```

This will output:

```json
{
    "swagger": "2.0",
    "info": {
        "title": "Swagger Petstore",
        "version": "1.0.0",
        "license": {
            "name": "MIT"
        }
    },
    "host": "petstore.swagger.io",
    "basePath": "\/v1",
    "schemes": [
        "http"
    ],
    "consumes": [
        "application\/json"
    ],
    "produces": [
        "application\/json"
    ],
    "paths": {
        "\/pets": {
            "get": {
                "summary": "List all pets",
                "operationId": "listPets",
                "tags": [
                    "pets"
                ],
                "parameters": [
                    {
                        "in": "query",
                        "collectionFormat": "csv",
                        "name": "Limit",
                        "description": "How many items to return at one time (max 100)",
                        "required": false,
                        "type": "integer",
                        "format": "int32"
                    }
                ],
                "responses": {
                    "200": {
                        "description": "pet response"
                    }
                }
            }
        }
    }
}
```

This isn't the full example, but it gives an idea of the structure.

## Contributing
I'd love feedback and/or contrubutions, but they will probably need to target the generation library.  Head to [Gendarme](https://github.com/calcinai/gendarme) if this sounds like you.  Basic command for generating this library is 

```
./bin/gendarme generate --namespace "Calcinai\Strut" --root-class Swagger  ../strut/lib/schema.json ../strut/src/
```

There's still a bit of work to be done, but it is already in a functional state.
