<?php

// On définit une fonction d'autoloading afin de ne pas s'embêter inutilement avec les includes de classes
function __autoload($classname)
{
    $filename = $classname .".php";
    require_once("phar://minifp/" . $filename);
}

/* Cas où minifp est appelé sans commande */
if($argc == 1)
{
	echo 'Précisez le nom de la commande de minifp que vous voulez utilisez' . PHP_EOL;
	echo 'Utilisez la commande minifp --help pour voir les commandes disponibles' . PHP_EOL;
}
/* Cas où minifp est appelé avec une commande */
else if($argc == 2)
{
	switch($argv[1])
	{
		case "--help":
			Help::message();
		break;

		case '--model':
		case '--view':
		case '--new':
			echo 'paramètres incorrect pour la commande ' . $argv[1] . PHP_EOL;
		break;

		default:
			echo ShellColor::colorize('Commande inconnue','R') . PHP_EOL;
		break;
	}
}
else if($argc > 2)
{
	switch($argv[1])
	{
		case '--new':
			Project::create($argv[2]);			
		break;

		case '--model':
			if($argc < 4)
			{
				echo 'nombre de paramètres incorrect' . PHP_EOL;
			}
			switch($argv[3])
			{
				case "-yaml":
					echo ShellColor::colorize('Le parsing du YAML n\'est pas encore implémenté','J');
				break;
				case '-json':
					if(isset($argv[4]))
						SPDO::getInstance()->createColumnsJSON($argv[4],$argv[2]);
					else
						echo ShellColor::colorize('Vous devez donner le nom du fichier à utiliser','J') . PHP_EOL;
				break;
				case '-csv':
				break;
				default:
					SPDO::getInstance()->createColumns($argv);
				break;
			}
		break;
		case '--data':
			if($argc < 4)
			{
				echo 'nombre de paramètres incorrect' . PHP_EOL;
			}
			switch($argv[3])
			{
				case "-yaml":
					echo ShellColor::colorize('Le parsing du YAML n\'est pas encore implémenté','J') . PHP_EOL;
				break;
				case '-json':
					if(isset($argv[4]))
						SPDO::getInstance()->insertJSON($argv[4],$argv[2]);
					else
						echo ShellColor::colorize('Vous devez donner le nom du fichier à utiliser','J') . PHP_EOL;
				break;
				case '-csv':
				break;
				default:
					SPDO::getInstance()->insert($argv);
				break;
			}
		break;
		case '--vue':
			if($argv[2] == "-liste")
				View::displayAllTAbles();
			else
			{
				if($argc < 4)
				{
					echo 'nombre de paramètres incorrect' . PHP_EOL;
				}
				else
				{
					switch($argv[3])
					{
						case "-montre":
							if(isset($argv[4]))
								View::showTable($argv[2],$argv[4]);
							else
								View::showTable($argv[2]);
						break;
						case "-uri":
							View::showURI($argv[2]);
						break;
						case "-navigue":
							View::browseTable($argv[2]);
						break;
						default:
							echo ShellColor::colorize("Cette option n'existe pas",'J') . PHP_EOL;
						break;
					}
				}
			}
		break;
		case '--controle':
			switch($argv[2])
			{
				case "-sauve":
					Controller::MySQLDump();
				break;
				case "-restaure":
				{
					if($argc < 4)
					{
						echo 'nombre de paramètres incorrect pour la commande ' . $argv[2] . PHP_EOL;
						echo 'Syntaxe: -restaure nomFichier' . PHP_EOL;
					}
					else
						Controller::MySQLImport($argv[3]);
				}
				break;
				case "-simule":
					if($argc < 5)
					{
						echo 'nombre de paramètres incorrect pour la commande ' . $argv[2] . PHP_EOL;
						echo 'Syntaxe: -simule nomTable nombreEnregistrements' . PHP_EOL;
					}
					else
						Controller::simule($argv[3],$argv[4]);
				break;
				default:
					echo ShellColor::colorize("Cette option n'existe pas",'J') . PHP_EOL;
				break;
			}				
		break;
		default:
			echo ShellColor::colorize("Cette commande n'existe pas",'J') . PHP_EOL;
		break;
	}
}
echo PHP_EOL;