<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyCatalog Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int|null $item_id
 * @property string|null $name
 * @property int|null $parent_id
 * @property string|null $ancestor_list
 * @property int|null $item_count
 * @property int|null $lock
 * @property float|null $sequence
 * @property int|null $active
 * @property int|null $customer_id
 * @property int|null $customer_user_id
 * @property float|null $sell_quantity
 * @property string|null $sell_unit
 * @property int|null $max_quantity
 * @property string|null $price
 * @property string|null $description
 * @property int|null $type
 * @property string $item_code
 * @property string|null $customer_item_code
 * @property string|null $comment
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\ParentLegacyCatalog $parent_legacy_catalog
 * @property \App\Model\Entity\Customer $customer
 * @property \App\Model\Entity\CustomerUser $customer_user
 * @property \App\Model\Entity\ChildLegacyCatalog[] $child_legacy_catalogs
 * @property \App\Model\Entity\User[] $users
 */
class LegacyCatalog extends Entity
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
        'created' => true,
        'modified' => true,
        'item_id' => true,
        'name' => true,
        'parent_id' => true,
        'ancestor_list' => true,
        'item_count' => true,
        'lock' => true,
        'sequence' => true,
        'active' => true,
        'customer_id' => true,
        'customer_user_id' => true,
        'sell_quantity' => true,
        'sell_unit' => true,
        'max_quantity' => true,
        'price' => true,
        'description' => true,
        'type' => true,
        'item_code' => true,
        'customer_item_code' => true,
        'comment' => true,
        'item' => true,
        'parent_legacy_catalog' => true,
        'customer' => true,
        'customer_user' => true,
        'child_legacy_catalogs' => true,
        'users' => true,
    ];
}
