<?php
	try 
	{
		$phar = new Phar('minifp.phar',0,'minifp.phar');
		$phar->startBuffering();
		$defaultStub = $phar->createDefaultStub('index.php');
		$phar->addFile('index.php');
		$phar->buildFromDirectory(dirname(__FILE__) . '/includes');
		$stub = "#!/usr/bin/env php" . PHP_EOL . $defaultStub;
		$phar->setStub($stub);
		$phar->stopBuffering();
	}
	catch (Exception $e)
	{
		echo $e->getmessage();
	}
?>
