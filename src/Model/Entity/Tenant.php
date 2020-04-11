<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tenant Entity
 *
 * @property int $id
 * @property string $name
 * @property int $warehouse_id
 * @property string $customer_code
 * @property string $token
 * @property int $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $old_user_id
 *
 * @property \App\Model\Entity\Warehouse $warehouse
 * @property \App\Model\Entity\OldUser $old_user
 * @property \App\Model\Entity\Address[] $addresses
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Person[] $people
 * @property \App\Model\Entity\ShippingAccount[] $shipping_accounts
 * @property \App\Model\Entity\Store[] $stores
 * @property \App\Model\Entity\TenantContract[] $tenant_contracts
 */
class Tenant extends Entity
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
        'warehouse_id' => true,
        'customer_code' => true,
        'token' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'old_user_id' => true,
        'warehouse' => true,
        'old_user' => true,
        'addresses' => true,
        'items' => true,
        'people' => true,
        'shipping_accounts' => true,
        'stores' => true,
        'tenant_contracts' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'token',
    ];
}
