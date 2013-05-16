<?php
/**
 * AttributeFixture
 *
 */
class AttributeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'Observable/Stateful Measure'),
		'IOC-id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'optional'),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index', 'comment' => 'optional'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'comment' => 'legacy', 'charset' => 'utf8'),
		'ioc_type_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'category' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'comment' => 'legacy', 'charset' => 'utf8'),
		'kill_chain_id' => array('type' => 'integer', 'null' => true, 'default' => null),
		'value1' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'notes' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'time_start' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'time_end' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'TTP_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'optional'),
		'threat_actor_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'optional'),
		'campaign_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'optional'),
		'export' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'CIMBL' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => 'legacy'),
		'blacklist' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'log_review' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'malware_eradication' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'vulnerability_management' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'to_ids' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'comment' => 'legacy'),
		'uuid' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'key' => 'index', 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'revision' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'private' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'cluster' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'communitie' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'value2' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_bin', 'charset' => 'utf8'),
		'dist_change' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'event_id' => array('column' => 'event_id', 'unique' => 0),
			'uuid' => array('column' => 'uuid', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_bin', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4',
			'IOC-id' => '1',
			'event_id' => '14',
			'type' => 'email-src',
			'ioc_type_id' => '0',
			'category' => 'Unknown',
			'kill_chain_id' => '0',
			'value1' => 'judyolsen@gci.net',
			'notes' => '',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 0,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '5',
			'IOC-id' => '2',
			'event_id' => '14',
			'type' => 'url',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => 'http://joananail.com/reconfirming.html',
			'notes' => 'Virus Total: \'Clean site 0 / 19\'
WoT: Not convinced about trust',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 1,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '6',
			'IOC-id' => '3',
			'event_id' => '15',
			'type' => 'email-src',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => '',
			'notes' => '',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 0,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '7',
			'IOC-id' => '4',
			'event_id' => '15',
			'type' => 'file',
			'ioc_type_id' => '0',
			'category' => '',
			'kill_chain_id' => '0',
			'value1' => 'VOTRENOTIFICATION DE GAIN.pdf (271 KB)',
			'notes' => '',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 0,
			'log_review' => 1,
			'malware_eradication' => 1,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '8',
			'IOC-id' => '5',
			'event_id' => '16',
			'type' => 'url',
			'ioc_type_id' => '0',
			'category' => 'Spamming host',
			'kill_chain_id' => '0',
			'value1' => 'http://62.75.181.232/~thomasal/images/authentification/VerifierVisa=5885d80a13c0db1fb6947b0aeae66fdbfb2119927117e3a6f876e0fd34af4365',
			'notes' => 'Virus Total: \'Clean site 0 / 19\'
WoT: Not convinced about trust',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 1,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '9',
			'IOC-id' => '6',
			'event_id' => '16',
			'type' => 'email-src',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => 'thomasa1@npulse1.infinitie.net',
			'notes' => 'WoT: Not convinced about trust',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 0,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '10',
			'IOC-id' => '7',
			'event_id' => '17',
			'type' => 'url',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => 'http://yourbabystore.info//wp-admin/includes/page.html',
			'notes' => 'Virus Total: \'Clean site 0 / 19\'
WoT: Not convinced about trust',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 1,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '11',
			'IOC-id' => '8',
			'event_id' => '17',
			'type' => 'email-src',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => 'asia1@server1.asia-fashions-wholesale.com',
			'notes' => '',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 0,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '12',
			'IOC-id' => '9',
			'event_id' => '18',
			'type' => 'url',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => 'http://www.mooform.com/form/4022',
			'notes' => 'Phishing site / malicious site (TrendMicro & Websense ThreatSeeker)
WoT: Not convinced about trust. Comments: used phishing (ex; paypal).',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 1,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
		array(
			'id' => '13',
			'IOC-id' => '10',
			'event_id' => '18',
			'type' => 'email-src',
			'ioc_type_id' => '0',
			'category' => 'Payload delivery',
			'kill_chain_id' => '0',
			'value1' => '',
			'notes' => '',
			'time_start' => '',
			'time_end' => '',
			'TTP_id' => '0',
			'threat_actor_id' => '0',
			'campaign_id' => '0',
			'export' => 0,
			'CIMBL' => '0',
			'blacklist' => 1,
			'log_review' => 1,
			'malware_eradication' => 0,
			'vulnerability_management' => 0,
			'to_ids' => 0,
			'uuid' => '',
			'revision' => '0',
			'private' => 0,
			'cluster' => 0,
			'communitie' => 0,
			'value2' => '',
			'dist_change' => '0'
		),
	);

}
