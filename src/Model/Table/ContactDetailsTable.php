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
 * @property \App\Model\Table\LinkedinsTable&\Cake\ORM\Association\BelongsTo $Linkedins
 * @property \App\Model\Table\GoogleScholarsTable&\Cake\ORM\Association\BelongsTo $GoogleScholars
 * @property \App\Model\Table\AcadamiasTable&\Cake\ORM\Association\BelongsTo $Acadamias
 * @property \App\Model\Table\OrcidsTable&\Cake\ORM\Association\BelongsTo $Orcids
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
        $this->belongsTo('Linkedins', [
            'foreignKey' => 'linkedin_id',
        ]);
        $this->belongsTo('GoogleScholars', [
            'foreignKey' => 'google_scholar_id',
        ]);
        $this->belongsTo('Acadamias', [
            'foreignKey' => 'acadamia_id',
        ]);
        $this->belongsTo('Orcids', [
            'foreignKey' => 'orcid_id',
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
            ->scalar('linkedin_id')
            ->maxLength('linkedin_id', 30)
            ->allowEmptyString('linkedin_id');

        $validator
            ->scalar('twitter_username')
            ->maxLength('twitter_username', 15)
            ->allowEmptyString('twitter_username');

        $validator
            ->scalar('google_scholar_id')
            ->maxLength('google_scholar_id', 150)
            ->allowEmptyString('google_scholar_id');

        $validator
            ->scalar('acadamia_id')
            ->maxLength('acadamia_id', 150)
            ->allowEmptyString('acadamia_id');

        $validator
            ->scalar('research_gate')
            ->maxLength('research_gate', 150)
            ->allowEmptyString('research_gate');

        $validator
            ->scalar('orcid_id')
            ->maxLength('orcid_id', 150)
            ->allowEmptyString('orcid_id');

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
        $rules->add($rules->existsIn('linkedin_id', 'Linkedins'), ['errorField' => 'linkedin_id']);
        $rules->add($rules->existsIn('google_scholar_id', 'GoogleScholars'), ['errorField' => 'google_scholar_id']);
        $rules->add($rules->existsIn('acadamia_id', 'Acadamias'), ['errorField' => 'acadamia_id']);
        $rules->add($rules->existsIn('orcid_id', 'Orcids'), ['errorField' => 'orcid_id']);

        return $rules;
    }
}
