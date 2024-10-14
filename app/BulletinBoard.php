<?php

namespace App;

use SplObjectStorage;
use SplObserver;
use SplSubject;

class BulletinBoard implements SplSubject
{
    private static ?BulletinBoard $instance = null;

    private array $notifications = [];

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct(private SplObjectStorage $observers = new SplObjectStorage())
    {}

    public function addNotification(string $notification)
    {
        $this->notifications[] = $notification;
        $this->notify();
    }

    public function getLastNotification(): string
    {
        if (empty($this->notifications)) {
            return 'No notifications!';
        }

        return $this->notifications[count($this->notifications) - 1];
    }

    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}