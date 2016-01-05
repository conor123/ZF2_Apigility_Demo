<?php
return array(
    'service_manager' => array(
        'factories' => array(
            'Test\\V1\\Rest\\TestService\\TestServiceResource' => 'Test\\V1\\Rest\\TestService\\TestServiceResourceFactory',
        ),
    ),
    'router' => array(
        'routes' => array(
            'test.rest.test-service' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/test-service[/:test_service_id]',
                    'defaults' => array(
                        'controller' => 'Test\\V1\\Rest\\TestService\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'test.rest.test-service',
        ),
    ),
    'zf-rest' => array(
        'Test\\V1\\Rest\\TestService\\Controller' => array(
            'listener' => 'Test\\V1\\Rest\\TestService\\TestServiceResource',
            'route_name' => 'test.rest.test-service',
            'route_identifier_name' => 'test_service_id',
            'collection_name' => 'test_service',
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
            'entity_class' => 'Test\\V1\\Rest\\TestService\\TestServiceEntity',
            'collection_class' => 'Test\\V1\\Rest\\TestService\\TestServiceCollection',
            'service_name' => 'TestService',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'Test\\V1\\Rest\\TestService\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'Test\\V1\\Rest\\TestService\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'Test\\V1\\Rest\\TestService\\Controller' => array(
                0 => 'application/vnd.test.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'Test\\V1\\Rest\\TestService\\TestServiceEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.test-service',
                'route_identifier_name' => 'test_service_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'Test\\V1\\Rest\\TestService\\TestServiceCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'test.rest.test-service',
                'route_identifier_name' => 'test_service_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-content-validation' => array(
        'Test\\V1\\Rest\\TestService\\Controller' => array(
            'input_filter' => 'Test\\V1\\Rest\\TestService\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'Test\\V1\\Rest\\TestService\\Validator' => array(
            0 => array(
                'required' => true,
                'validators' => array(),
                'filters' => array(),
                'name' => 'Name',
            ),
        ),
    ),
);
