<div class="cru">
	<div class="btn-options">
		<?php echo $this->Html->link('<i class="glyphicon glyphicon-list icon-white"></i>&nbsp;' . __('Back to List'), array('action' => 'index', 'admin' => true), array('class' => 'btn btn-primary', 'escape' => FALSE)); ?>	
	</div>
	<?php echo $this->Form->create('AttributeType'); ?>
	<fieldset>
		<legend><?php echo __d('attributes', 'Add Attribute Type'); ?></legend>
		<div class="col-md-3">
			<?php
			echo $this->Form->input('entity_id');
			echo $this->Form->input('code');
			echo $this->Form->input('regexp_validation');
			echo $this->Form->input('message');
			echo $this->Form->input('ordering');
			echo $this->Form->input('is_public');
			echo $this->Form->input('is_multiple');
			echo $this->Form->input('is_required');
			echo $this->Form->input('use_option');
			echo $this->Form->input('input_type', array('type' => 'select', 'options' => array('1' => 'Input text', '2' => 'Input select', '3' => 'Input radio', '4' => 'Input checkbox')));
			echo $this->Form->input('moment', array('type' => 'select', 'options' => array('create' => __('Created'), 'update' => __('Update'), 'both' => __('Both'))));
			?>
		</div>
	</fieldset>	
	<?php echo $this->Form->end(array('label' => __('Save'), 'class' => 'btn btn-primary')); ?>
</div>
