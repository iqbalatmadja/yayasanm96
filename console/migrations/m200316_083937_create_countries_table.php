<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%countries}}`.
 */
class m200316_083937_create_countries_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%countries}}', [
            'id' => $this->primaryKey(),
            'country_code' => $this->string(2),
            'country_name' => $this->string(100),
            'currency_code' => $this->string(3),
            'fips_code' => $this->string(2),
            'iso_numeric' => $this->string(4),
            'north' => $this->string(30),
            'south' => $this->string(30),
            'east' => $this->string(30),
            'west' => $this->string(30),
            'capital' => $this->string(30),
            'continent_name' => $this->string(100),
            'continent' => $this->string(2),
            'languages' => $this->string(100),
            'iso_alpha_3' => $this->string(3),
            'geoname_id' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%countries}}');
    }
}
