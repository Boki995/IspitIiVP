<?php
    namespace App\Core;

    final class Router {
        private $routes = [];

        public function __construct() { }

        public function add(Route $route) {
            $this->routes[] = $route;
        }

        public function &find(string $method, string $url): Route {
            foreach ($this->routes as $route) {
                if ($route->matches($method, $url)) {
                    return $route;
                }
            }

            return null;
        }
    }
