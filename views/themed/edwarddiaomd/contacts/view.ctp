<?php
if (!isset($this->params['requested'])) {
	// Standard view
	$this->params['requested'] = 0;
	$class = ' contacts-fullpage';
} else {
	$class = '';
}
?>
<div id="contact-<?php echo $contact['Contact']['id']; ?>" class="contact-<?php echo $contact['Contact']['alias'] . $class; ?>">
<?php if ($this->params['requested'] == 0) { // Standard view ?>
    <h2>Contact: <?php echo $contact['Contact']['title']; ?></h2>
<?php } ?>
	<div class="contact-content">
    <div class="contact-body">
    <?php echo $contact['Contact']['body']; ?>
    </div>

    <?php if ($contact['Contact']['message_status']) { ?>
    <div class="contact-form">
    <?php
        echo $this->Form->create('Message', array(
            'url' => array(
                'controller' => 'contacts',
                'action' => 'view',
                $contact['Contact']['alias'],
            ),
        ));
        echo $this->Form->input('Message.name', array('label' => __('Your name', true)));
        echo $this->Form->input('Message.email', array('label' => __('Your email', true)));
        $options = array('label' => __('Your Phone', true));
        if (isset($this->params['form']['phone'])) {
            $options = Set::merge($options, $this->params['form']['phone']);
        }
       	echo $this->Form->input('Message.phone', $options);
        $options = array('label' => __('Subject', true));
        if (isset($this->params['form']['title'])) {
        	$options = Set::merge($options, $this->params['form']['title']);
        }
        echo $this->Form->input('Message.title', $options);
        $options = array('label' => __('Message', true));
        if (isset($this->params['form']['body'])) {
        	$options = Set::merge($options, $this->params['form']['body']);
        }
        echo $this->Form->input('Message.body', $options);
        if ($contact['Contact']['message_captcha']) {
            echo $this->Recaptcha->display_form();
        }
        echo $this->Form->end(__('Send', true));
    ?>
    </div>
    </div>
    <?php } ?>
</div>