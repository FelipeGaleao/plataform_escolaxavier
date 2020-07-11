<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $cpf
 * @property string|null $email
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $school_id
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Enrollment[] $enrollments
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'cpf' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'school_id' => true,
        'school' => true,
        'enrollments' => true
    ];
}
