<?php

/*
	Installer
*/

$fields = array('host', 'user', 'pass', 'db', 'name', 'description', 'theme');
$post = array();

foreach($fields as $field) {
	$post[$field] = isset($_POST[$field]) ? $_POST[$field] : false;
}

if(empty($post['db'])) {
	$errors[] = 'Please specify a database name';
}

if(empty($post['host'])) {
	$errors[] = 'Please specify a database host';
}

if(empty($post['name'])) {
	$errors[] = 'Please enter a site name';
}

if(empty($post['theme'])) {
	$errors[] = 'Please select a theme';
}

// test database
if(empty($errors)) {
	try {
		$dsn = 'mysql:dbname=' . $post['db'] . ';host=' . $post['host'];
		$dbh = new PDO($dsn, $post['user'], $post['pass']);
	} catch(PDOException $e) {
		$errors[] = $e->getMessage();
	}
}

// create config file
if(empty($errors)) {
	$template = file_get_contents('../config.default.php');
	
	$search = array(
		"'host' => 'localhost'",
		"'username' => 'root'",
		"'password' => ''",
		"'name' => 'anchorcms'",
		"'sitename' => 'My First Anchor Site'",
		"'description' => 'This is my very cool Anchor CMS site, written in PHP5 and MySQL.'",
		"'theme' => 'default'"
	);
	$replace = array(
		"'host' => '" . $post['host'] . "'",
		"'username' => '" . $post['user'] . "'",
		"'password' => '" . $post['pass'] . "'",
		"'name' => '" . $post['db'] . "'",
		"'sitename' => '" . $post['name'] . "'",
		"'description' => '" . $post['description'] . "'",
		"'theme' => '" . $post['theme'] . "'"
	);
	$config = str_replace($search, $replace, $template);

	if(file_put_contents('../config.php', $config) === false) {
		$errors[] = 'Failed to create config file';
	}
}

// create db
if(empty($errors)) {
	$sql = file_get_contents('anchor.sql');
	
	try {
		$dbh->beginTransaction();
		$dbh->exec($sql);
		$dbh->commit();
	} catch(PDOException $e) {
		$errors[] = $e->getMessage();
		
		// rollback any changes
		if($dbh->inTransaction()) {
			$dbh->rollBack();
		}
	}
}

// output response
header('Content-Type: text/plain');

if(empty($errors)) {
	//no errors we're all gooood
	echo 'good';
} else {
	echo implode(', ', $errors);
}
