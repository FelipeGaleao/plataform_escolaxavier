<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EnrollmentsFixture
 */
class EnrollmentsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'status' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'course_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'subject_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'student_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_enrollments_courses1_idx' => ['type' => 'index', 'columns' => ['course_id'], 'length' => []],
            'fk_enrollments_subjects1_idx' => ['type' => 'index', 'columns' => ['subject_id'], 'length' => []],
            'fk_enrollments_students1_idx' => ['type' => 'index', 'columns' => ['student_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_enrollments_courses1' => ['type' => 'foreign', 'columns' => ['course_id'], 'references' => ['courses', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_enrollments_students1' => ['type' => 'foreign', 'columns' => ['student_id'], 'references' => ['students', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_enrollments_subjects1' => ['type' => 'foreign', 'columns' => ['subject_id'], 'references' => ['subjects', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'created' => '2020-07-10 01:59:54',
                'modified' => '2020-07-10 01:59:54',
                'status' => 'Lorem ipsum dolor sit amet',
                'course_id' => 1,
                'subject_id' => 1,
                'student_id' => 1
            ],
        ];
        parent::init();
    }
}
