<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "problem_cate".
 *
 * @property int $ID ID主键
 * @property string $Name 分类名称
 * @property int $Sort 排序
 * @property string $CreateTime 创建时间
 */
class ProblemCate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'problem_cate';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Sort'], 'integer'],
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
            'ID' => 'ID主键',
            'Name' => '分类名称',
            'Sort' => '排序',
            'CreateTime' => '创建时间',
        ];
    }
}
