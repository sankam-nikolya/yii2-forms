<?php

use yii\db\Schema;

class m160301_000000_create_form_table extends \yii\db\Migration {

	protected $table = 'forms';
	
    public function up(){
    	
    	$options = null;
        if ($this->db->driverName === 'mysql'){
            $options = 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci AUTO_INCREMENT=1';
        }
    
    
		$this->createTable($this->table, [
            'form_id' => $this->primaryKey(),
            'body' => $this->text(),
            'title' => $this->string(),
            'author' => $this->string(),
            'date_start' => $this->datetime(),
            'date_end' => $this->datetime(),
            'maximum' => $this->integer(),
            'seo_title' => $this->string(),
            'seo_url' => $this->string(),
        ], $options);
    }

 	public function down(){
        $this->dropTable($this->table);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
} 
