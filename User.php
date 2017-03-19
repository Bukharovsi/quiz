<?php
namespace app;

use app\core\Model;
use app\query\UserQuery;


/**
 * Class User
 * @method UserQuery query()
 *
 * @package app
 */
class User extends Model
{
    protected $queryClass = UserQuery::class;

    public static $table = 'user';

    public function getMyDocuments() {
        return $this->query()->getDocuments();
    }
}
