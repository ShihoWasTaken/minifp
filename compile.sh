#!/bin/bash

# On lance le script PHP pour compiler les sources en PHAR
\php compile.php

# On renomme l'archive .phar sans extension
\mv minifp.phar minifp

# On rends cette archive executable
\chmod +x minifp

# On lance minifp
./minifp