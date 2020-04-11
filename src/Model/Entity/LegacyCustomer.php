<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyCustomer Entity
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $customer_code
 * @property string|null $order_contact
 * @property string|null $billing_contact
 * @property bool|null $allow_backorder
 * @property bool|null $allow_direct_pay
 * @property int|null $address_id
 * @property int|null $release_hold
 * @property bool|null $taxable
 * @property int|null $rent_qty
 * @property string|null $rent_unit
 * @property string|null $rent_price
 * @property string|null $item_pull_charge
 * @property string|null $order_pull_charge
 * @property string|null $token
 * @property string|null $customer_type
 * @property int|null $image_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Address $address
 * @property \App\Model\Entity\Image $image
 */
class LegacyCustomer extends Entity
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
        'user_id' => true,
        'customer_code' => true,
        'order_contact' => true,
        'billing_contact' => true,
        'allow_backorder' => true,
        'allow_direct_pay' => true,
        'address_id' => true,
        'release_hold' => true,
        'taxable' => true,
        'rent_qty' => true,
        'rent_unit' => true,
        'rent_price' => true,
        'item_pull_charge' => true,
        'order_pull_charge' => true,
        'token' => true,
        'customer_type' => true,
        'image_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'address' => true,
        'image' => true,
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
