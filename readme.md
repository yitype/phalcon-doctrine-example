# phalcon-doctrine-example

Phalcon Doctrine Integration

Skeleton application for phalcon integrated with doctrine.

Dependencies

- [https://github.com/OpsKitchen/ok_php_base](https://github.com/OpsKitchen/ok_php_base)

## Doctrine Console

### 1. Reverse Engineering

````bash
vendor/bin/doctrine orm:convert-mapping --from-database --namespace Example\\Lib\\Entities\\ -- yml config/doctrine
````

### 2. Entity Generation

````bash
vendor/bin/doctrine orm:generate-entities -- classes
vendor/bin/doctrine orm:generate-entities --generate-annotations=true -- classes 
````
