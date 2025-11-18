<?php

namespace App\Controller;

class HomeController
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function index(): string
    {
        $appName = $this->config['app_name'] ?? 'Demo';

        return "Welcome to {$appName}!";
    }
}
