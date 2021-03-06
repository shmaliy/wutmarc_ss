<?php

include('../public/cms/db.php');

/**
 * Конфигурационный файл
 */


// Физический путь к корню сайта
$root = dirname(dirname(dirname(__FILE__)));
$root .= '/';

//TODO move this into abstract model
$interface = array(
	"MORE_NEWS" => array(
			"ru" => 'все новости',
			"en" => 'more news',
			"de" => 'mehr news',
	),
	"ALL_JOBS" => array(
			"ru" => 'все вакансии',
			"en" => 'all jobs',
			"de" => 'alle jobs',
	),
	"CHOOSE_LANG" => array(
			"ru" => 'Выберите язык:',
			"en" => 'Choose a language:',
			"de" => 'Wählen Sie eine Sprache:',
	),
	"CHOOSE_SITE" => array(
			"ru" => 'Сайты компании:',
			"en" => 'Sites of the company:',
			"de" => 'Websites des Unternehmens:',
	)
);
error_reporting(1);
// Масив настроек
$config = array(
    /*'s_db' => array(
            'adapter' => 'PDO_SQLITE',
            'params' => array(
                'dbname'  => $root . 'data/db/ironsearch_db.db',
                
            )
        ),   
    */
	'interface' => $interface,
    'phpSettings' => array(
            'display_startup_errors' => 1,
            'display_errors' => 1,
            'date.timezone' => "Europe/Kiev"
    ),
    'includePaths' => array(
            'library' => $root . 'library'
    ),
    'bootstrap' => array(
            'path' => $root . 'application/Bootstrap.php',
            'class' => 'Bootstrap'
    ),
    'appnamespace' => 'Application',
    'resources' => array(
        'frontController' => array(
            'controllerDirectory' => $root . 'application/controllers',
            'params' => array(
                'displayExceptions' => 1
            ),
            'moduleDirectory' => $root . 'application/modules',
        ),
        'modules' => array(),
        'layout' => array(
            'layoutPath' => $root . 'application/layouts/scripts/',
            'layout' => 'layout',
            'viewSuffix' => 'php3'
        ),
        'view' => array(
            'encoding' => 'utf-8',
        ),
        'db' => array(
            'adapter' => 'PDO_MYSQL',
            'params' => array(
                'dbname' => $cms_config_db,
			    'host'     => $cms_config_host,
			    'username' => $cms_config_user,
			    'password' => $cms_config_password,
			    'driver_options' => array(
					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
				)
            )
        ),
        
    )
);
