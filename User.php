<?php
class User extends Model
{
    public function getMyDocuments() {
        return $this->query->getUserDocuments();
    }
}
