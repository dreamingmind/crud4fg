<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LegacyCustomersFixture
 */
class LegacyCustomersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'user_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'customer_code' => ['type' => 'string', 'length' => 24, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'order_contact' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'billing_contact' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'allow_backorder' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'allow_direct_pay' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null],
        'address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'release_hold' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'indicates if approved orders should hold for staff release', 'precision' => null, 'autoIncrement' => null],
        'taxable' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'rent_qty' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'rent_unit' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => '0', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'rent_price' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'item_pull_charge' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'order_pull_charge' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => '0.00', 'comment' => ''],
        'token' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'customer_type' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'AMP or GM customers', 'precision' => null],
        'image_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'user_id' => 1,
                'customer_code' => 'Lorem ipsum dolor sit ',
                'order_contact' => 'Lorem ipsum dolor sit amet',
                'billing_contact' => 'Lorem ipsum dolor sit amet',
                'allow_backorder' => 1,
                'allow_direct_pay' => 1,
                'address_id' => 1,
                'release_hold' => 1,
                'taxable' => 1,
                'rent_qty' => 1,
                'rent_unit' => 'Lorem ipsum dolor sit amet',
                'rent_price' => 1.5,
                'item_pull_charge' => 1.5,
                'order_pull_charge' => 1.5,
                'token' => 'Lorem ipsum dolor sit amet',
                'customer_type' => 'Lorem ipsum dolor sit amet',
                'image_id' => 1,
                'created' => '2020-04-11 04:27:12',
                'modified' => '2020-04-11 04:27:12',
            ],
        ];
        parent::init();
    }
}
