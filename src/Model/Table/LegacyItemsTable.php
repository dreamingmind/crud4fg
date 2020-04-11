<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyItems Model
 *
 * @property \App\Model\Table\VendorsTable&\Cake\ORM\Association\BelongsTo $Vendors
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\BelongsTo $Locations
 *
 * @method \App\Model\Entity\LegacyItem newEmptyEntity()
 * @method \App\Model\Entity\LegacyItem newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyItem findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyItem[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyItem|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyItem saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyItem[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyItem[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyItem[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyItem[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyItemsTable extends Table
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

        $this->setTable('legacy_items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Vendors', [
            'foreignKey' => 'vendor_id',
        ]);
        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
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
            ->scalar('item_code')
            ->maxLength('item_code', 50)
            ->allowEmptyString('item_code');

        $validator
            ->scalar('customer_item_code')
            ->maxLength('customer_item_code', 50)
            ->allowEmptyString('customer_item_code');

        $validator
            ->scalar('name')
            ->maxLength('name', 128)
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('description_2')
            ->allowEmptyString('description_2');

        $validator
            ->scalar('color')
            ->maxLength('color', 25)
            ->allowEmptyString('color');

        $validator
            ->decimal('price')
            ->allowEmptyString('price');

        $validator
            ->decimal('weight')
            ->allowEmptyString('weight');

        $validator
            ->numeric('quantity')
            ->allowEmptyString('quantity');

        $validator
            ->integer('reorder_qty')
            ->allowEmptyString('reorder_qty');

        $validator
            ->numeric('available_qty')
            ->allowEmptyString('available_qty');

        $validator
            ->numeric('pending_qty')
            ->allowEmptyString('pending_qty');

        $validator
            ->integer('reorder_level')
            ->allowEmptyString('reorder_level');

        $validator
            ->integer('minimum')
            ->allowEmptyString('minimum');

        $validator
            ->boolean('non_stock')
            ->allowEmptyString('non_stock');

        $validator
            ->boolean('customer_owned')
            ->allowEmptyString('customer_owned');

        $validator
            ->integer('catalog_count')
            ->allowEmptyString('catalog_count');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->decimal('cost')
            ->allowEmptyString('cost');

        $validator
            ->scalar('po_item_code')
            ->maxLength('po_item_code', 75)
            ->allowEmptyString('po_item_code');

        $validator
            ->scalar('po_description')
            ->allowEmptyString('po_description');

        $validator
            ->scalar('po_unit')
            ->maxLength('po_unit', 10)
            ->allowEmptyString('po_unit');

        $validator
            ->integer('po_quantity')
            ->allowEmptyString('po_quantity');

        $validator
            ->integer('max_quantity')
            ->allowEmptyString('max_quantity');

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
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'));
        $rules->add($rules->existsIn(['location_id'], 'Locations'));

        return $rules;
    }
}
