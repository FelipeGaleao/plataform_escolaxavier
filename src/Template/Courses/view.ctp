<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Course $course
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Course'), ['action' => 'edit', $course->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Course'), ['action' => 'delete', $course->id], ['confirm' => __('Are you sure you want to delete # {0}?', $course->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['controller' => 'Enrollments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['controller' => 'Enrollments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="courses view large-9 medium-8 columns content">
    <h3><?= h($course->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('School') ?></th>
            <td><?= $course->has('school') ? $this->Html->link($course->school->name, ['controller' => 'Schools', 'action' => 'view', $course->school->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($course->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($course->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($course->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($course->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($course->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($course->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Enrollments') ?></h4>
        <?php if (!empty($course->enrollments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Subject Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->enrollments as $enrollments): ?>
            <tr>
                <td><?= h($enrollments->id) ?></td>
                <td><?= h($enrollments->created) ?></td>
                <td><?= h($enrollments->modified) ?></td>
                <td><?= h($enrollments->status) ?></td>
                <td><?= h($enrollments->course_id) ?></td>
                <td><?= h($enrollments->subject_id) ?></td>
                <td><?= h($enrollments->student_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Enrollments', 'action' => 'view', $enrollments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Enrollments', 'action' => 'edit', $enrollments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enrollments', 'action' => 'delete', $enrollments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Subjects') ?></h4>
        <?php if (!empty($course->subjects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Course Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($course->subjects as $subjects): ?>
            <tr>
                <td><?= h($subjects->id) ?></td>
                <td><?= h($subjects->name) ?></td>
                <td><?= h($subjects->description) ?></td>
                <td><?= h($subjects->course_id) ?></td>
                <td><?= h($subjects->created) ?></td>
                <td><?= h($subjects->modified) ?></td>
                <td><?= h($subjects->active) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Subjects', 'action' => 'view', $subjects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Subjects', 'action' => 'edit', $subjects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Subjects', 'action' => 'delete', $subjects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subjects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
