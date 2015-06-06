<?


//short_open_tag = On  output_buffering = On 

session_start();

header("Cache-Control: no-store, no-cache, must-revalidate");

ini_set('display_errors', 1);
error_reporting(~0);

$mysqli = new mysqli('localhost', 'root', '', 'projectdb'); 
$mysqli->set_charset('utf8');

$page_title;

$pictires_dir = 'images/Uploaded/';
$pictires_prefix = '';