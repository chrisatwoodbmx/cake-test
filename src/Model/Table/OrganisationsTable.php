<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organisations Model
 *
 * @property \App\Model\Table\OrganisationsTable&\Cake\ORM\Association\BelongsTo $ParentOrganisations
 * @property \App\Model\Table\MappingOrganisationsTable&\Cake\ORM\Association\HasMany $MappingOrganisations
 * @property \App\Model\Table\OrganisationsTable&\Cake\ORM\Association\HasMany $ChildOrganisations
 *
 * @method \App\Model\Entity\Organisation newEmptyEntity()
 * @method \App\Model\Entity\Organisation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Organisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organisation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Organisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organisation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organisation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organisation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organisation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organisation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Organisation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class OrganisationsTable extends Table
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

        $this->setTable('organisations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentOrganisations', [
            'className' => 'Organisations',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('MappingOrganisations', [
            'foreignKey' => 'organisation_id',
        ]);
        $this->hasMany('ChildOrganisations', [
            'className' => 'Organisations',
            'foreignKey' => 'parent_id',
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
            ->integer('parent_id')
            ->allowEmptyString('parent_id');

        $validator
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['name']), ['errorField' => 'name']);
        $rules->add($rules->existsIn('parent_id', 'ParentOrganisations'), ['errorField' => 'parent_id']);

        return $rules;
    }
}
