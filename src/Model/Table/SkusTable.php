<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Skus Model
 *
 * @property \App\Model\Table\StoresTable&\Cake\ORM\Association\BelongsTo $Stores
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\OldCatalogsTable&\Cake\ORM\Association\BelongsTo $OldCatalogs
 *
 * @method \App\Model\Entity\Skus newEmptyEntity()
 * @method \App\Model\Entity\Skus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Skus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Skus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Skus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Skus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Skus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Skus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Skus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Skus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Skus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Skus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Skus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SkusTable extends Table
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

        $this->setTable('skus');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Stores', [
            'foreignKey' => 'store_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OldCatalogs', [
            'className' => 'LegacyCatalogs',
'foreignKey' => 'old_catalog_id',
            'joinType' => 'INNER',
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
            ->scalar('sku_code')
            ->maxLength('sku_code', 50)
            ->requirePresence('sku_code', 'create')
            ->notEmptyString('sku_code');

        $validator
            ->scalar('alternate_sku_code')
            ->maxLength('alternate_sku_code', 50)
            ->requirePresence('alternate_sku_code', 'create')
            ->notEmptyString('alternate_sku_code');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->integer('items_per_sku_unit')
            ->requirePresence('items_per_sku_unit', 'create')
            ->notEmptyString('items_per_sku_unit');

        $validator
            ->scalar('sku_unit')
            ->maxLength('sku_unit', 50)
            ->requirePresence('sku_unit', 'create')
            ->notEmptyString('sku_unit');

        $validator
            ->decimal('price')
            ->notEmptyString('price');

        $validator
            ->scalar('sku_type')
            ->maxLength('sku_type', 50)
            ->requirePresence('sku_type', 'create')
            ->notEmptyString('sku_type');

        $validator
            ->notEmptyString('active');

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
        $rules->add($rules->existsIn(['store_id'], 'Stores'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        $rules->add($rules->existsIn(['old_catalog_id'], 'OldCatalogs'));

        return $rules;
    }
}
