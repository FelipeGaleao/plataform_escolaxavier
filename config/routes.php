<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    $routes->connect('/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/cadastro', ['controller' => 'Users', 'action' => 'cadastro']);
    $routes->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);

    /* Matriculas */
    $routes->connect('/matriculas', ['controller' => 'Enrollments', 'action' => 'index']);
    $routes->connect('/matriculas/novo', ['controller' => 'Enrollments', 'action' => 'add']);
    $routes->connect('/matriculas/editar/*', ['controller' => 'Enrollments', 'action' => 'edit']);
    $routes->connect('/matriculas/apagar/*', ['controller' => 'Enrollments', 'action' => 'delete']);

    /* Avaliacoes */
    $routes->connect('/avaliacoes', ['controller' => 'Grades', 'action' => 'index']);
    $routes->connect('/avaliacoes/novo', ['controller' => 'Grades', 'action' => 'add']);
    $routes->connect('/avaliacoes/editar/*', ['controller' => 'Grades', 'action' => 'edit']);
    $routes->connect('/avaliacoes/apagar/*', ['controller' => 'Grades', 'action' => 'delete']);

    /* Materias */
    $routes->connect('/materias', ['controller' => 'Subjects', 'action' => 'index']);
    $routes->connect('/materias/novo', ['controller' => 'Subjects', 'action' => 'add']);
    $routes->connect('/materias/editar/*', ['controller' => 'Subjects', 'action' => 'edit']);
    $routes->connect('/materias/apagar/*', ['controller' => 'Subjects', 'action' => 'delete']);

    /* Escolas */
    $routes->connect('/escolas', ['controller' => 'Schools', 'action' => 'index']);
    $routes->connect('/escolas/novo', ['controller' => 'Schools', 'action' => 'add']);
    $routes->connect('/escolas/editar/*', ['controller' => 'Schools', 'action' => 'edit']);
    $routes->connect('/escolas/apagar/*', ['controller' => 'Schools', 'action' => 'delete']);

    /* Livros diários */
    $routes->connect('/diarios', ['controller' => 'Dailybooks', 'action' => 'index']);
    $routes->connect('/diarios/novo', ['controller' => 'Dailybooks', 'action' => 'add']);
    $routes->connect('/diarios/editar/*', ['controller' => 'Dailybooks', 'action' => 'edit']);
    $routes->connect('/diarios/apagar/*', ['controller' => 'Dailybooks', 'action' => 'delete']);


    /* Cursos  */
    $routes->connect('/cursos', ['controller' => 'Courses', 'action' => 'index']);
    $routes->connect('/cursos/novo', ['controller' => 'Courses', 'action' => 'add']);
    $routes->connect('/cursos/editar/*', ['controller' => 'Courses', 'action' => 'edit']);
    $routes->connect('/cursos/apagar/*', ['controller' => 'Courses', 'action' => 'delete']);

    /* Estudantes  */
    $routes->connect('/estudantes', ['controller' => 'Students', 'action' => 'index']);
    $routes->connect('/estudantes/novo', ['controller' => 'Students', 'action' => 'add']);
    $routes->connect('/estudantes/editar/*', ['controller' => 'Students', 'action' => 'edit']);
    $routes->connect('/estudantes/apagar/*', ['controller' => 'Students', 'action' => 'delete']);


    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);






    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *
     * ```
     * $routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);
     * $routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);
     * ```
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
