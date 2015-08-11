<?php

class CustomFieldHolderBehavior extends ModelBehavior {

	public function setup(Model $model, $config = array()) {
		$this->TypeField = ClassRegistry::init('CustomFields.TypeField');
	}


	public function afterFind(Model $model, $results, $primary = false) {
		foreach ($results as &$result) {
			if (!isset($result['Node'])) {
				continue;
			}

			if (!isset($result['Node']['type'])) {
				continue;
			}

			if (!isset($result['Meta'])) {
				continue;
			}

			$fields = $this->TypeField->find('all', array(
				'conditions' => array(
					$this->TypeField->alias . '.type_alias' => $result['Node']['type']
				)
			));

			foreach ($fields as $field) {
				if (!isset($result['CustomFields'][$field['TypeField']['name']])) {
					$result['CustomFields'][$field['TypeField']['name']] = null;
				}

				if (strlen($field['TypeField']['default']) > 0) {
					if ($result['CustomFields'][$field['TypeField']['name']] === null) {
						$result['CustomFields'][$field['TypeField']['name']] = $field['TypeField']['default'];
					}
				}

//				debug($result['CustomFields']);
			}

//			debug($fields);
		}

		return $results;
	}


}