<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User_fv extends ActiveRecord implements \yii\web\IdentityInterface{
    public static function tableName(){
        return 'user';
    }  
    public function getImage()
    {
        return ($this->image) ? '/img/' . $this->img : '/no-image.jpg';
    }
    // private static $users = [
    //     '100' => [
    //         'id' => '100',
    //         'username' => 'admin',
    //         'password' => 'admin',
    //         'authKey' => 'test100key',
    //         'accessToken' => '100-token',
    //     ],
    //     '101' => [
    //         'id' => '101',
    //         'username' => 'demo',
    //         'password' => 'demo',
    //         'authKey' => 'test101key',
    //         'accessToken' => '101-token',
    //     ],
    // ];
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Name',
            'email' => 'Email',
            'password' => 'Password'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        // return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        return User_fv::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
      
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
  

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

    //* {@inheritdoc}
    // /**
    //  */
    public function validateAuthKey($authKey)
    {
     
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
    * @return bool if password provided is valid for current user
     */
    public static function findByUsername($username)
    {
        // foreach (self::$users as $user) {
        //     if (strcasecmp($user['username'], $username) === 0) {
        //         return new static($user);
        //     }
        // }

        // return null;
        return User_fv::find()->where(['username'=>$username])->one();
    }
    public function validatePassword($password)
    {
        return ($this->password == $password) ? true : false; 
    }
    public function create()
    {
        return $this->save(false);
    }

}
