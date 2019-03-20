<?php
namespace app\models;
use yii\db\ActiveRecord;

class User_content extends ActiveRecord{
    public static function tableName()
    {
        return 'User_content';
    }
    public function getUser_()
    {
        return $this->hasOne(User_one::className(), ['id' => 'user_id']);
    }  
    public function getImage_content()
    {
        return ($this->content) ? '/uploads/' . $this->content : '/uploads/no-image.jpg';
    }
    
}