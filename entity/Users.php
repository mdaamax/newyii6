<?php

namespace app\entity;

use app\repository\UserRepository;
use yii\web\IdentityInterface;

class Users extends \yii\db\ActiveRecord implements IdentityInterface
{
    public function getRequests()
    {
        return $this->hasMany(Request::class, ['user_id' => 'id']);
    }

    public static function findIdentity($id)
    {
        return UserRepository::getUserById($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    public function getId()
    {
        return $this ->id;
    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {


    }
}