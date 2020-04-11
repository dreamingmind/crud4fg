<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SkusFixture
 */
class SkusFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'skus';
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'char', 'length' => 128, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'sku_code' => ['type' => 'char', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'alternate_sku_code' => ['type' => 'char', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'items_per_sku_unit' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'The number of base units of the item sold as one (1) of this sku', 'precision' => null, 'autoIncrement' => null],
        'sku_unit' => ['type' => 'char', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'The unit of measure this sku is sold at (eg. each, carton, etc.)', 'precision' => null],
        'price' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'price per sell unit'],
        'sku_type' => ['type' => 'char', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'The type of inventory strategy used (eg Kit, Component, Unit)', 'precision' => null],
        'active' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'store_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'old_catalog_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'sku_code' => ['type' => 'index', 'columns' => ['sku_code'], 'length' => []],
            'alternate_sku_code' => ['type' => 'index', 'columns' => ['alternate_sku_code'], 'length' => []],
            'name' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'sku_code_2' => ['type' => 'index', 'columns' => ['sku_code'], 'length' => []],
            'alternate_sku_code_2' => ['type' => 'index', 'columns' => ['alternate_sku_code'], 'length' => []],
            'name_2' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
            'store_id' => ['type' => 'index', 'columns' => ['store_id'], 'length' => []],
            'item_id' => ['type' => 'index', 'columns' => ['item_id'], 'length' => []],
            'sku_code_3' => ['type' => 'index', 'columns' => ['sku_code'], 'length' => []],
            'alternate_sku_code_3' => ['type' => 'index', 'columns' => ['alternate_sku_code'], 'length' => []],
            'name_3' => ['type' => 'index', 'columns' => ['name'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'skus_ibfk_1' => ['type' => 'foreign', 'columns' => ['store_id'], 'references' => ['stores', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'skus_ibfk_2' => ['type' => 'foreign', 'columns' => ['item_id'], 'references' => ['items', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'name' => '',
                'sku_code' => '',
                'alternate_sku_code' => '',
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'items_per_sku_unit' => 1,
                'sku_unit' => '',
                'price' => 1.5,
                'sku_type' => '',
                'active' => 1,
                'store_id' => 1,
                'item_id' => 1,
                'created' => '2020-04-11 04:27:14',
                'modified' => '2020-04-11 04:27:14',
                'old_catalog_id' => 1,
            ],
        ];
        parent::init();
    }
}
