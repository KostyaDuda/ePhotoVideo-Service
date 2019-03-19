<?php

namespace app\models;

use yii\base\Model;

class SetingsForm extends Model
{
    public $username;
    public $email;
    public $type;
    public $price;
    public $City;
    public $Filming_cities;
    public $phone;
    public $telegram;
    public $viber;
    public $facebook;
    public $instagram;
    public $description;
    public $status;

    public function rules()
    {
        return [
            [['username','email','price','phone'], 'required'],
            [['username'], 'string'],
            [['email'], 'email'],
            [['price'], 'integer'],
            [['City'], 'string'],
            [['Filming_cities'], 'string'],
            [['phone'], 'string'],
            [['telegram'], 'string'],
            [['viber'], 'string'],
            [['facebook'], 'string'],
            [['instagram'], 'string'],
            [['description'], 'string'],
            [['email'], 'unique', 'targetClass'=>'app\models\User_fv', 'targetAttribute'=>'email']
        ];
    }
    
    public function setings_update($id)
    {
        $user_one = User_fv::findOne($id);
        if($this->validate())
        {
            $user_one->username = $this->username;
            $user_one->email = $this->email;
            $user_one->status = 0;
            return $user_one->save();
        }
    }
}