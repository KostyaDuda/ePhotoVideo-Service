<?php
namespace app\models;
use yii\db\ActiveRecord;

class Raiting extends ActiveRecord{
    public static function tableName()
    {
        return 'user';
    }
    
    public function getImage_raiting()
    {
        return ($this->img) ? '/uploads/' . $this->img : '/uploads/no-image.jpg';
    }
}
?>