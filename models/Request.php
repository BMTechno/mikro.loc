<?php

namespace app\models;

use app\modules\admin\models\Tariffs;
use Yii;

/**
 * This is the model class for table "request".
 *
 * @property string $id
 * @property string $surname
 * @property string $first_name
 * @property string $second_name
 * @property string $address
 * @property string $phone
 * @property integer $tariff_id
 * @property string $date
 * @property integer $status
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['surname', 'first_name', 'second_name', 'address', 'phone', 'tariff_id'], 'required'],
            [['address'], 'string'],
            [['tariff_id', 'status'], 'integer'],
            [['date', 'status'], 'safe'],
            [['surname', 'first_name', 'second_name', 'phone'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'surname' => 'Фамилия',
            'first_name' => 'Имя',
            'second_name' => 'Отчество',
            'address' => 'Адрес',
            'phone' => 'Телефон',
            'tariff_id' => 'Тариф',
            'date' => 'Date',
            'status' => 'Status',
        ];
    }
}
