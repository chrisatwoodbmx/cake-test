<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ResearchGroups Model
 *
 * @property \App\Model\Table\ResearchGroupsTable&\Cake\ORM\Association\BelongsTo $ParentResearchGroups
 * @property \App\Model\Table\MappingResearchGroupsTable&\Cake\ORM\Association\HasMany $MappingResearchGroups
 * @property \App\Model\Table\ResearchGroupsTable&\Cake\ORM\Association\HasMany $ChildResearchGroups
 *
 * @method \App\Model\Entity\ResearchGroup newEmptyEntity()
 * @method \App\Model\Entity\ResearchGroup newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ResearchGroup[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ResearchGroup get($primaryKey, $options = [])
 * @method \App\Model\Entity\ResearchGroup findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ResearchGroup patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ResearchGroup[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ResearchGroup|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResearchGroup saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ResearchGroup[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ResearchGroup[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ResearchGroup[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ResearchGroup[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ResearchGroupsTable extends Table
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

        $this->setTable('research_groups');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('ParentResearchGroups', [
            'className' => 'ResearchGroups',
            'foreignKey' => 'parent_id',
        ]);
        $this->hasMany('MappingResearchGroups', [
            'foreignKey' => 'research_group_id',
        ]);
        $this->hasMany('ChildResearchGroups', [
            'className' => 'ResearchGroups',
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
        $rules->add($rules->existsIn('parent_id', 'ParentResearchGroups'), ['errorField' => 'parent_id']);

        return $rules;
    }
}
