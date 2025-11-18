<?php

// Un mock sencillo de HomeController para propósitos de prueba
class MockHomeController
{
    private array $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    public function index(): string
    {
        // Retorna un string fijo para simular el comportamiento real
        return "Mocked response";
    }
}

// Ejemplo de uso del mock
$mockConfig = ['app_name' => 'Mock App'];
$mockController = new MockHomeController($mockConfig);

if ($mockController->index() === 'Mocked response') {
    echo "Mock funciona correctamente\n";
} else {
    echo "Mock falló\n";
}