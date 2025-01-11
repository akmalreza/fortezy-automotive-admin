<?php

if (!function_exists('checkMatchedRoute')) {
    function checkMatchedRoute(string $route): bool
    {
        return request()->segment(1) === $route;
    }
}