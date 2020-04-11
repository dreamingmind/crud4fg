<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Images Model
 *
 * @property \App\Model\Table\SkusTable&\Cake\ORM\Association\BelongsTo $Skus
 * @property \App\Model\Table\ItemsTable&\Cake\ORM\Association\BelongsTo $Items
 * @property \App\Model\Table\PeopleTable&\Cake\ORM\Association\BelongsTo $People
 * @property \App\Model\Table\OldImagesTable&\Cake\ORM\Association\BelongsTo $OldImages
 * @property \App\Model\Table\LegacyCustomersTable&\Cake\ORM\Association\HasMany $LegacyCustomers
 *
 * @method \App\Model\Entity\Image newEmptyEntity()
 * @method \App\Model\Entity\Image newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Image[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Image get($primaryKey, $options = [])
 * @method \App\Model\Entity\Image findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Image patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Image[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Image|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Image[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImagesTable extends Table
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

        $this->setTable('images');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Skus', [
            'foreignKey' => 'sku_id',
        ]);
        $this->belongsTo('Items', [
            'foreignKey' => 'item_id',
        ]);
        $this->belongsTo('People', [
            'foreignKey' => 'person_id',
        ]);
        $this->belongsTo('OldImages', [
            'className' => 'LegacyImages',
'foreignKey' => 'old_image_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('LegacyCustomers', [
            'foreignKey' => 'image_id',
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
            ->scalar('img_file')
            ->maxLength('img_file', 255)
            ->requirePresence('img_file', 'create')
            ->notEmptyFile('img_file');

        $validator
            ->scalar('title')
            ->maxLength('title', 255)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('alt')
            ->maxLength('alt', 255)
            ->requirePresence('alt', 'create')
            ->notEmptyString('alt');

        $validator
            ->scalar('dir')
            ->maxLength('dir', 255)
            ->requirePresence('dir', 'create')
            ->notEmptyString('dir');

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
        $rules->add($rules->existsIn(['sku_id'], 'Skus'));
        $rules->add($rules->existsIn(['item_id'], 'Items'));
        $rules->add($rules->existsIn(['person_id'], 'People'));
        $rules->add($rules->existsIn(['old_image_id'], 'OldImages'));

        return $rules;
    }
}
