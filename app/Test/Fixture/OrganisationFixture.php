<?php
/**
 * OrganisationFixture
 *
 */
class OrganisationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ID_legacy' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 5, 'comment' => 'legacy'),
		'constituent_ref' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'fullname' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cat' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 19, 'collate' => 'utf8_general_ci', 'comment' => 'legacy', 'charset' => 'utf8'),
		'organisation_category_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'Type' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'comment' => 'legacy', 'charset' => 'utf8'),
		'organisation_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'sector' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 25, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'sharing_group' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'legacy', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'functional_contact' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PGP' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'security' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'head_of_IT' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IT_security_depts' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'head_of_security' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'IT_security_incident_handling' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'technico_operational_contact' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'crypto' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 7, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'cooperation' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'malware_analysis' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'communicated_alerts' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 3, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'agreement_details' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 72, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'AAPT',
			'ID_legacy' => '77',
			'constituent_ref' => '0',
			'fullname' => 'Australian ISP',
			'cat' => 'IT-security vendor',
			'organisation_category_id' => '1',
			'Type' => 'Private',
			'organisation_type_id' => '1',
			'sector' => 'IT - ISP',
			'sharing_group' => '',
			'country' => '',
			'country_id' => '1',
			'functional_contact' => 'www.abuse.ch',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '2',
			'name' => 'ABUSECH',
			'ID_legacy' => '0',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'IT-security partner',
			'organisation_category_id' => '6',
			'Type' => 'Private',
			'organisation_type_id' => '0',
			'sector' => 'IT - security',
			'sharing_group' => 'Group3 - No NDA',
			'country' => '',
			'country_id' => '0',
			'functional_contact' => 'www.abuse.ch',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => 'Abusehelper',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '3',
			'name' => 'ACER',
			'ID_legacy' => '0',
			'constituent_ref' => '17',
			'fullname' => 'Agency for the Cooperation of Energy Regulators (at planning stage) (ACER)',
			'cat' => 'Constituent',
			'organisation_category_id' => '0',
			'Type' => 'Public',
			'organisation_type_id' => '0',
			'sector' => 'Energy',
			'sharing_group' => '',
			'country' => '',
			'country_id' => '0',
			'functional_contact' => 'cert-eu@acer.europa.eu',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => 'Alexandros Kaltsogiannis, alexandros.kaltsogiannis@acer.europa.eu
+386 82 053 391',
			'IT_security_depts' => 'Stylianos Dolopikos, Stylianos.Dolopikos@acer.europa.eu, +386 8205 3603, 
Alexandros Kaltsogiannis, alexandros.kaltsogiannis@acer.europa.eu
+386 82 053 391, Stefano Bracco, Stefano.BRACCO@acer.europa.eu, +386 8205 3405',
			'head_of_security' => 'Stylianos Dolopikos, Stylianos.Dolopikos@acer.europa.eu, +386 8205 3603,
 Alexandros Kaltsogiannis, alexandros.kaltsogiannis@acer.europa.eu
+386 82 053 391
Stefano Bracco, Stefano.BRACCO@acer.europa.eu, +386 8205 3405',
			'IT_security_incident_handling' => 'Alexandros Kaltsogiannis, alexandros.kaltsogiannis@acer.europa.eu
+386 82 053 391, Stylianos Dolopikos, Stylianos.Dolopikos@acer.europa.eu, +386 8205 3603,  Stefano Bracco, Stefano.BRACCO@acer.europa.eu, +386 8205 3405',
			'technico_operational_contact' => '',
			'crypto' => 'Unknown',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '4',
			'name' => 'Adobe',
			'ID_legacy' => '69',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'Other',
			'organisation_category_id' => '0',
			'Type' => 'Private',
			'organisation_type_id' => '0',
			'sector' => 'IT',
			'sharing_group' => '',
			'country' => 'United States of America',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '5',
			'name' => 'Afghanistan',
			'ID_legacy' => '0',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'Country',
			'organisation_category_id' => '0',
			'Type' => 'Country',
			'organisation_type_id' => '0',
			'sector' => 'Country',
			'sharing_group' => '',
			'country' => '',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '6',
			'name' => 'AFP',
			'ID_legacy' => '0',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'News',
			'organisation_category_id' => '0',
			'Type' => 'Private',
			'organisation_type_id' => '0',
			'sector' => 'News - Media',
			'sharing_group' => '',
			'country' => 'France',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '7',
			'name' => 'Albania',
			'ID_legacy' => '0',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'Country',
			'organisation_category_id' => '0',
			'Type' => 'Country',
			'organisation_type_id' => '0',
			'sector' => 'Country',
			'sharing_group' => '',
			'country' => '',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '8',
			'name' => 'Algeria',
			'ID_legacy' => '0',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'Country',
			'organisation_category_id' => '0',
			'Type' => 'Country',
			'organisation_type_id' => '0',
			'sector' => 'Country',
			'sharing_group' => '',
			'country' => '',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '9',
			'name' => 'AlienVault',
			'ID_legacy' => '0',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'IT-security vendor',
			'organisation_category_id' => '0',
			'Type' => 'Private',
			'organisation_type_id' => '0',
			'sector' => 'IT - security',
			'sharing_group' => '',
			'country' => 'United States of America',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
		array(
			'id' => '10',
			'name' => 'Al-Jazeera',
			'ID_legacy' => '71',
			'constituent_ref' => '0',
			'fullname' => '',
			'cat' => 'News',
			'organisation_category_id' => '0',
			'Type' => 'Private',
			'organisation_type_id' => '0',
			'sector' => 'News - Media',
			'sharing_group' => '',
			'country' => '',
			'country_id' => '0',
			'functional_contact' => '',
			'PGP' => '',
			'security' => '',
			'head_of_IT' => '',
			'IT_security_depts' => '',
			'head_of_security' => '',
			'IT_security_incident_handling' => '',
			'technico_operational_contact' => '',
			'crypto' => '',
			'cooperation' => '',
			'malware_analysis' => '',
			'communicated_alerts' => '',
			'agreement_details' => ''
		),
	);

}
