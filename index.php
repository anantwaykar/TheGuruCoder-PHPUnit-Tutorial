<?php

require_once 'vendor/autoload.php';

$pages = new \Controllers\Core\Web\Pages();

?>
<!DOCTYPE html>
<html>
<head>
    <title>TheGuruCoder PHPUnit Tutorial</title>
</head>
<body>

<h1><?php echo $pages->render(); ?></h1>

<pre><?php var_dump($pages->returnArray());?></pre>

<pre><?php echo ($pages->sumArray(array(1,4,5,5,'B','A','U'))); ?> </pre>



</body>
</html>