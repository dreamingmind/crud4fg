<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LegacyImagesFixture
 */
class LegacyImagesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'img_file' => ['type' => 'string', 'length' => 35, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'The image file name', 'precision' => null],
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'mimetype' => ['type' => 'string', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'From EXIF data', 'precision' => null],
        'filesize' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'From EXIF data', 'precision' => null, 'autoIncrement' => null],
        'width' => ['type' => 'integer', 'length' => 9, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'From EXIF data', 'precision' => null, 'autoIncrement' => null],
        'height' => ['type' => 'integer', 'length' => 9, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'From EXIF data', 'precision' => null, 'autoIncrement' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => 'HTML image title attribute', 'precision' => null],
        'date' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'From EXIF data', 'precision' => null, 'autoIncrement' => null],
        'alt' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'HTML image alt attribute', 'precision' => null],
        'item_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'dir' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'directory path of the image', 'precision' => null],
        '_indexes' => [
            'images_title_idx' => ['type' => 'index', 'columns' => ['title'], 'length' => []],
            'images_alt_idx' => ['type' => 'index', 'columns' => ['alt'], 'length' => []],
        ],
        '_constraints' => [
            'serial_num' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'img_file' => 'Lorem ipsum dolor sit amet',
                'id' => 1,
                'modified' => '2020-04-11 04:27:12',
                'created' => '2020-04-11 04:27:12',
                'mimetype' => 'Lorem ipsum dolor sit amet',
                'filesize' => 1,
                'width' => 1,
                'height' => 1,
                'title' => 'Lorem ipsum dolor sit amet',
                'date' => 1,
                'alt' => 'Lorem ipsum dolor sit amet',
                'item_id' => 1,
                'dir' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
