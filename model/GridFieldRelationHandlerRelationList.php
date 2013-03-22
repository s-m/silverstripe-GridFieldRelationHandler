<?php

class GridFieldManyRelationHandler_HasManyList extends HasManyList {
	public function __construct() {

	}

	public function getForeignKey(HasManyList $on) {
		return $on->foreignKey;
	}

	public function getForeignIDFilter(RelationList $on) {
		return $on->foreignIDFilter();
	}
}
