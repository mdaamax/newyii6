<?php

namespace app\entity;

class Users extends \yii\db\ActiveRecord
{
    public function getRequests()
    {
        return $this->hasMany(Request::class, ['user_id' => 'id']);
    }
}