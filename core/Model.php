<?php
namespace app\core;


use app\exceptions\ModelException;

class Model
{
    /** @var string */
    protected $queryClass = Query::class;

    /** @var string */
    public static $table = null;

    public function __construct()
    {
        if (is_null(static::$table)) {
            throw new ModelException('Не указана таблица модели в свойстве $table');
        }
    }

    /**
     * @return Query
     */
    public function query()
    {
        $queryClass = $this->queryClass;
        return new $queryClass($this);
    }

    /**
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($method, $parameters)
    {
        return (new static)->$method(...$parameters);
    }

    /**
     * @return string
     */
    public function getTable()
    {
        return static::$table;
    }
}