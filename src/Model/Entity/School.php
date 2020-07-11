<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * School Entity
 *
 * @property string|null $name
 * @property string|null $description
 * @property string|null $address
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $active
 * @property int $id
 *
 * @property \App\Model\Entity\Course[] $courses
 * @property \App\Model\Entity\Student[] $students
 */
class School extends Entity
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
        'address' => true,
        'created' => true,
        'modified' => true,
        'active' => true,
        'courses' => true,
        'students' => true
    ];
}
