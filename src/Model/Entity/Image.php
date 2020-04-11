<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property int $id
 * @property string $img_file
 * @property string $title
 * @property string $alt
 * @property string $dir
 * @property int|null $sku_id
 * @property int|null $item_id
 * @property int|null $person_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $old_image_id
 *
 * @property \App\Model\Entity\Skus $skus
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Person $person
 * @property \App\Model\Entity\OldImage $old_image
 * @property \App\Model\Entity\LegacyCustomer[] $legacy_customers
 */
class Image extends Entity
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
        'img_file' => true,
        'title' => true,
        'alt' => true,
        'dir' => true,
        'sku_id' => true,
        'item_id' => true,
        'person_id' => true,
        'created' => true,
        'modified' => true,
        'old_image_id' => true,
        'skus' => true,
        'item' => true,
        'person' => true,
        'old_image' => true,
        'legacy_customers' => true,
    ];
}
