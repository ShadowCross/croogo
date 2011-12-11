<?php
echo $this->requestAction("/contacts/view/testimonials/", array(
	'return',
	'form' => array(
		'title' => array(
			'type' => 'date',
			'label' => __('Date of event', true),
			'maxYear' => date('Y'),
			'empty' => true
		),
		'body' => array(
			'label' => __('Comments', true)
		),
		'phone' => array(
			'label' => __('Your phone', true)
		)
	)
));