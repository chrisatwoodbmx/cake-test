<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MappingVisibilities Model
 *
 * @method \App\Model\Entity\MappingVisibility newEmptyEntity()
 * @method \App\Model\Entity\MappingVisibility newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MappingVisibility[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MappingVisibility get($primaryKey, $options = [])
 * @method \App\Model\Entity\MappingVisibility findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MappingVisibility patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MappingVisibility[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MappingVisibility|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingVisibility saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingVisibility[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingVisibility[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingVisibility[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingVisibility[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MappingVisibilitiesTable extends Table
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

        $this->setTable('mapping_visibilities');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Profiles', [
            'foreignKey' => 'visibility_id',
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
            ->scalar('name')
            ->maxLength('name', 15)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        return $validator;
    }
}