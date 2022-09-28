<?php
    return $database['database'] = [
        'app' => [
			'local' => [
				'DB_DRIVER' => env('DB_DRIVER', "mysql"),
				'DB_HOST' => env('DB_HOST', "localhost"),
				'DB_PORT' => env('DB_PORT', "80"),
				'DB_DATABASE' => env('DB_DATABASE', "cvsu_ils"),
				'DB_USERNAME' => env('DB_USERNAME', "root"),
				'DB_PASSWORD' => env('DB_PASSWORD', "")
			],
			'live' => [
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_PORT' => "",
				'DB_DATABASE' => "cvsu_ils",
				'DB_USERNAME' => "libraryIT",
				'DB_PASSWORD' => "libraryIT1234"
			]
        ],
        'ils' => [
			'local' => [
				'DB_DRIVER' => env('DB_DRIVER', "mysql"),
				'DB_HOST' => env('DB_HOST', "localhost"),
				'DB_PORT' => env('DB_PORT', "80"),
				'DB_DATABASE' => env('DB_DATABASE', "cvsu_ils"),
				'DB_USERNAME' => env('DB_USERNAME', "root"),
				'DB_PASSWORD' => env('DB_PASSWORD', "")
			],
			'live' => [
				'DB_DRIVER' => "mysql",
				'DB_HOST' => "localhost",
				'DB_PORT' => "",
				'DB_DATABASE' => "cvsu_ils",
				'DB_USERNAME' => "libraryIT",
				'DB_PASSWORD' => "libraryIT1234"
			]
		],
    ];
?>