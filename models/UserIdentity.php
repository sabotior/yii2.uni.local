<?php

namespace app\models;


use app\models\tables\Users;

class UserIdentity extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        /*return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;*/
        if ($user = Users::findOne($id)) {
            // var_dump($user);
            $model = new static([
                    'id' => $user->id,
                    'username' => $user->login,
                    /*'password' => $user->password*/
                ]
            );
            return $model;
            // var_dump($model); exit;
        }
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (self::$users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        /*
       foreach (self::$users as $user) {
            if (strcasecmp($user['username'], $username) === 0) {
                return new static($user);
            }
        }
        */
        if ($user = Users::findOne(['login' => $username])) {
           // var_dump($user);
            $model = new static([
                    'id' => $user->id,
                    'username' => $user->login,
                    'password' => $user->password
                ]
            );
            return $model;
           // var_dump($model); exit;
        }

       /* if ($user = Users::findOne(['login' => $username])) {
            $user->setScenario(Users::SCENARIO_AUTH);
            return new static($user->toArray());
        }*/

        return null;
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
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {

          /**
         \Yii::$app->security->generatePasswordHash('admin')
         */
        return $this->password === md5($password);
    }
}
