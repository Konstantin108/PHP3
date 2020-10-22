<?php

$dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('../php3/directory1/'), FALSE);

foreach ($dir as $file)
{
   echo '<pre>';
   echo $file;
}
