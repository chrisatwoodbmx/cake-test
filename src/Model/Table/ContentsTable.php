<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contents Model
 *
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 * @property \App\Model\Table\CustomTabTitlesTable&\Cake\ORM\Association\BelongsTo $CustomTabTitles
 *
 * @method \App\Model\Entity\Content newEmptyEntity()
 * @method \App\Model\Entity\Content newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Content[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Content get($primaryKey, $options = [])
 * @method \App\Model\Entity\Content findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Content patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Content[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Content|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Content saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Content[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContentsTable extends Table
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

        $this->setTable('contents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CustomTabTitles', [
            'foreignKey' => 'custom_tab_title_id',
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
            ->integer('profile_id')
            ->requirePresence('profile_id', 'create')
            ->notEmptyFile('profile_id');

        $validator
            ->allowEmptyString('overview');

        $validator
            ->allowEmptyString('research');

        $validator
            ->allowEmptyString('teaching');

        $validator
            ->allowEmptyString('biography');

        $validator
            ->allowEmptyString('honours');

        $validator
            ->allowEmptyString('memberships');

        $validator
            ->allowEmptyString('academic_positions');

        $validator
            ->allowEmptyString('engagement');

        $validator
            ->allowEmptyString('committees');

        $validator
            ->integer('custom_tab_title_id')
            ->allowEmptyString('custom_tab_title_id');

        $validator
            ->allowEmptyString('custom_tab_content');

        $validator
            ->allowEmptyString('supervision');

        $validator
            ->allowEmptyString('past_supervision');

        $validator
            ->allowEmptyString('thesis_title');

        $validator
            ->allowEmptyString('thesis_content');

        $validator
            ->allowEmptyString('funding');

        $validator
            ->allowEmptyString('funding_sources');

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
        $rules->add($rules->existsIn('profile_id', 'Profiles'), ['errorField' => 'profile_id']);
        $rules->add($rules->existsIn('custom_tab_title_id', 'CustomTabTitles'), ['errorField' => 'custom_tab_title_id']);

        return $rules;
    }
}
