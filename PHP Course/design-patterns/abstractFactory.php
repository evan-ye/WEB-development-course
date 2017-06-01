<?php

// AbstractFactory



/*
class AlienFootman{}
class AlienTransport{}
class AlienWeaponry{}

class ZombieFootman{}
class ZombieTransport{}
class ZombieWeaponry{}


$footman_1 = new AlienFootman();
$footman_2 = new AlienFootman();
$footman_3 = new AlienFootman();
$footman_4 = new AlienFootman();

$footman_5 = new ZombieFootman();
// и так для каждого юнита
$footman_1 -> attack($footman_5);
*/




interface Footman {}
interface Transport {}
interface Weaponry {}

class AlienFootman implements Footman {}
class AlienTransport implements Transport {}
class AlienWeaponry implements Weaponry {}
class ZombieFootman implements Footman {}
class ZombieTransport implements Transport {}
class ZombieWeaponry implements Weaponry {}

abstract class AbstractFactoryRace {
    abstract public function createFootman();
    abstract public function createTransport();
    abstract public function createWeaponry();
}


class ZombieFactory extends AbstractFactoryRace {
    /**
     * @return Footman
     */

    public function createFootman() {
        return new ZombieFootman();
    }

    /**
     * @return Transport
     */

    public function createTransport() {
        return new ZombieTransport();
    }

    /**
     * @return Weaponry
     */

    public function createWeaponry() {
        return new ZombieWeaponry();
    }
}

class AlienFactory extends AbstractFactoryRace {
    /**
     * @return Footman
     */

    public function createFootman() {
        return new AlienFootman();
    }

    /**
     * @return Transport
     */

    public function createTransport() {
        return new AlienTransport();
    }

    /**
     * @return Weaponry
     */

    public function createWeaponry() {
        return new AlieneWeaponry();
    }
}


























