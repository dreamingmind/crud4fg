<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TenantContract Entity
 *
 * @property int $id
 * @property int $tenant_id
 * @property string $monthly_service_fee
 * @property int $rental_qty
 * @property string $rental_unit
 * @property string $rental_price
 * @property string $order_pull_charge
 * @property string $order_additional_item_charge
 * @property string $replen_charge
 * @property string $replen_additional_item_charge
 * @property string $unload_hourly
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Tenant $tenant
 */
class TenantContract extends Entity
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
        'tenant_id' => true,
        'monthly_service_fee' => true,
        'rental_qty' => true,
        'rental_unit' => true,
        'rental_price' => true,
        'order_pull_charge' => true,
        'order_additional_item_charge' => true,
        'replen_charge' => true,
        'replen_additional_item_charge' => true,
        'unload_hourly' => true,
        'created' => true,
        'modified' => true,
        'tenant' => true,
    ];
}
