# Login And Register System - Adnotation

--- Config Class --- 
index.php echo Config::get('mysql/host') // 127.0.0.1
Config.php print_r($path);
index.php var_dump(Config::get('mysql/host')) // 127.0.0.1


--- Database ---
$_instance = null; - 
$_pdo -
$_query - 
$_error - 
$_count -  //$_

index.php 

Concept of DB class:
$users = DB::getInstance("SELECT username FROM users");

Second method: 
$users = DB:getInstance()->get('users', array('username', '=', 'alex'));

if($users->count()) {
	foreach($users as $user) {
		echo $user->username; // username represents table in database
	}
}
$db = new DB(); // return the error, because construct is as private modify
DB::getInstance(); // so I must create new method in DB class getInstance()

A little disclaimer:
If we have a public function and display a few a lot of time then we connect more and more again.

$db = new DB();
$db = new DB();
$db = new DB();
$db = new DB();
$db = new DB();

result: Connected, Connected, Connected, Connected, Connected

So then is useful private modify of access:  

DB::getInstance();
DB::getInstance();
DB::getInstance();
DB::getInstance();

The result is: Connected



