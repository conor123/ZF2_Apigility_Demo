<?php
return array(
    'db' => array(
        'adapters' => array(
            'DBAdapter1' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'TestDbConnection\\V1' => 'httpbasicauthadapter',
            ),
        ),
    ),
);
