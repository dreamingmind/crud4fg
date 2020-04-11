<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyAddresses Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\EpmsVendorsTable&\Cake\ORM\Association\BelongsTo $EpmsVendors
 * @property \App\Model\Table\TaxRatesTable&\Cake\ORM\Association\BelongsTo $TaxRates
 * @property \App\Model\Table\CustomersTable&\Cake\ORM\Association\BelongsTo $Customers
 *
 * @method \App\Model\Entity\LegacyAddress newEmptyEntity()
 * @method \App\Model\Entity\LegacyAddress newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyAddress[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyAddress get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyAddress findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyAddress patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyAddress[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyAddress|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyAddress saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyAddress[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyAddress[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyAddress[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyAddress[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyAddressesTable extends Table
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

        $this->setTable('legacy_addresses');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
        ]);
        $this->belongsTo('EpmsVendors', [
            'foreignKey' => 'epms_vendor_id',
        ]);
        $this->belongsTo('TaxRates', [
            'foreignKey' => 'tax_rate_id',
        ]);
        $this->belongsTo('Customers', [
            'foreignKey' => 'customer_id',
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
            ->scalar('company')
            ->maxLength('company', 128)
            ->allowEmptyString('company');

        $validator
            ->scalar('address')
            ->maxLength('address', 128)
            ->allowEmptyString('address');

        $validator
            ->scalar('address2')
            ->maxLength('address2', 128)
            ->allowEmptyString('address2');

        $validator
            ->scalar('address3')
            ->maxLength('address3', 128)
            ->allowEmptyString('address3');

        $validator
            ->scalar('city')
            ->maxLength('city', 128)
            ->allowEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 8)
            ->allowEmptyString('state');

        $validator
            ->scalar('zip')
            ->maxLength('zip', 20)
            ->allowEmptyString('zip');

        $validator
            ->scalar('country')
            ->maxLength('country', 20)
            ->allowEmptyString('country');

        $validator
            ->numeric('sequence')
            ->allowEmptyString('sequence');

        $validator
            ->integer('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('type')
            ->maxLength('type', 100)
            ->allowEmptyString('type');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 50)
            ->allowEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 50)
            ->allowEmptyString('last_name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 50)
            ->allowEmptyString('phone');

        $validator
            ->scalar('fedex_acct')
            ->maxLength('fedex_acct', 25)
            ->allowEmptyString('fedex_acct');

        $validator
            ->scalar('ups_acct')
            ->maxLength('ups_acct', 25)
            ->allowEmptyString('ups_acct');

        $validator
            ->boolean('residence')
            ->allowEmptyString('residence');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['epms_vendor_id'], 'EpmsVendors'));
        $rules->add($rules->existsIn(['tax_rate_id'], 'TaxRates'));
        $rules->add($rules->existsIn(['customer_id'], 'Customers'));

        return $rules;
    }
}
