<?php
use Migrations\AbstractMigration;

class StudentsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        //create table
        $table = $this->table('students');
        $table->addColumn('name', 'string', ['limit' => 30])
              ->addColumn('last_name', 'string', ['limit' => 30])
              ->addColumn('email', 'string', ['limit' => 100])
              ->create();
    }
}
