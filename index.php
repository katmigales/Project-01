<?php

/**
 * @author Katrina Bartzen
 * @category ANM 293
 * Project 01
 * Learning to use Git
 */

ob_start();

echo "My First Project with Output Buffering";

$v = ob_get_contents();

ob_end_clean();

echo $v;