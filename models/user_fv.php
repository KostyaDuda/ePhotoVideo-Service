<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User_fv extends ActiveRecord implements \yii\web\IdentityInterface{

    public static function tableName(){
        return 'user';
    }  
    public function rules()
    {
        return [
            [['username','email','phone'], 'required'],
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
    public function setings_update()
    {
        $user = User_fv::findOne($this->id);
        if($this->validate())
        {
            $user->username = $this->username;
            $user->email = $this->email;
            $user->type = $this->type;
            $user->City = $this->City;
            $user->Filming_cities = $this->Filming_cities;
            $user->phone = $this->phone;
            $user->telegram = $this->telegram;
            $user->viber = $this->viber;
            $user->facebook = $this->facebook;
            $user->instagram = $this->instagram;
            $user->description = $this->description;
            $user->status = 1;
            return $user->save();
        }
    }

    public function create()
    {
        return $this->save(false);
    }

}