<?php
/**
 * @author Patsura Dmitry https://github.com/ovr <talk@dmtry.me>
 */

namespace PhljUser;

use Phalcon\DiInterface;

class Module implements \Phalcon\Mvc\ModuleDefinitionInterface
{
    public function registerAutoloaders(DiInterface $dependencyInjector = null)
    {
        $loader = new \Phalcon\Loader();
        $loader->registerNamespaces(array(
            'PhljUser\Controller' => 'modules/user/controllers/',
            'PhljUser\Model' =>  'modules/user/models/',
        ));
        $loader->register();
    }

    public function registerServices(DiInterface $dependencyInjector)
    {
        $dispatcher = $dependencyInjector->get('dispatcher');
        $dispatcher->setDefaultNamespace('PhljUser\Controller');

        /**
         * @var $view \Phalcon\Mvc\View
         */
        $view = $dependencyInjector->get('view');
        $view->setLayout('index');
        $view->setViewsDir('modules/user/views/');
        $view->setLayoutsDir('../../common/layouts/');
        $view->setPartialsDir('../../common/partials/');

        $dependencyInjector->set('view', $view);
    }
}
