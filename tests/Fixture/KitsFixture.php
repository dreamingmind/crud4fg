<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * KitsFixture
 */
class KitsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'kit_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'The id of the sku used as the collecting kit head', 'precision' => null, 'autoIncrement' => null],
        'component_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'The id of the sku used as a component of this kit', 'precision' => null, 'autoIncrement' => null],
        'quantity' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'The number of component units per kit 1 unit = 1 component_id sku unit', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'kit_id' => ['type' => 'index', 'columns' => ['kit_id'], 'length' => []],
            'component_id' => ['type' => 'index', 'columns' => ['component_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'kits_ibfk_1' => ['type' => 'foreign', 'columns' => ['kit_id'], 'references' => ['skus', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'kits_ibfk_2' => ['type' => 'foreign', 'columns' => ['component_id'], 'references' => ['skus', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'kit_id' => 1,
                'component_id' => 1,
                'quantity' => 1,
                'created' => '2020-04-11 04:27:11',
                'modified' => '2020-04-11 04:27:11',
            ],
        ];
        parent::init();
    }
}
