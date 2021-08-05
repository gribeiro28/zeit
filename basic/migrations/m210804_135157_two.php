<?php

use yii\db\Migration;

/**
 * Class m210804_135157_two
 */
class m210804_135157_two extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

        $this->addColumn('implantacao', 'migracao', $this->string());
        $this->addColumn('implantacao', 'consultor', $this->string());

        $this->addColumn('qualidade', 'migracao', $this->string());
        $this->addColumn('qualidade', 'consultor', $this->string());
        $this->addColumn('qualidade', 'risco_cancelamento',  $this->integer());
        

        $this->alterColumn('qualidade', 'cota_xml', $this->integer()->null());
    }
    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210804_135157_two cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210804_135157_two cannot be reverted.\n";

        return false;
    }
    */
}
