<?php
    return $auth = [
        'auth' => [
            'defaults' => [
                'auth' => 'google',
                'session' => 'ils_user'
            ],
            'google' => [
                'url' => '',
                'id' => '870154356750-sssaq3v7ofrk8ec221vmvmnuqhtmmp9k.apps.googleusercontent.com',
                'secret' => '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',
                'redirect' => 'http://localhost/staging/cvsu_ils/?view=confirm'
            ],
		    'userClass' => "\IntegratedLibrarySystem\Core\Controllers\User"
        ]
    ]
?>