<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComsFixture
 */
class ComsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => 'link contacts to an address', 'precision' => null, 'autoIncrement' => null],
        'type' => ['type' => 'char', 'length' => 20, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'eg. email, phone, url', 'precision' => null],
        'channel' => ['type' => 'char', 'length' => 150, 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'eg. me@dom.com, 555-5555, dom.com', 'precision' => null],
        'primary' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'old_address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'address_id' => ['type' => 'index', 'columns' => ['address_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'coms_ibfk_1' => ['type' => 'foreign', 'columns' => ['address_id'], 'references' => ['addresses', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'address_id' => 1,
                'type' => '',
                'channel' => '',
                'primary' => 1,
                'created' => '2020-04-11 04:27:11',
                'modified' => '2020-04-11 04:27:11',
                'old_address_id' => 1,
            ],
        ];
        parent::init();
    }
}
