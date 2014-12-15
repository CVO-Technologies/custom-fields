<?php

//$fields = $this->requestAction(array('plugin' => 'custom_fields', 'controller' => 'type_fields', 'action' => 'index', 'type' => $type['Type']['alias']));
//
//debug($fields);
//
//foreach ($fields as $field):
//	$uuid = String::uuid();
//
//	$map = array(
//		'string' => 'text', 'datetime' => 'datetime',
//		'boolean' => 'checkbox', 'timestamp' => 'datetime',
//		'text' => 'textarea', 'time' => 'time',
//		'date' => 'date', 'float' => 'number',
//		'integer' => 'number', 'decimal' => 'number',
//		'binary' => 'file'
//	);
//
//	if (isset($map[$field['TypeField']['type']])) {
//		$valueType = $map[$field['TypeField']['type']];
//	}
//
////	if ($id != null) {
////		echo $this->Form->input('Meta.' . $uuid . '.id', array('type' => 'hidden', 'value' => $id));
////		$this->Form->unlockField('Meta.' . $uuid . '.id');
////	}
//	echo $this->Form->input('Meta.' . $uuid . '.key', array(
//		'type' => 'hidden',
//		'value' => $field['TypeField']['name']
//	));
//	echo $this->Form->input('Meta.' . $uuid . '.value', array(
//		'label' => Inflector::humanize($field['TypeField']['name']),
//		'value' => (isset($this->request->data['CustomFields'][$field['TypeField']['name']])) ? $this->request->data['CustomFields'][$field['TypeField']['name']] : $field['TypeField']['default'],
//		'type' => $valueType
//	));
//	$this->Form->unlockField('Meta.' . $uuid . '.key');
//	$this->Form->unlockField('Meta.' . $uuid . '.value');
//
//endforeach;
