<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MappingLocations Model
 *
 * @property \App\Model\Table\LocationsTable&\Cake\ORM\Association\BelongsTo $Locations
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\MappingLocation newEmptyEntity()
 * @method \App\Model\Entity\MappingLocation newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\MappingLocation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MappingLocation get($primaryKey, $options = [])
 * @method \App\Model\Entity\MappingLocation findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\MappingLocation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MappingLocation[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\MappingLocation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingLocation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MappingLocation[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingLocation[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingLocation[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\MappingLocation[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MappingLocationsTable extends Table
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

        $this->setTable('mapping_locations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Locations', [
            'foreignKey' => 'location_id',
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
            ->integer('location_id')
            ->requirePresence('location_id', 'create')
            ->notEmptyString('location_id');

        $validator
            ->integer('profile_id')
            ->requirePresence('profile_id', 'create')
            ->notEmptyFile('profile_id');

        $validator
            ->requirePresence('room', 'create')
            ->notEmptyString('room');

        $validator
            ->allowEmptyString('floor');

        $validator
            ->allowEmptyString('office_hours');

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
        $rules->add($rules->existsIn('location_id', 'Locations'), ['errorField' => 'location_id']);
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);

        return $rules;
    }
}
