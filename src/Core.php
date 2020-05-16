<?php

namespace App;

class Core
{
    protected $data;

    public function __construct()
    {
        $this->data = array();
    }

    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function get($key)
    {
        $keyExists = array_key_exists($key, $this->data);
        if ($keyExists) {
            return $this->data[$key];
        } else {
            return null;
        }
    }

    public function increment($key, $incrementValue = 1)
    {
        $keyExists = array_key_exists($key, $this->data);
        if($keyExists){
            $this->set($key, $this->get($key) + $incrementValue);
        }else{
            $this->set($key, $incrementValue);
        }
    }

    public function decrement($key, $decrementValue = 1)
    {
        $keyExists = array_key_exists($key, $this->data);
        if($keyExists){
            $this->set($key, $this->get($key) - $decrementValue);
        }else{
            $this->set($key, 0 - $decrementValue);
        }
    }
}
