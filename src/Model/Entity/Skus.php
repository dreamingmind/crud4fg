<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Skus Entity
 *
 * @property int $id
 * @property string $name
 * @property string $sku_code
 * @property string $alternate_sku_code
 * @property string $description
 * @property int $items_per_sku_unit
 * @property string $sku_unit
 * @property string $price
 * @property string $sku_type
 * @property int $active
 * @property int $store_id
 * @property int $item_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $old_catalog_id
 *
 * @property \App\Model\Entity\Store $store
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\OldCatalog $old_catalog
 */
class Skus extends Entity
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
        'sku_code' => true,
        'alternate_sku_code' => true,
        'description' => true,
        'items_per_sku_unit' => true,
        'sku_unit' => true,
        'price' => true,
        'sku_type' => true,
        'active' => true,
        'store_id' => true,
        'item_id' => true,
        'created' => true,
        'modified' => true,
        'old_catalog_id' => true,
        'store' => true,
        'item' => true,
        'old_catalog' => true,
    ];
}
