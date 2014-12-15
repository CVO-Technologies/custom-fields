<?php

class TypeFieldsController extends AppController {

	public function admin_index() {
		return $this->TypeField->find('all', array(
			'conditions' => array(
				$this->TypeField->alias . '.type_alias' => $this->request->params['named']['type']
			)
		));
	}

}