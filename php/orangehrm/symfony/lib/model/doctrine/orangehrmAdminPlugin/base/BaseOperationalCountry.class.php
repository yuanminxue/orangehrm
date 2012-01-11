<?php

/**
 * BaseOperationalCountry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property string $code
 * 
 * @method integer            getId()   Returns the current record's "id" value
 * @method string             getName() Returns the current record's "name" value
 * @method string             getCode() Returns the current record's "code" value
 * @method OperationalCountry setId()   Sets the current record's "id" value
 * @method OperationalCountry setName() Sets the current record's "name" value
 * @method OperationalCountry setCode() Sets the current record's "code" value
 * 
 * @package    orangehrm
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOperationalCountry extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ohrm_operational_country');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('code', 'string', 3, array(
             'type' => 'string',
             'length' => 3,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}