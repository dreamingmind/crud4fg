<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventory Entity
 *
 * @property int $id
 * @property int $quantity
 * @property int $on_order_quantity
 * @property int $on_replenishment_quantity
 * @property int $available_quantity
 * @property int $pending_quantity
 * @property int $item_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $old_item_id
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\OldItem $old_item
 */
class Inventory extends Entity
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
        'quantity' => true,
        'on_order_quantity' => true,
        'on_replenishment_quantity' => true,
        'available_quantity' => true,
        'pending_quantity' => true,
        'item_id' => true,
        'created' => true,
        'modified' => true,
        'old_item_id' => true,
        'item' => true,
        'old_item' => true,
    ];
}
