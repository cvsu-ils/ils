<?php
    return $auth = [
        'auth' => [
            'defaults' => [
                'auth' => '',
                'session' => 'ils_user'
            ],
            'google' => [
                'url' => '',
                'id' => '',
                'secret' => '',
                'redirect' => ''
            ],
		    'userClass' => "\IntegratedLibrarySystem\Core\Controllers\User"
        ]
    ]
?>