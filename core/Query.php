<?php
namespace app\core;


class Query
{
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }
}