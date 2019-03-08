<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'TopAsiaFx',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'g',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(

		'user'=>array(
			'class'=>'application.components.EWebUser',//added according to authentication tutorial
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'appendParams'=>true,
			'showScriptName'=>false,
			'caseSensitive'=>false, 
			'rules'=>array(
			    '<action:about>'=>'site/about',
			    '<action:contact>'=>'site/contact',
			    '<action:404>'=>'site/404',
			    '<action:best-forex-broker>/<url>'=>'site/review',
			    '<action:login>'=>'site/login',
			    '<action:logout>'=>'site/logout',
			    '<action:forex-deposit-bonuses>'=>'site/depositbonus',
			    '<action:forex-deposit-bonuses>/<url>'=>'site/depositbonus',
			    '<action:forex-nodeposit-bonuses>'=>'site/nodepositbonus',
			    '<action:forex-nodeposit-bonuses>/<url>'=>'site/nodepositbonus',
			    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
			    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			    '<controller:\w+>/<action:\w+>/<url>'=>'<controller>/<action>',
			    '<action:blogs>'=>'site/blogs',
			    '<action:blogs>/<url>'=>'site/blogs',			    
			),
		),

		/*'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'caseSensitive'=>false, 
			'rules'=>array(
			    'login'=>'site/login',
			    'site/user/create'=>'user/create',
			    'site/user/forgotpassword'=>'user/forgotpassword',
			    '<controller:\w+>/<id:\d+>'=>'<controller>/view',
			    '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
			    '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),*/
		

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'contact@topasiafx.com',
	),
);
