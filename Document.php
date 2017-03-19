<?php
namespace app;

use app\core\Model;
use app\query\DocumentQuery;
use app\exceptions\DocumentException;


/**
 * Class User
 * @method DocumentQuery query()
 *
 * @package app
 */
class Document extends Model{
    protected $queryClass = DocumentQuery::class;

    public static $table = 'document';

    /** @var  User */
    private $user;

    /** @var  string */
    private $name;

    public function init($name, User $user)
    {
        if (strlen($name) > 5) {
            throw new DocumentException('Название документа должно быть более 5 символов');
        }

        $this->user = $user;
        $this->name = $name;
    }

    /**
     * @return array
     */
    public static function getAllDocuments()
    {
        return static::query()->allDocuments();
    }
}
