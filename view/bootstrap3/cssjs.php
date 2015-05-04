<?php
$cssjs = $this->getModel('cssjs');
$cssjs->register_css('sitestyle', array(
    'src' => __WWW_ROOT_BOOTSTRAP3MATERIALQ13__ . '/skin/css/style.css'
));
$this->getParentBlock($data, $request);
