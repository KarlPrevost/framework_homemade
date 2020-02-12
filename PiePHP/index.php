<pre>
    <?= var_dump($_POST, $_GET, $_SERVER);?>
</pre>
<?php
define('BASE_URI', "/PiePHP");
define('URI', substr($_SERVER["REQUEST_URI"], strlen(BASE_URI)));
echo "<pre>";
var_dump(URI);
echo "</pre>";
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));
$app = new Core\Core();
$app->run();