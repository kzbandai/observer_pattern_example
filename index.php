<?php

include __DIR__ . '/People.php';
include __DIR__ . '/Boy.php';
include __DIR__ . '/Girl.php';
include __DIR__ . '/Firework.php';

use Firework\Firework;
use Firework\Girl;
use Firework\Boy;

$firework = new Firework();

$boy = new Boy();
$girl = new Girl();

$firework->addObserver($boy);
$firework->addObserver($girl);

$firework->explosion();
