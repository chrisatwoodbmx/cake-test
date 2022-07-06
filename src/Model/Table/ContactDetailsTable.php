<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ContactDetails Model
 *
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 *
 * @method \App\Model\Entity\ContactDetail newEmptyEntity()
 * @method \App\Model\Entity\ContactDetail newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\ContactDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ContactDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\ContactDetail findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\ContactDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ContactDetail[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\ContactDetail|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactDetail saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ContactDetail[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactDetail[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactDetail[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\ContactDetail[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class ContactDetailsTable extends Table
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

        $this->setTable('contact_details');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

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
            ->integer('profile_id')
            ->requirePresence('profile_id', 'create')
            ->notEmptyFile('profile_id');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('telephone')
            ->maxLength('telephone', 16)
            ->requirePresence('telephone', 'create')
            ->notEmptyString('telephone');

        $validator
            ->allowEmptyString('personal_website');

        $validator
            ->allowEmptyString('blog');

        $validator
            ->scalar('linkedin')
            ->maxLength('linkedin', 30)
            ->allowEmptyString('linkedin');

        $validator
            ->scalar('twitter_username')
            ->maxLength('twitter_username', 15)
            ->allowEmptyString('twitter_username');

        $validator
            ->scalar('google_scholar')
            ->maxLength('google_scholar', 150)
            ->allowEmptyString('google_scholar');

        $validator
            ->scalar('acadamia')
            ->maxLength('acadamia', 150)
            ->allowEmptyString('acadamia');

        $validator
            ->scalar('research_gate')
            ->maxLength('research_gate', 150)
            ->allowEmptyString('research_gate');

        $validator
            ->scalar('orcid')
            ->maxLength('orcid', 150)
            ->allowEmptyString('orcid');

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

        return $rules;
    }
}
