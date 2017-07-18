<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * User model
 *
 * @property integer $id
 * @property string $uname
 * @property string $password_hash
 * @property string $pwd_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $pwd write-only pwd
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 10;


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by uname
     *
     * @param string $uname
     * @return static|null
     */
    public static function findByUsername($uname)
    {
        return static::findOne(['uname' => $uname, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by pwd reset token
     *
     * @param string $token pwd reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'pwd_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if pwd reset token is valid
     *
     * @param string $token pwd reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.pwdResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates pwd
     *
     * @param string $pwd pwd to validate
     * @return bool if pwd provided is valid for current user
     */
    public function validatePassword($pwd)
    {
        return Yii::$app->security->validatePassword($pwd, $this->password_hash);
    }

    /**
     * Generates pwd hash from pwd and sets it to the model
     *
     * @param string $pwd
     */
    public function setPassword($pwd)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($pwd);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new pwd reset token
     */
    public function generatePasswordResetToken()
    {
        $this->pwd_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes pwd reset token
     */
    public function removePasswordResetToken()
    {
        $this->pwd_reset_token = null;
    }
}
