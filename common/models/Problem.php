<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "problem".
 *
 * @property int $ID ID 主键
 * @property int $CateId 分类ID
 * @property string $Name 问题名称
 * @property string $Content 问题内容
 * @property int $Sort 排序
 * @property string $CreateTime 创建时间
 */
class Problem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'problem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['CateId', 'Sort'], 'integer'],
            [['Name'], 'required'],
            [['Content'], 'string'],
            [['CreateTime'], 'safe'],
            [['Name'], 'string', 'max' => 255],
            [['Name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID 主键',
            'CateId' => '分类ID',
            'Name' => '问题名称',
            'Content' => '问题内容',
            'Sort' => '排序',
            'CreateTime' => '创建时间',
        ];
    }
}
