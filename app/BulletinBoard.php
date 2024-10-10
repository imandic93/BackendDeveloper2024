<?php

namespace App;

class BulletinBoard
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

    private function __construct()
    {}

    public function addNotification(string $notification)
    {
        $this->notifications[] = $notification;
    }

    public function getNotifications()
    {
        foreach ($this->notifications as $notification) {
            echo $notification, "\n";
        }
    }
}