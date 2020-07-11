<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['controller' => 'Enrollments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['controller' => 'Enrollments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="subjects view large-9 medium-8 columns content">
    <h3><?= h($subject->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($subject->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($subject->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $subject->has('course') ? $this->Html->link($subject->course->name, ['controller' => 'Courses', 'action' => 'view', $subject->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($subject->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($subject->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($subject->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($subject->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Enrollments') ?></h4>
        <?php if (!empty($subject->enrollments)): ?>
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
            <?php foreach ($subject->enrollments as $enrollments): ?>
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
</div>
