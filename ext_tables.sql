#
# Table structure for table 'tx_photothequevmrtamsdraal_domain_model_photo'
#
CREATE TABLE tx_photothequevmrtamsdraal_domain_model_photo (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	file int(11) unsigned NOT NULL default '0',
	shooting_date int(11) DEFAULT '0' NOT NULL,
	author varchar(255) DEFAULT '' NOT NULL,
	place varchar(255) DEFAULT '' NOT NULL,
	models text,
	tags int(11) unsigned DEFAULT '0' NOT NULL,
	comments int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_photothequevmrtamsdraal_domain_model_album'
#
CREATE TABLE tx_photothequevmrtamsdraal_domain_model_album (

	title varchar(255) DEFAULT '' NOT NULL,
	description text,
	shooting_date int(11) DEFAULT '0' NOT NULL,
	thumbmail int(11) unsigned NOT NULL default '0',
	photos int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_photothequevmrtamsdraal_domain_model_tag'
#
CREATE TABLE tx_photothequevmrtamsdraal_domain_model_tag (

	title varchar(255) DEFAULT '' NOT NULL,
	color int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_photothequevmrtamsdraal_domain_model_comment'
#
CREATE TABLE tx_photothequevmrtamsdraal_domain_model_comment (

	photo int(11) unsigned DEFAULT '0' NOT NULL,

	author varchar(255) DEFAULT '' NOT NULL,
	content text,
	mark int(11) DEFAULT '0' NOT NULL,
	date int(11) DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_photothequevmrtamsdraal_photo_tag_mm'
#
CREATE TABLE tx_photothequevmrtamsdraal_photo_tag_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_photothequevmrtamsdraal_album_photo_mm'
#
CREATE TABLE tx_photothequevmrtamsdraal_album_photo_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
