<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MappingExpertises Model
 *
 * @property \App\Model\Table\ExpertisesTable&\Cake\ORM\Association\BelongsTo $Expertises
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\MappingExpertise newEmptyEntity()
 * @method \App\Model\Entity\MappingExpertise newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MappingExpertise[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MappingExpertise get($primaryKey, $options = [])
 * @method \App\Model\Entity\MappingExpertise findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MappingExpertise patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MappingExpertise[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MappingExpertise|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingExpertise saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingExpertise[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingExpertise[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingExpertise[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingExpertise[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MappingExpertisesTable extends Table
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

        $this->setTable('mapping_expertises');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Expertises', [
            'foreignKey' => 'expertise_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
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
            ->integer('expertise_id')
            ->requirePresence('expertise_id', 'create')
            ->notEmptyString('expertise_id');

        $validator
            ->integer('profile_id')
            ->requirePresence('profile_id', 'create')
            ->notEmptyFile('profile_id');

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
        $rules->add($rules->existsIn('expertise_id', 'Expertises'), ['errorField' => 'expertise_id']);
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);

        return $rules;
    }
}
