<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Address Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $company
 * @property string|null $address
 * @property string|null $address2
 * @property string|null $address3
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property string|null $country
 * @property bool|null $residence
 * @property int|null $shipping_account_id
 * @property int|null $warehouse_office_id
 * @property int|null $warehouse_facility_id
 * @property int|null $tenant_office_id
 * @property int|null $tenant_id
 * @property int|null $person_id
 * @property int $old_address_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ShippingAccount $shipping_account
 * @property \App\Model\Entity\Warehouse $warehouse
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\OldAddress $old_address
 * @property \App\Model\Entity\Com[] $coms
 * @property \App\Model\Entity\LegacyCustomer[] $legacy_customers
 */
class Address extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'company' => true,
        'address' => true,
        'address2' => true,
        'address3' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'country' => true,
        'residence' => true,
        'shipping_account_id' => true,
        'warehouse_office_id' => true,
        'warehouse_facility_id' => true,
        'tenant_office_id' => true,
        'tenant_id' => true,
        'person_id' => true,
        'old_address_id' => true,
        'created' => true,
        'modified' => true,
        'shipping_account' => true,
        'warehouse' => true,
        'tenant' => true,
        'person' => true,
        'old_address' => true,
        'coms' => true,
        'legacy_customers' => true,
    ];
}
