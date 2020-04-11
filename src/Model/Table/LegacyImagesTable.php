<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LegacyImages Model
 *
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 *
 * @method \App\Model\Entity\LegacyImage newEmptyEntity()
 * @method \App\Model\Entity\LegacyImage newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyImage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LegacyImage get($primaryKey, $options = [])
 * @method \App\Model\Entity\LegacyImage findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\LegacyImage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyImage[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\LegacyImage|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyImage saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LegacyImage[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyImage[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyImage[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\LegacyImage[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class LegacyImagesTable extends Table
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

        $this->setTable('legacy_images');
        $this->setDisplayField('title');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Items', [
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
            ->scalar('img_file')
            ->maxLength('img_file', 35)
            ->allowEmptyFile('img_file');

        $validator
            ->integer('id')
            ->requirePresence('id', 'create')
            ->notEmptyString('id')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('mimetype')
            ->maxLength('mimetype', 40)
            ->allowEmptyString('mimetype');

        $validator
            ->allowEmptyFile('filesize');

        $validator
            ->integer('width')
            ->allowEmptyString('width');

        $validator
            ->integer('height')
            ->allowEmptyString('height');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->allowEmptyString('title');

        $validator
            ->allowEmptyString('date');

        $validator
            ->scalar('alt')
            ->maxLength('alt', 255)
            ->allowEmptyString('alt');

        $validator
            ->scalar('dir')
            ->maxLength('dir', 255)
            ->allowEmptyString('dir');

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
        $rules->add($rules->isUnique(['id']));
        $rules->add($rules->existsIn(['item_id'], 'Items'));

        return $rules;
    }
}
