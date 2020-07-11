<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $active
 * @property int $school_id
 *
 * @property \App\Model\Entity\School $school
 * @property \App\Model\Entity\Enrollment[] $enrollments
 * @property \App\Model\Entity\Subject[] $subjects
 */
class Course extends Entity
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
        'description' => true,
        'created' => true,
        'modified' => true,
        'active' => true,
        'school_id' => true,
        'school' => true,
        'enrollments' => true,
        'subjects' => true
    ];
}
