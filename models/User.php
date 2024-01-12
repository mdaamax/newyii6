<?php

namespace app\models;

use app\entity\Users;
use app\repository\UserRepository;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $login;
    public $password;
    public $is_admin;



    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        $user = UserRepository::getUserById($id);
        return isset($user) ? new static($user) : null;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByLogin($login)
    {
        $user = UserRepository::getUserByLogin($login);
        return isset($user) ? new static($user) : null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {

    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return password_verify($password, $this -> password);
    }
}
