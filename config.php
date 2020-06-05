<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('mysql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('127.0.0.1');
$CFG->dbname    = getenv('moodle');
$CFG->dbuser    = getenv('o-class-admin');
$CFG->dbpass    = getenv('oclassadmin');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('3306'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv('WWWROOT');
$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
