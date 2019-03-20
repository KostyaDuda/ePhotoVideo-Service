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
    public function saveImage_content($filename,$type,$user_id)
    {
        $this->content = $filename;
        $this->user_id = $user_id;
        $this->type = $type;
        return $this->save(false);
    }
}