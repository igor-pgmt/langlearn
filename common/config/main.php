<?php
return [
	'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
	'components' => [

		'assetManager' => [
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'jsOptions' => [ 'position' => \yii\web\View::POS_HEAD ],
				],
			],
		],
		'i18n' => [
			'translations' => [
				'app*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					//'basePath' => '@app/messages',
					//'sourceLanguage' => 'en-US',
					'fileMap' => [
						'app' => 'app.php',
						'app/error' => 'error.php',
					],
				],
				'frontend*' => [
					'class' => 'yii\i18n\PhpMessageSource',
					'basePath' => '@frontend/messages',
					'sourceLanguage' => 'en-US',
					'fileMap' => [
						'app' => 'app.php',
						'app/error' => 'error.php',
					],
				],
			],
		],
		'urlManager' => [
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
	],
	'modules' => [
		'gii' => [
			'class' => 'yii\gii\Module',
			'allowedIPs' => ['*'] // adjust this to your needs
		],
	]
];


