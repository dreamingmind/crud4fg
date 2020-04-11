<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coms Model
 *
 * @property \App\Model\Table\AddressesTable&\Cake\ORM\Association\BelongsTo $Addresses
 * @property \App\Model\Table\OldAddressesTable&\Cake\ORM\Association\BelongsTo $OldAddresses
 *
 * @method \App\Model\Entity\Com newEmptyEntity()
 * @method \App\Model\Entity\Com newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Com[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Com get($primaryKey, $options = [])
 * @method \App\Model\Entity\Com findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Com patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Com[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Com|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Com saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Com[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Com[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Com[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Com[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ComsTable extends Table
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

        $this->setTable('coms');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Addresses', [
            'foreignKey' => 'address_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OldAddresses', [
'className' => 'LegacyAddresses',
'foreignKey' => 'old_address_id',
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
            ->scalar('type')
            ->maxLength('type', 20)
            ->requirePresence('type', 'create')
            ->notEmptyString('type');

        $validator
            ->scalar('channel')
            ->maxLength('channel', 150)
            ->requirePresence('channel', 'create')
            ->notEmptyString('channel');

        $validator
            ->requirePresence('primary', 'create')
            ->notEmptyString('primary');

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
        $rules->add($rules->existsIn(['address_id'], 'Addresses'));
        $rules->add($rules->existsIn(['old_address_id'], 'OldAddresses'));

        return $rules;
    }
}
