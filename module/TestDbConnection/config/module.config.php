<?php
return array(
    'router' => array(
        'routes' => array(
            'test-db-connection.rest.test' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test[/:test_id]',
                    'defaults' => array(
                        'controller' => 'TestDbConnection\\V1\\Rest\\Test\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test-db-connection.rest.test',
        ),
    ),
    'zf-rest' => array(
        'TestDbConnection\\V1\\Rest\\Test\\Controller' => array(
            'listener' => 'TestDbConnection\\V1\\Rest\\Test\\TestResource',
            'route_name' => 'test-db-connection.rest.test',
            'route_identifier_name' => 'test_id',
            'collection_name' => 'test',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'TestDbConnection\\V1\\Rest\\Test\\TestEntity',
            'collection_class' => 'TestDbConnection\\V1\\Rest\\Test\\TestCollection',
            'service_name' => 'test',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'TestDbConnection\\V1\\Rest\\Test\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'TestDbConnection\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.test-db-connection.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'TestDbConnection\\V1\\Rest\\Test\\Controller' => array(
                0 => 'application/vnd.test-db-connection.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'TestDbConnection\\V1\\Rest\\Test\\TestEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test-db-connection.rest.test',
                'route_identifier_name' => 'test_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'TestDbConnection\\V1\\Rest\\Test\\TestCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test-db-connection.rest.test',
                'route_identifier_name' => 'test_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'TestDbConnection\\V1\\Rest\\Test\\TestResource' => array(
                'adapter_name' => 'DBAdapter1',
                'table_name' => 'test',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'TestDbConnection\\V1\\Rest\\Test\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'TestDbConnection\\V1\\Rest\\Test\\Controller' => array(
            'input_filter' => 'TestDbConnection\\V1\\Rest\\Test\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'TestDbConnection\\V1\\Rest\\Test\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '50',
                        ),
                    ),
                ),
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'TestDbConnection\\V1\\Rest\\Test\\Controller' => array(
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ),
            ),
        ),
    ),
);
