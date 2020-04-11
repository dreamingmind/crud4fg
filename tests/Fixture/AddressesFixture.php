<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AddressesFixture
 */
class AddressesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'company' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'address' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'address2' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'address3' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'city' => ['type' => 'string', 'length' => 128, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'state' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'zip' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'country' => ['type' => 'string', 'length' => 20, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'residence' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => '1=home delivery 0=business', 'precision' => null],
        'shipping_account_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'provides a billing address to a shipping account', 'precision' => null, 'autoIncrement' => null],
        'warehouse_office_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'links the \'contract-relevant\' address (billing etc) for a warehouse', 'precision' => null, 'autoIncrement' => null],
        'warehouse_facility_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'links the \'facility\' addresses (warehousing buildings) for a warehouse', 'precision' => null, 'autoIncrement' => null],
        'tenant_office_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'links the \'contract-relevant\' address (billing etc) for a tenant', 'precision' => null, 'autoIncrement' => null],
        'tenant_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'creates a shipping addressbook attached to Tenants, visible to their workers', 'precision' => null, 'autoIncrement' => null],
        'person_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'creates a shipping addressbook for registered users', 'precision' => null, 'autoIncrement' => null],
        'old_address_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_indexes' => [
            'person_id' => ['type' => 'index', 'columns' => ['person_id'], 'length' => []],
            'tenant_id' => ['type' => 'index', 'columns' => ['tenant_id'], 'length' => []],
            'tenant_office_id' => ['type' => 'index', 'columns' => ['tenant_office_id'], 'length' => []],
            'warehouse_office_id' => ['type' => 'index', 'columns' => ['warehouse_office_id'], 'length' => []],
            'shipping_account_id' => ['type' => 'index', 'columns' => ['shipping_account_id'], 'length' => []],
            'warehouse_facility_id' => ['type' => 'index', 'columns' => ['warehouse_facility_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'addresses_ibfk_1' => ['type' => 'foreign', 'columns' => ['person_id'], 'references' => ['people', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'addresses_ibfk_2' => ['type' => 'foreign', 'columns' => ['tenant_id'], 'references' => ['tenants', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'addresses_ibfk_3' => ['type' => 'foreign', 'columns' => ['tenant_office_id'], 'references' => ['tenants', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'addresses_ibfk_4' => ['type' => 'foreign', 'columns' => ['warehouse_office_id'], 'references' => ['warehouses', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'addresses_ibfk_5' => ['type' => 'foreign', 'columns' => ['shipping_account_id'], 'references' => ['shipping_accounts', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
            'addresses_ibfk_6' => ['type' => 'foreign', 'columns' => ['warehouse_facility_id'], 'references' => ['warehouses', 'id'], 'update' => 'restrict', 'delete' => 'cascade', 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'company' => 'Lorem ipsum dolor sit amet',
                'address' => 'Lorem ipsum dolor sit amet',
                'address2' => 'Lorem ipsum dolor sit amet',
                'address3' => 'Lorem ipsum dolor sit amet',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ',
                'zip' => 'Lorem ipsum dolor ',
                'country' => 'Lorem ipsum dolor ',
                'residence' => 1,
                'shipping_account_id' => 1,
                'warehouse_office_id' => 1,
                'warehouse_facility_id' => 1,
                'tenant_office_id' => 1,
                'tenant_id' => 1,
                'person_id' => 1,
                'old_address_id' => 1,
                'created' => '2020-04-11 04:27:10',
                'modified' => '2020-04-11 04:27:10',
            ],
        ];
        parent::init();
    }
}
