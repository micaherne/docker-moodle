<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'postgres';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'moodle';
$CFG->dbpass    = 'm@0dl3ing';
$CFG->prefix    = 'a_';
$CFG->dboptions = array (
  'dbpersist' => 0,
);

$CFG->wwwroot   = 'http://localhost:8000';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

$CFG->phpunit_dataroot  = '/var/www/moodledata/phpunit';
$CFG->phpunit_prefix = 't_';



define('PHPUNIT_LONGTEST', true);

define('TEST_CACHESTORE_MEMCACHE_TESTSERVERS', "memcached0:11211\nmemcached1:11211");

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
