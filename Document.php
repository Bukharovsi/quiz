<?php
class Document extends Model{
    /** @var  User */
    private $user;

    /** @var  string */
    private $name;

    public function init($name, User $user)
    {
        if (strlen($name) > 5) {
            throw new Exception('Название документа должно быть более 5 символов');
        }

        $this->user = $user;
        $this->name = $name;
    }

    public function getAllDocuments()
    {
        return $this->query->allDocuments();
    }

}
