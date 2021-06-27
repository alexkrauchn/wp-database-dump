<?php
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);
ini_set('display_errors', 1);
set_time_limit(0);
if (isset($_GET['prepare'])) {
    require_once(dirname(__FILE__).'/../wp-blog-header.php');
    var_dump(ABSPATH);
    require_once(dirname(__FILE__).'/Mysqldump.php');
    var_dump(class_exists('Mysqldump'));
    try {
		$dump = new Mysqldump('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD );
		$output = $dump->start( dirname(__FILE__) . '/dbdump_' . time() . '.sql' );
	} catch ( \Exception $e ) {
		$output = 'mysqldump-php error: ' . $e->getMessage();
	}
	return $output;
}