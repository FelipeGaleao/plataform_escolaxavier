<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enrollment $enrollment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enrollment'), ['action' => 'edit', $enrollment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enrollment'), ['action' => 'delete', $enrollment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['controller' => 'Grades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['controller' => 'Grades', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enrollments view large-9 medium-8 columns content">
    <h3><?= h($enrollment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($enrollment->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $enrollment->has('course') ? $this->Html->link($enrollment->course->name, ['controller' => 'Courses', 'action' => 'view', $enrollment->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= $enrollment->has('subject') ? $this->Html->link($enrollment->subject->name, ['controller' => 'Subjects', 'action' => 'view', $enrollment->subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $enrollment->has('student') ? $this->Html->link($enrollment->student->name, ['controller' => 'Students', 'action' => 'view', $enrollment->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enrollment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($enrollment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($enrollment->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Grades') ?></h4>
        <?php if (!empty($enrollment->grades)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Grade Value') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Enrollment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($enrollment->grades as $grades): ?>
            <tr>
                <td><?= h($grades->id) ?></td>
                <td><?= h($grades->name) ?></td>
                <td><?= h($grades->description) ?></td>
                <td><?= h($grades->grade_value) ?></td>
                <td><?= h($grades->created) ?></td>
                <td><?= h($grades->modified) ?></td>
                <td><?= h($grades->enrollment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Grades', 'action' => 'view', $grades->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grades', 'action' => 'edit', $grades->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grades', 'action' => 'delete', $grades->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grades->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
