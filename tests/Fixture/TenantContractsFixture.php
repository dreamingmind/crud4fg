<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TenantContractsFixture
 */
class TenantContractsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'tenant_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'monthly_service_fee' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'monthly charge for using service'],
        'rental_qty' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'quantity of slots rented to tenant', 'precision' => null, 'autoIncrement' => null],
        'rental_unit' => ['type' => 'char', 'length' => 255, 'null' => false, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'description of rented slot', 'precision' => null],
        'rental_price' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'price for unit rented'],
        'order_pull_charge' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'pull charge for first item'],
        'order_additional_item_charge' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'pull charge for additional items'],
        'replen_charge' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'replenishment charge for first item'],
        'replen_additional_item_charge' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'replenishment charge for additional items'],
        'unload_hourly' => ['type' => 'decimal', 'length' => 8, 'precision' => 2, 'unsigned' => false, 'null' => false, 'default' => '0.00', 'comment' => 'hourly rate to unload truck'],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'tenant_id' => ['type' => 'index', 'columns' => ['tenant_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'tenant_contracts_ibfk_1' => ['type' => 'foreign', 'columns' => ['tenant_id'], 'references' => ['tenants', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'tenant_id' => 1,
                'monthly_service_fee' => 1.5,
                'rental_qty' => 1,
                'rental_unit' => '',
                'rental_price' => 1.5,
                'order_pull_charge' => 1.5,
                'order_additional_item_charge' => 1.5,
                'replen_charge' => 1.5,
                'replen_additional_item_charge' => 1.5,
                'unload_hourly' => 1.5,
                'created' => '2020-04-11 04:27:14',
                'modified' => '2020-04-11 04:27:14',
            ],
        ];
        parent::init();
    }
}
