<?php

	$param = explode('/', $_GET['p']);
	$controller = $param[0];
	$action = $param[1];

	function erreur404()
	{
		require('404.html');
	}

	if(isset($_GET['p']))
	{
		if($param[0] == 'table')
		{
			if(isset($param[1]))
			{
				$table = $param[1];
				require('tables.php');
			}
			else
			{
				erreur404();
				echo "on passe ici";
			}
		}
		else
			require('views/' . $controller . '/' . $action . 'php');
	}
	else
	{
		erreur404();
		echo "on passe la";
	}
		