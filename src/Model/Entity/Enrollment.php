<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enrollment Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $status
 * @property int $course_id
 * @property int $subject_id
 * @property int $student_id
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Subject $subject
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Grade[] $grades
 */
class Enrollment extends Entity
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
        'created' => true,
        'modified' => true,
        'status' => true,
        'course_id' => true,
        'subject_id' => true,
        'student_id' => true,
        'course' => true,
        'subject' => true,
        'student' => true,
        'grades' => true
    ];
}
