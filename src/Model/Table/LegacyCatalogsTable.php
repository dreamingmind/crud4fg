<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyCatalogs Model
 *
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\LegacyCatalogsTable&\Cake\ORM\Association\BelongsTo $ParentLegacyCatalogs
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\CustomerUsersTable&\Cake\ORM\Association\BelongsTo $CustomerUsers
 * @property \App\Model\Table\LegacyCatalogsTable&\Cake\ORM\Association\HasMany $ChildLegacyCatalogs
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\LegacyCatalog newEmptyEntity()
 * @method \App\Model\Entity\LegacyCatalog newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalog get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyCatalog findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyCatalog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalog[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyCatalog|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyCatalog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyCatalog[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCatalog[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCatalog[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyCatalog[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyCatalogsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('legacy_catalogs');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
        ]);
        $this->belongsTo('ParentLegacyCatalogs', [
            'className' => 'LegacyCatalogs',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
        ]);
        $this->belongsTo('CustomerUsers', [
            'foreignKey' => 'customer_user_id',
        ]);
        $this->hasMany('ChildLegacyCatalogs', [
            'className' => 'LegacyCatalogs',
            'foreignKey' => 'parent_id',
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'legacy_catalog_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'legacy_catalogs_users',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 128)
            ->allowEmptyString('name');

        $validator
            ->scalar('ancestor_list')
            ->maxLength('ancestor_list', 256)
            ->allowEmptyString('ancestor_list');

        $validator
            ->integer('item_count')
            ->allowEmptyString('item_count');

        $validator
            ->integer('lock')
            ->allowEmptyString('lock');

        $validator
            ->numeric('sequence')
            ->allowEmptyString('sequence');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->numeric('sell_quantity')
            ->allowEmptyString('sell_quantity');

        $validator
            ->scalar('sell_unit')
            ->maxLength('sell_unit', 128)
            ->allowEmptyString('sell_unit');

        $validator
            ->integer('max_quantity')
            ->allowEmptyString('max_quantity');

        $validator
            ->decimal('price')
            ->allowEmptyString('price');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->allowEmptyString('type');

        $validator
            ->scalar('item_code')
            ->maxLength('item_code', 50)
            ->notEmptyString('item_code');

        $validator
            ->scalar('customer_item_code')
            ->maxLength('customer_item_code', 50)
            ->allowEmptyString('customer_item_code');

        $validator
            ->scalar('comment')
            ->allowEmptyString('comment');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        $rules->add($rules->existsIn(['parent_id'], 'ParentLegacyCatalogs'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));
        $rules->add($rules->existsIn(['customer_user_id'], 'CustomerUsers'));

        return $rules;
    }
}
