<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property string $name
 * @property string $item_code
 * @property string $alternate_item_code
 * @property string $description
 * @property int $active
 * @property string $item_unit
 * @property int $non_stock
 * @property int $reorder_quantity
 * @property int $reorder_trigger_level
 * @property int $tenant_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $old_item_id
 *
 * @property \App\Model\Entity\Tenant $tenant
 * @property \App\Model\Entity\OldItem $old_item
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\Inventory[] $inventories
 * @property \App\Model\Entity\LegacyCatalog[] $legacy_catalogs
 * @property \App\Model\Entity\LegacyImage[] $legacy_images
 * @property \App\Model\Entity\Skus[] $skus
 */
class Item extends Entity
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
        'item_code' => true,
        'alternate_item_code' => true,
        'description' => true,
        'active' => true,
        'item_unit' => true,
        'non_stock' => true,
        'reorder_quantity' => true,
        'reorder_trigger_level' => true,
        'tenant_id' => true,
        'created' => true,
        'modified' => true,
        'old_item_id' => true,
        'tenant' => true,
        'old_item' => true,
        'images' => true,
        'inventories' => true,
        'legacy_catalogs' => true,
        'legacy_images' => true,
        'skus' => true,
    ];
}
