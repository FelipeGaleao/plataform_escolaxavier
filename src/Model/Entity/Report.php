<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Report Entity
 *
 * @property int $id
 * @property int|null $course_id
 * @property int|null $subject_id
 * @property string|null $average_final
 * @property string|null $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int|null $student_id
 *
 * @property \App\Model\Entity\Course $course
 * @property \App\Model\Entity\Subject $subject
 */
class Report extends Entity
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
        'course_id' => true,
        'subject_id' => true,
        'average_final' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'student_id' => true,
        'course' => true,
        'subject' => true
    ];
}
