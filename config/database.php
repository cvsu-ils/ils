<?php
    return $database['database'] = [
        'app' => [
			'local' => [
				'DRIVER' => env('DB_DRIVER', "mysql"),
				'HOST' => env('DB_HOST', "localhost"),
				'PORT' => env('DB_PORT', "80"),
				'DATABASE' => env('DB_DATABASE', "database"),
				'USERNAME' => env('DB_USERNAME', "root"),
				'PASSWORD' => env('DB_PASSWORD', "")
			],
			'live' => [
				'DRIVER' => "mysql",
				'HOST' => "localhost",
				'PORT' => "",
				'DATABASE' => "database",
				'USERNAME' => "root",
				'PASSWORD' => ""
			]
        ],
        'ils' => [
			'local' => [
				'DRIVER' => "mysql",
				'HOST' => "localhost",
				'DATABASE' => "database",
				'USERNAME' => "root",
				'PASSWORD' => ""
			],
			'live' => [
				'DRIVER' => "mysql",
				'HOST' => "localhost",
				'DATABASE' => "database",
				'USERNAME' => "root",
				'PASSWORD' => ""
			]
		],
    ];
?>