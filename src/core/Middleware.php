<?php

namespace app\core;

interface Middleware
{
    public function handle(Request $request, callable $next):Response;
}