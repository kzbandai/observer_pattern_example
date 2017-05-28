<?php

namespace Firework;

class Firework
{
    private $observers = [];

    public function addObserver(People $observer)
    {
        $this->observers[] = $observer;
    }

    public function explosion()
    {
        /** @var People $observer */
        foreach ($this->observers as $observer) {
            $observer->shout();
        }
    }
}
