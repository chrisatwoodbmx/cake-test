<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MappingOrganisations Model
 *
 * @property \App\Model\Table\OrganisationsTable&\Cake\ORM\Association\BelongsTo $Organisations
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\MappingOrganisation newEmptyEntity()
 * @method \App\Model\Entity\MappingOrganisation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MappingOrganisation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MappingOrganisation get($primaryKey, $options = [])
 * @method \App\Model\Entity\MappingOrganisation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MappingOrganisation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MappingOrganisation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MappingOrganisation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingOrganisation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingOrganisation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingOrganisation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingOrganisation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingOrganisation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MappingOrganisationsTable extends Table
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

        $this->setTable('mapping_organisations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Organisations', [
            'foreignKey' => 'organisation_id',
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
            ->integer('organisation_id')
            ->requirePresence('organisation_id', 'create')
            ->notEmptyString('organisation_id');

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
        $rules->add($rules->existsIn('organisation_id', 'Organisations'), ['errorField' => 'organisation_id']);
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);

        return $rules;
    }
}
