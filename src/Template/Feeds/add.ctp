<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Feeds'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="feeds form large-9 medium-8 columns content">
    <?= $this->Form->create($feed) ?>
    <fieldset>
        <legend><?= __('Add Feed') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('thumbnail');
            echo $this->Form->input('summary');
            echo $this->Form->input('time_created');
            echo $this->Form->input('alias');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
