<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\TenantsTable&\Cake\ORM\Association\BelongsTo $Tenants
 * @property \App\Model\Table\OldItemsTable&\Cake\ORM\Association\BelongsTo $OldItems
 * @property \App\Model\Table\ImagesTable&\Cake\ORM\Association\HasMany $Images
 * @property \App\Model\Table\InventoriesTable&\Cake\ORM\Association\HasMany $Inventories
 * @property \App\Model\Table\LegacyCatalogsTable&\Cake\ORM\Association\HasMany $LegacyCatalogs
 * @property \App\Model\Table\LegacyImagesTable&\Cake\ORM\Association\HasMany $LegacyImages
 * @property \App\Model\Table\SkusTable&\Cake\ORM\Association\HasMany $Skus
 *
 * @method \App\Model\Entity\Item newEmptyEntity()
 * @method \App\Model\Entity\Item newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemsTable extends Table
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

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OldItems', [
            'className' => 'LegacyItems',
'foreignKey' => 'old_item_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Images', [
            'foreignKey' => 'item_id',
        ]);
        $this->hasMany('Inventories', [
            'foreignKey' => 'item_id',
        ]);
        $this->hasMany('LegacyCatalogs', [
            'foreignKey' => 'item_id',
        ]);
        $this->hasMany('LegacyImages', [
            'foreignKey' => 'item_id',
        ]);
        $this->hasMany('Skus', [
            'foreignKey' => 'item_id',
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
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('item_code')
            ->maxLength('item_code', 50)
            ->requirePresence('item_code', 'create')
            ->notEmptyString('item_code');

        $validator
            ->scalar('alternate_item_code')
            ->maxLength('alternate_item_code', 50)
            ->requirePresence('alternate_item_code', 'create')
            ->notEmptyString('alternate_item_code');

        $validator
            ->scalar('description')
            ->maxLength('description', 255)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->requirePresence('active', 'create')
            ->notEmptyString('active');

        $validator
            ->scalar('item_unit')
            ->maxLength('item_unit', 128)
            ->requirePresence('item_unit', 'create')
            ->notEmptyString('item_unit');

        $validator
            ->requirePresence('non_stock', 'create')
            ->notEmptyString('non_stock');

        $validator
            ->integer('reorder_quantity')
            ->requirePresence('reorder_quantity', 'create')
            ->notEmptyString('reorder_quantity');

        $validator
            ->integer('reorder_trigger_level')
            ->requirePresence('reorder_trigger_level', 'create')
            ->notEmptyString('reorder_trigger_level');

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
        $rules->add($rules->existsIn(['tenant_id'], 'Tenants'));
        $rules->add($rules->existsIn(['old_item_id'], 'OldItems'));

        return $rules;
    }
}
