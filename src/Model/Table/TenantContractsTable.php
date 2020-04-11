<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TenantContracts Model
 *
 * @property \App\Model\Table\TenantsTable&\Cake\ORM\Association\BelongsTo $Tenants
 *
 * @method \App\Model\Entity\TenantContract newEmptyEntity()
 * @method \App\Model\Entity\TenantContract newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\TenantContract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TenantContract get($primaryKey, $options = [])
 * @method \App\Model\Entity\TenantContract findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\TenantContract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TenantContract[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\TenantContract|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TenantContract saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TenantContract[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TenantContract[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\TenantContract[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\TenantContract[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TenantContractsTable extends Table
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

        $this->setTable('tenant_contracts');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tenants', [
            'foreignKey' => 'tenant_id',
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
            ->decimal('monthly_service_fee')
            ->notEmptyString('monthly_service_fee');

        $validator
            ->integer('rental_qty')
            ->notEmptyString('rental_qty');

        $validator
            ->scalar('rental_unit')
            ->maxLength('rental_unit', 255)
            ->notEmptyString('rental_unit');

        $validator
            ->decimal('rental_price')
            ->notEmptyString('rental_price');

        $validator
            ->decimal('order_pull_charge')
            ->notEmptyString('order_pull_charge');

        $validator
            ->decimal('order_additional_item_charge')
            ->notEmptyString('order_additional_item_charge');

        $validator
            ->decimal('replen_charge')
            ->notEmptyString('replen_charge');

        $validator
            ->decimal('replen_additional_item_charge')
            ->notEmptyString('replen_additional_item_charge');

        $validator
            ->decimal('unload_hourly')
            ->notEmptyString('unload_hourly');

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

        return $rules;
    }
}
