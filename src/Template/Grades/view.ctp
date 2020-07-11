<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grade $grade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grade'), ['action' => 'edit', $grade->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grade'), ['action' => 'delete', $grade->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grade->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grades'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grade'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['controller' => 'Enrollments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['controller' => 'Enrollments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grades view large-9 medium-8 columns content">
    <h3><?= h($grade->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Grade Value') ?></th>
            <td><?= h($grade->grade_value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Enrollment') ?></th>
            <td><?= $grade->has('enrollment') ? $this->Html->link($grade->enrollment->id, ['controller' => 'Enrollments', 'action' => 'view', $grade->enrollment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grade->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($grade->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($grade->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Name') ?></h4>
        <?= $this->Text->autoParagraph(h($grade->name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($grade->description)); ?>
    </div>
</div>
