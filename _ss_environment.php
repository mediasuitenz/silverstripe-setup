<?php
/*
 * This file gives SilverStripe information about the environment that it's running in
 */

ini_set('date.timezone', 'Pacific/Auckland');

/* Which kind of environment: dev, test, live */
define('SS_ENVIRONMENT_TYPE', 'dev');

/* This defines a default database user */
define('SS_DATABASE_SERVER', 'localhost');
define('SS_DATABASE_NAME', 'development');
define('SS_DATABASE_USERNAME', 'user');
define('SS_DATABASE_PASSWORD', 'password');


define('SS_DEFAULT_ADMIN_USERNAME', 'admin');
define('SS_DEFAULT_ADMIN_PASSWORD', 'password');

global $_FILE_TO_URL_MAPPING;
$baseDir = realpath(dirname(getcwd()));
$_FILE_TO_URL_MAPPING[$baseDir] = 'http://localhost';

define('SS_STATIC_BASE_URL', 'http://localhost/');

define('SS_ERROR_LOG', __DIR__ . '/silverstripe.error.log');

define('SS_OUTBOUND_PROXY', 'gateway.cwp.govt.nz');
define('SS_OUTBOUND_PROXY_PORT', 8888);

/* Provide the CWP environment */
define('CWP_ENVIRONMENT', 'prod');


/* Document converter credentials */
define('DOCVERT_USERNAME', 'user');
define('DOCVERT_PASSWORD', 'pass');
define('DOCVERT_URL', 'http://services.cwp.govt.nz:8880');


/* SOLR credentials */
define('SOLR_SERVER', 'user:pass@services.cwp.govt.nz');
define('SOLR_PORT', '80');
define('SOLR_MODE', 'webdav');
define('SOLR_PATH', '/solr');
define('SOLR_REMOTEPATH', '/solr');
define('SOLR_INDEXSTORE_PATH', '/solr/webdav');
