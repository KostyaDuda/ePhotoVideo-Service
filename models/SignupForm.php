<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $type;
    public $password;

    
    public function rules()
    {
        return [
            [['username','email','password'], 'required'],
            [['username'], 'string'],
            [['email'], 'email'],
            [['type'], 'string'],
            [['email'], 'unique', 'targetClass'=>'app\models\User_fv', 'targetAttribute'=>'email']
        ];
    }
    
    public function signup()
    {
        if($this->validate())
        {
            $user = new User_fv();
            $user->username = $this->username;
            $user->email = $this->email;
            $user->type = $this->type;
            $user->password = $this->password;
            $user->status = 0;
            $user->img = "no-image.jpg";
            return $user->save();
        }
    }
}