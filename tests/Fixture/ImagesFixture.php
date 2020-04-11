<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ImagesFixture
 */
class ImagesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'img_file' => ['type' => 'char', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'title' => ['type' => 'char', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'alt' => ['type' => 'char', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'dir' => ['type' => 'char', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'sku_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'old_image_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'sku_id' => ['type' => 'index', 'columns' => ['sku_id'], 'length' => []],
            'item_id' => ['type' => 'index', 'columns' => ['item_id'], 'length' => []],
            'person_id' => ['type' => 'index', 'columns' => ['person_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'images_ibfk_1' => ['type' => 'foreign', 'columns' => ['sku_id'], 'references' => ['skus', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'images_ibfk_2' => ['type' => 'foreign', 'columns' => ['item_id'], 'references' => ['items', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'images_ibfk_3' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['people', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'img_file' => '',
                'title' => '',
                'alt' => '',
                'dir' => '',
                'sku_id' => 1,
                'item_id' => 1,
                'person_id' => 1,
                'created' => '2020-04-11 04:27:11',
                'modified' => '2020-04-11 04:27:11',
                'old_image_id' => 1,
            ],
        ];
        parent::init();
    }
}
