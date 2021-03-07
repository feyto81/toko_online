<?php

namespace App;

use Arr;

trait Authorizable
{
    private $abilities = [
        'index' => 'view',
        'edit' => 'edit',
        'show' => 'view',
        'update' => 'edit',
        'create' => 'add',
        'store' => 'add',
        'destroy' => 'delete'
    ];

    public function callAction($method, $parameters)
    {
        if ($ability = $this->getAbility($method)) {
            $this->authorizable($ability);
        }

        return parent::callAction($method, $parameters);
    }

    public function getAbility($method)
    {
        $routeName = explode('.', \Request::route()->getName());
        $action = Arr::get($this->getAbilities(), $method);
        return $action ? $action . '_' . $routeName[0] : null;
    }

    public function getAbilities()
    {
        return $this->abilities;
    }

    public function setAbilities($abilities)
    {
        $this->abilites($abilities);
    }
}
