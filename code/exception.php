<?php
class TableFlipException extends Exception {}

function （╯°□°）╯︵ ┻━┻() {
  throw new TableFlipException('ruh roh');
}

set_exception_handler(function () { echo "I got one!"; });

（╯°□°）╯︵ ┻━┻();
