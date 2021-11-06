<?php
function get_route_controller()
{
    $action=app('request')->route()->getAction();
    if (isset($action['controller']))
    {
        $controller = class_basename($action['controller']);
        list($controller, $action) = explode('@', $controller);
         return $controller;
    }
    else
    {
      return '';
    }
}