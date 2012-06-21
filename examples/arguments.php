<?php

require(__DIR__.'/../docopt.php');

$doc = "
Process FILE and optionally apply correction to either left-hand side or
right-hand side.

Usage: arguments_example.py [-vqrh] [FILE] ...
       arguments_example.py (--left | --right) CORRECTION FILE

Arguments:
  FILE        optional input file
  CORRECTION  correction angle, needs FILE, --left or --right to be present

Options:
  -h --help
  -v       verbose mode
  -q       quiet mode
  -r       make report
  --left   use left-hand side
  --right  use right-hand side

";

try {
    $arguments = Docopt\docopt($doc);
    var_dump($arguments);
}
catch (Docopt\ExitException $ex) {
    echo $ex->getMessage();
}