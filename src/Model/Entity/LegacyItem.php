<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyItem Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $item_code
 * @property string|null $customer_item_code
 * @property string|null $name
 * @property string|null $description
 * @property string|null $description_2
 * @property string|null $color
 * @property string|null $price
 * @property string|null $weight
 * @property float|null $quantity
 * @property int|null $reorder_qty
 * @property float|null $available_qty
 * @property float|null $pending_qty
 * @property int|null $reorder_level
 * @property int|null $minimum
 * @property bool|null $non_stock
 * @property bool|null $customer_owned
 * @property int|null $catalog_count
 * @property int|null $active
 * @property int|null $vendor_id
 * @property string|null $cost
 * @property string|null $po_item_code
 * @property string|null $po_description
 * @property string|null $po_unit
 * @property int|null $po_quantity
 * @property int|null $location_id
 * @property int|null $max_quantity
 *
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\Location $location
 */
class LegacyItem extends Entity
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
        'item_code' => true,
        'customer_item_code' => true,
        'name' => true,
        'description' => true,
        'description_2' => true,
        'color' => true,
        'price' => true,
        'weight' => true,
        'quantity' => true,
        'reorder_qty' => true,
        'available_qty' => true,
        'pending_qty' => true,
        'reorder_level' => true,
        'minimum' => true,
        'non_stock' => true,
        'customer_owned' => true,
        'catalog_count' => true,
        'active' => true,
        'vendor_id' => true,
        'cost' => true,
        'po_item_code' => true,
        'po_description' => true,
        'po_unit' => true,
        'po_quantity' => true,
        'location_id' => true,
        'max_quantity' => true,
        'vendor' => true,
        'location' => true,
    ];
}
