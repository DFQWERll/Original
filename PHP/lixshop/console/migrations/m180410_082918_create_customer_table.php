<?php

use yii\db\Migration;

/**
 * Handles the creation of table `customer`.
 */
class m180410_082918_create_customer_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%customer}}', [
            'id' => $this->primaryKey(),
            'wechat_openid' => $this->string(255)->comment('微信open_id'),
            'mobile' => $this->string(11)->comment('手机号码'),
            'group' => $this->integer()->defaultValue(1)->comment('客户类别 1、普通客户 2、学生'),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'access_token' => $this->string()->comment('登录令牌'),
            'favorite_product_count' => $this->integer()->defaultValue(0)->comment('收藏个数'),
            'access_token_created_at' => $this->timestamp()
        ]);

        
    }

    public function down()
    {

    }
}
