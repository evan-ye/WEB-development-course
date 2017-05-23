<?php

// Adapter


// Имплементация класса Twitter
class Twitter {

    public function __construct() {
        // Your Code here //
    }

    public function sendTweet($msg) {
        // Posting to Twitter //
        echo $msg;
    }
}
/*
$twitter = new Twitter();
$twitter->send('Posting on Twitter');
*/

// Простой интерфейс для каждого адаптера, который будет создан
interface socialAdapter {
    public function send($msg);
}


class twitterAdapter implements socialAdapter {

    private $twitter;

    public function __construct(Twitter $twitter) {
        $this->twitter = $twitter;
    }

    public function send($msg) {
        $this->twitter->sendTweet($msg);
    }
}


$twitter = new twitterAdapter(new Twitter());
$twitter->send('Posting on Twitter');



class Facebook {

    public function __construct() {
        // Ваш код //
    }

    public function updateStatus($msg) {
        // Пост на Facebook //
        echo $msg;
    }
}


// Адаптер Facebook
class facebookAdapter implements socialAdapter {

    private $facebook;

    public function __construct(Facebook $facebook) {
        $this->facebook = $facebook;
    }

    public function send($msg) {
        $this->facebook->updateStatus($msg);
    }
}


// клиентский код
$facebook = new facebookAdapter(new Facebook());
$facebook->send('Posting to Facebook');



























