<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schools Model
 *
 * @property \App\Model\Table\CoursesTable|\Cake\ORM\Association\HasMany $Courses
 * @property \App\Model\Table\StudentsTable|\Cake\ORM\Association\HasMany $Students
 *
 * @method \App\Model\Entity\School get($primaryKey, $options = [])
 * @method \App\Model\Entity\School newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\School[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\School|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\School saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\School patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\School[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\School findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SchoolsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('schools');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Courses', [
            'foreignKey' => 'school_id'
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'school_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('name')
            ->allowEmptyString('name');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->scalar('address')
            ->allowEmptyString('address');

        $validator
            ->scalar('active')
            ->maxLength('active', 40)
            ->allowEmptyString('active');

        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        return $validator;
    }
}
