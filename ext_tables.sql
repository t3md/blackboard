CREATE TABLE tx_blackboard_domain_model_offer (
	title varchar(512) NOT NULL DEFAULT '',
	author varchar(255) NOT NULL DEFAULT '',
	email varchar(255) NOT NULL DEFAULT '',
	description text NOT NULL DEFAULT '',
	kind int(11) NOT NULL DEFAULT '0',
	image int(11) unsigned NOT NULL DEFAULT '0',
	file int(11) unsigned NOT NULL DEFAULT '0',
	tel varchar(255) NOT NULL DEFAULT '',
	authoruid int(11) unsigned NOT NULL DEFAULT '0',
);
