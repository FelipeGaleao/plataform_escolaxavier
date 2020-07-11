<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dailybook $dailybook
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dailybooks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subjects'), ['controller' => 'Subjects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subject'), ['controller' => 'Subjects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dailybooks form large-9 medium-8 columns content">
    <?= $this->Form->create($dailybook) ?>
    <fieldset>
        <legend><?= __('Add Dailybook') ?></legend>
        <?php
            echo $this->Form->control('course_id', ['options' => $courses, 'empty' => true]);
            echo $this->Form->control('subject_id', ['options' => $subjects, 'empty' => true]);
            echo $this->Form->control('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
