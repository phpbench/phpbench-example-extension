<?php

namespace Acme\PhpBench\Extension\Example;

use PhpBench\DependencyInjection\ExtensionInterface;
use Acme\PhpBench\Extension\Example\Command\FooCommand;
use PhpBench\DependencyInjection\Container;
use Acme\PhpBench\Extension\Example\Progress\FooLogger;

class ExampleExtension implements ExtensionInterface
{
    public function getDefaultConfig()
    {
        return [
            'acme.example.message' => 'Hello World',
            'acme.progress.character' => 'x'
        ];
    }

    public function load(Container $container)
    {
        $container->register('acme.example.foo', function (Container $container) {
            return new FooCommand(
                $container->getParameter('acme.example.message')
            );
        }, ['console.command' => []]);

        $container->register('acme.example.progress_logger', function (Container $container) {
            return new FooLogger($container->get('benchmark.time_unit'));
        }, ['progress_logger' => ['name' => 'foo']]);

    }

    public function build(Container $container)
    {
    }
}
