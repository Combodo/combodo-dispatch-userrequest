<?php
//
// iTop module definition file
//

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'combodo-dispatch-userrequest/1.2.2',
	array(
		// Identification
		//
		'label' => 'Dispatch of User Request',
		'category' => 'business',

		// Setup
		//
		'dependencies' => array(
			'itop-request-mgmt/3.0.0||itop-request-mgmt-itil/3.0.0',
			'itop-profiles-itil/3.0.0'
		),
		'mandatory' => false,
		'visible' => true,

		// Components
		//
		'datamodel' => array(
			'model.combodo-dispatch-userrequest.php'
		),
		'webservice' => array(

		),
		'data.struct' => array(
			// add your 'structure' definition XML files here,
		),
		'data.sample' => array(
			// add your sample data XML files here,
		),

		// Documentation
		//
		'doc.manual_setup' => '', // hyperlink to manual setup documentation, if any
		'doc.more_information' => '', // hyperlink to more information, if any

		// Default settings
		//
		'settings' => array(
			// Module specific settings go here, if any
		),
	)
);


?>
