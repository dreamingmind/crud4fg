<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LegacyImage Entity
 *
 * @property string|null $img_file
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property \Cake\I18n\FrozenTime|null $created
 * @property string|null $mimetype
 * @property int|null $filesize
 * @property int|null $width
 * @property int|null $height
 * @property string|null $title
 * @property int|null $date
 * @property string|null $alt
 * @property int|null $item_id
 * @property string|null $dir
 *
 * @property \App\Model\Entity\Item $item
 */
class LegacyImage extends Entity
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
        'id' => true,
        'modified' => true,
        'created' => true,
        'mimetype' => true,
        'filesize' => true,
        'width' => true,
        'height' => true,
        'title' => true,
        'date' => true,
        'alt' => true,
        'item_id' => true,
        'dir' => true,
        'item' => true,
    ];
}
