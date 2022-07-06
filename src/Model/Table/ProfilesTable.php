<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Profiles Model
 *
 * @property \App\Model\Table\MappingVisibilitiesTable&\Cake\ORM\Association\BelongsTo $MappingVisibilities
 * @property \App\Model\Table\TitlesTable&\Cake\ORM\Association\BelongsTo $Titles
 * @property \App\Model\Table\PostNominalsTable&\Cake\ORM\Association\BelongsTo $PostNominals
 * @property \App\Model\Table\PronounsTable&\Cake\ORM\Association\BelongsTo $Pronouns
 * @property \App\Model\Table\ActivitiesTable&\Cake\ORM\Association\HasMany $Activities
 * @property \App\Model\Table\ContactDetailsTable&\Cake\ORM\Association\HasMany $ContactDetails
 * @property \App\Model\Table\ContentsTable&\Cake\ORM\Association\HasMany $Contents
 * @property \App\Model\Table\HistoryAuditsTable&\Cake\ORM\Association\HasMany $HistoryAudits
 * @property \App\Model\Table\MappingExpertisesTable&\Cake\ORM\Association\HasMany $MappingExpertises
 * @property \App\Model\Table\MappingJobTitlesTable&\Cake\ORM\Association\HasMany $MappingJobTitles
 * @property \App\Model\Table\MappingLocationsTable&\Cake\ORM\Association\HasMany $MappingLocations
 * @property \App\Model\Table\MappingOrganisationsTable&\Cake\ORM\Association\HasMany $MappingOrganisations
 * @property \App\Model\Table\MappingResearchGroupsTable&\Cake\ORM\Association\HasMany $MappingResearchGroups
 * @property \App\Model\Table\MappingSpecialismsTable&\Cake\ORM\Association\HasMany $MappingSpecialisms
 * @property \App\Model\Table\MappingSpokenLanguagesTable&\Cake\ORM\Association\HasMany $MappingSpokenLanguages
 * @property \App\Model\Table\MappingTeamsTable&\Cake\ORM\Association\HasMany $MappingTeams
 *
 * @method \App\Model\Entity\Profile newEmptyEntity()
 * @method \App\Model\Entity\Profile newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Profile get($primaryKey, $options = [])
 * @method \App\Model\Entity\Profile findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Profile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Profile[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Profile|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Profile[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ProfilesTable extends Table
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

        $this->setTable('profiles');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('MappingVisibilities', [
            'foreignKey' => 'visibility_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Titles', [
            'foreignKey' => 'title_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('PostNominals', [
            'foreignKey' => 'post_nominal_id',
        ]);
        $this->belongsTo('Pronouns', [
            'foreignKey' => 'pronoun_id',
        ]);
        $this->hasMany('Activities', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('ContactDetails', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('Contents', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('HistoryAudits', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingExpertises', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingJobTitles', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingLocations', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingOrganisations', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingResearchGroups', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingSpecialisms', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingSpokenLanguages', [
            'foreignKey' => 'profile_id',
        ]);
        $this->hasMany('MappingTeams', [
            'foreignKey' => 'profile_id',
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
            ->uuid('uuid')
            ->requirePresence('uuid', 'create')
            ->notEmptyString('uuid')
            ->add('uuid', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('username')
            ->maxLength('username', 25)
            ->requirePresence('username', 'create')
            ->notEmptyString('username');

        $validator
            ->integer('profile_type')
            ->notEmptyFile('profile_type');

        $validator
            ->integer('visibility_id')
            ->requirePresence('visibility_id', 'create')
            ->notEmptyString('visibility_id');

        $validator
            ->integer('title_id')
            ->requirePresence('title_id', 'create')
            ->notEmptyString('title_id');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 150)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('middle_name')
            ->maxLength('middle_name', 150)
            ->requirePresence('middle_name', 'create')
            ->notEmptyString('middle_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 150)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->allowEmptyString('known_as');

        $validator
            ->boolean('is_media_expert')
            ->notEmptyString('is_media_expert');

        $validator
            ->boolean('is_welsh_speaker')
            ->notEmptyString('is_welsh_speaker');

        $validator
            ->boolean('available_supervise')
            ->notEmptyString('available_supervise');

        $validator
            ->boolean('archived')
            ->notEmptyString('archived');

        $validator
            ->boolean('inactive')
            ->notEmptyString('inactive');

        $validator
            ->integer('post_nominal_id')
            ->allowEmptyString('post_nominal_id');

        $validator
            ->integer('pronoun_id')
            ->allowEmptyString('pronoun_id');

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
        $rules->add($rules->isUnique(['username']), ['errorField' => 'username']);
        $rules->add($rules->isUnique(['uuid']), ['errorField' => 'uuid']);
        $rules->add($rules->existsIn('visibility_id', 'MappingVisibilities'), ['errorField' => 'visibility_id']);
        $rules->add($rules->existsIn('title_id', 'Titles'), ['errorField' => 'title_id']);
        $rules->add($rules->existsIn('post_nominal_id', 'PostNominals'), ['errorField' => 'post_nominal_id']);
        $rules->add($rules->existsIn('pronoun_id', 'Pronouns'), ['errorField' => 'pronoun_id']);

        return $rules;
    }
}
