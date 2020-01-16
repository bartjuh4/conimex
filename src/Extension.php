<?php

declare(strict_types=1);

namespace BobdenOtter\Conimex;

use Bolt\Extension\BaseExtension;
use Symfony\Component\Routing\Route;

class Extension extends BaseExtension
{
    /**
     * Return the full name of the extension
     */
    public function getName(): string
    {
        return 'Conimex - Content, Import, Export';
    }

    /**
     * Add the routes for this extension.
     *
     * Note: These are cached by Symfony. If you make modifications to this, run
     * `bin/console cache:clear` to ensure your routes are parsed.
     */
//    public function getRoutes(): array
//    {
//        return [
//            'reference' => new Route(
//                '/extensions/reference/{name}',
//                ['_controller' => 'BobdenOtter\Conimex\Controller::index'],
//                ['name' => '[a-zA-Z0-9]+']
//            ),
//        ];
//    }

    /**
     * Ran automatically, if the current request is in a browser.
     * You can use this method to set up things in your extension.
     *
     * Note: This runs on every request. Make sure what happens here is quick
     * and efficient.
     */
    public function initialize($cli = false): void
    {
//        $this->addWidget(new ReferenceWidget());
//
//        $this->addTwigExtension(new Twig());
//
//        $this->addTwigNamespace('conimex');
//
//        $this->addListener('kernel.response', [new EventListener(), 'handleEvent']);
    }

    /**
     * Ran automatically, if the current request is from the command line (CLI).
     * You can use this method to set up things in your extension.
     *
     * Note: This runs on every request. Make sure what happens here is quick
     * and efficient.
     */
    public function initializeCli(): void
    {
    }
}
