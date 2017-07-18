<?php
namespace common\models;

use Yii;
use yii\base\Model;

/**
 * Login form
 */
class LoginForm extends Model
{
    public $uname;
    public $pwd;
    public $rememberMe = true;

    private $_user;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // uname and pwd are both required
            [['uname', 'pwd'], 'required'],
            // rememberMe must be a boolean value
            ['rememberMe', 'boolean'],
            // pwd is validated by validatePassword()
            ['pwd', 'validatePassword'],
        ];
    }

    /**
     * Validates the pwd.
     * This method serves as the inline validation for pwd.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();
            if (!$user || !$user->validatePassword($this->pwd)) {
                $this->addError($attribute, 'Incorrect uname or pwd.');
            }
        }
    }

    /**
     * Logs in a user using the provided uname and pwd.
     *
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600 * 24 * 30 : 0);
        } else {
            return false;
        }
    }

    /**
     * Finds user by [[uname]]
     *
     * @return User|null
     */
    protected function getUser()
    {
        if ($this->_user === null) {
            $this->_user = User::findByUsername($this->uname);
        }

        return $this->_user;
    }
}
