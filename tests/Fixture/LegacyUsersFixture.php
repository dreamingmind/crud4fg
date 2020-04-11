<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LegacyUsersFixture
 */
class LegacyUsersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'email' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'password' => ['type' => 'char', 'length' => 40, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'password hash', 'precision' => null],
        'first_name' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'last_name' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'active' => ['type' => 'integer', 'length' => 1, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => 'activeate or deactivate this record', 'precision' => null, 'autoIncrement' => null],
        'username' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => '', 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'role' => ['type' => 'char', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'The users access control setting', 'precision' => null],
        'parent_id' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'the id of this users parent'],
        'ancestor_list' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => ',', 'collate' => 'utf8_general_ci', 'comment' => ',aa,bb,cc, chain of ancestors back up the tree prfixed and suffixed with comma', 'precision' => null],
        'lock' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'preven self and all decendents from access by other users. Someone is editing', 'precision' => null, 'autoIncrement' => null],
        'sequence' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'the sequence of the related siblings'],
        'folder' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'Indicates this is a node that can be a parent or one that is only considered an endpoint (grain)', 'precision' => null],
        'session_change' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'If any data changes that is stored in Auth for this user, flag them to refresh session on next server hit', 'precision' => null],
        'verified' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'indicates if an invited user has activated their account', 'precision' => null],
        'logged_in' => ['type' => 'biginteger', 'length' => 16, 'unsigned' => false, 'null' => true, 'default' => '0', 'comment' => 'indicates if the user is logged in', 'precision' => null, 'autoIncrement' => null],
        'cart_session' => ['type' => 'string', 'length' => 36, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => 'UUID of the session', 'precision' => null],
        'use_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'whether a $ budget applies', 'precision' => null],
        'budget' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'monthly $ budget'],
        'use_item_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'whether an item budget applies', 'precision' => null],
        'item_budget' => ['type' => 'smallinteger', 'length' => 6, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'monthly item count limit', 'precision' => null],
        'rollover_item_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'should remaining item budget rollover to next month', 'precision' => null],
        'rollover_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'should remaining budget rollover to next month', 'precision' => null],
        'use_item_limit_budget' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '0', 'comment' => 'should item limits budgets be used', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => true, 'default' => null, 'comment' => ''],
        'modified' => ['type' => 'datetime', 'length' => null, 'precision' => null, 'null' => false, 'default' => null, 'comment' => ''],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'username' => ['type' => 'unique', 'columns' => ['username'], 'length' => []],
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
                'id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => '',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'active' => 1,
                'username' => 'Lorem ipsum dolor sit amet',
                'role' => '',
                'parent_id' => 1,
                'ancestor_list' => 'Lorem ipsum dolor sit amet',
                'lock' => 1,
                'sequence' => 1,
                'folder' => 1,
                'session_change' => 1,
                'verified' => 1,
                'logged_in' => 1,
                'cart_session' => 'Lorem ipsum dolor sit amet',
                'use_budget' => 1,
                'budget' => 1,
                'use_item_budget' => 1,
                'item_budget' => 1,
                'rollover_item_budget' => 1,
                'rollover_budget' => 1,
                'use_item_limit_budget' => 1,
                'created' => '2020-04-11 04:27:13',
                'modified' => '2020-04-11 04:27:13',
            ],
        ];
        parent::init();
    }
}
