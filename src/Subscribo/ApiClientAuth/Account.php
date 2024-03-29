<?php namespace Subscribo\ApiClientAuth;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\GenericUser;

class Account extends GenericUser implements Authenticatable
{

    public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
        if (empty($attributes['id'])) {
            $this->attributes['id'] = null;
        }
        if (empty($attributes['password'])) {
            $this->attributes['password'] = null;
        }
        if (empty($attributes[$this->getRememberTokenName()])) {
            $this->attributes[$this->getRememberTokenName()] = null;
        }
        if (empty($attributes['name'])) {
            $this->attributes['name'] = null;
        }
        if (empty($attributes['email'])) {
            $this->attributes['email'] = null;
        }
    }


}
