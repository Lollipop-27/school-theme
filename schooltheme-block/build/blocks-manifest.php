<?php
// This file is generated. Do not modify it manually.
return array(
	'schooltheme-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'fwd-blocks/schooltheme-block',
		'version' => '0.1.0',
		'title' => 'School Theme Block',
		'category' => 'widgets',
		'icon' => 'arrow-down-alt',
		'description' => 'Used to wrap blocks that animate when scrolled to the viewport',
		'example' => array(
			
		),
		'supports' => array(
			'html' => false
		),
		'attributes' => array(
			'animation' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		),
		'textdomain' => 'schooltheme-block',
		'editorScript' => 'file:./index.js',
		'editorStyle' => 'file:./index.css',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
