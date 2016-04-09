#!/bin/bash

# On lance le script PHP pour compiler les sources en PHAR
echo "Compilation des sources en archive PHAR..."
\php compile.php
echo "Compilation terminée !"

# On renomme l'archive .phar sans extension
\mv minifp.phar minifp

# On rends cette archive executable
\chmod +x minifp

# On le déplace pour l'utiliser de manière globale peu importe le repertoire où l'on se trouve
echo "Déplacement du programme minifp dans /user/bin"
sudo \mv minifp /usr/bin/minifp
echo "Minifp est maintenant installé sur votre machine"
echo "Vous pouvez le lancer via la commande minifp"