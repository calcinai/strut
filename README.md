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
$swagger = \Calcinai\Strut\Swagger::create($schema);
print_r($swagger);
```

This will produce (snipped):

```
Swagger Object
(
  [data:protected] => Array
    (
      [swagger] => 2.0
      [info] => Calcinai\Strut\Definitions\Info Object
        (
          [data:protected] => Array
            (
              [description] => This is a sample server Petstore server.  You can find out more about Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).  For this sample, you can use the api key `special-key` to test the authorization filters.
              [version] => 1.0.0
              [title] => Swagger Petstore
              [termsOfService] => http://swagger.io/terms/
              [contact] => Calcinai\Strut\Definitions\Contact Object
                (
                  [data:protected] => Array
                    (
                      [email] => apiteam@swagger.io
                    )

                )

              [license] => Calcinai\Strut\Definitions\License Object
                (
                  [data:protected] => Array
                    (
                      [name] => Apache 2.0
                      [url] => http://www.apache.org/licenses/LICENSE-2.0.html
                    )

                )

            )

        )

      [host] => petstore.swagger.io
      [basePath] => /v2
      [tags] => Array
        (
          [0] => Calcinai\Strut\Definitions\Tag Object
            (
              [data:protected] => Array
                (
                  [name] => pet
                  [description] => Everything about your Pets
                  [externalDocs] => Calcinai\Strut\Definitions\ExternalDocs Object
                    (
                      [data:protected] => Array
                        (
                          [description] => Find out more
                          [url] => http://swagger.io
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
I'd love feedback and/or contributions, but they will probably need to target the generation library.  Head to [Gendarme](https://github.com/calcinai/gendarme) if this sounds like you.  Basic command for generating this library is 

```
./bin/gendarme generate --namespace "Calcinai\Strut" --root-class Swagger  ../strut/lib/schema.json ../strut/src/
```
