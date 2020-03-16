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
            'country_code' => $this->string(),
            'country_name' => $this->string(),
            'currency_code' => $this->string(),
            'fips_code' => $this->string(),
            'iso_numeric' => $this->string(),
            'north' => $this->string(),
            'south' => $this->string(),
            'east' => $this->string(),
            'west' => $this->string(),
            'capital' => $this->string(),
            'continent_name' => $this->string(),
            'continent' => $this->string(),
            'languages' => $this->string(),
            'iso_alpha_3' => $this->string(),
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
