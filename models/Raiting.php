<?php
namespace app\models;
use yii\db\ActiveRecord;

class Raiting extends ActiveRecord{
    public static function tableName()
    {
        return 'user';
    }
    
    public function getImage()
    {
        return ($this->image) ? '/img/' . $this->img : '/no-image.jpg';
    }
}
?>