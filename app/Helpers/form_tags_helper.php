<?php

if(!function_exists('form_tags')) {
	function form_tags($data, array $options) {
        $value = transform($data);
        return form_input('tags[]', $value ,$options);
	}
}

if(!function_exists('transform')) {
    function transform($data) {
        $result = [];
        if ($data !== null) {
            foreach($data as $v) {
                $res[$v->id] = $v->name;
            }
            return implode(',', $res);
        } else {
            return '';
        }
    }
}