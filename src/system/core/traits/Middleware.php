<?php

trait Middleware
{

    /**
     * load middleware
     *
     * @param  string $middleware load file middleware
     * @return none
     */
    public function middleware($middleware)
    {
        $middleWarePath = APPPATH . '/middleware/' . $middleware . '.php';

        if (file_exists($middleWarePath)) {
            require_once($middleWarePath);

            if (!$middleware()) {
                throw new RuntimeException("Middleware must be return statement");
            }
        } else {
            throw new RuntimeException('Unable to load middleware file: ' . $middleWarePath);
        }
    }
}
