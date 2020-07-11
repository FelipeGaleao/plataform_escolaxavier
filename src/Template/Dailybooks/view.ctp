<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailybook $dailybook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dailybook'), ['action' => 'edit', $dailybook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dailybook'), ['action' => 'delete', $dailybook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dailybook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Dailybooks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dailybook'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dailybooks view large-9 medium-8 columns content">
    <h3><?= h($dailybook->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Course') ?></th>
            <td><?= $dailybook->has('course') ? $this->Html->link($dailybook->course->name, ['controller' => 'Courses', 'action' => 'view', $dailybook->course->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subject') ?></th>
            <td><?= $dailybook->has('subject') ? $this->Html->link($dailybook->subject->name, ['controller' => 'Subjects', 'action' => 'view', $dailybook->subject->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dailybook->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dailybook->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dailybook->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Data') ?></h4>
        <?= $this->Text->autoParagraph(h($dailybook->data)); ?>
    </div>
</div>
