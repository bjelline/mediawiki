-- Add extra option fields to the ipblocks table, add some extra indexes, 
-- convert infinity values in ipb_expiry to something that sorts better, 
-- extend ipb_address and range fields, add a unique index for block conflict 
-- detection.

-- Conflicts in the new unique index can be handled by creating a new 
-- table and inserting into it instead of doing an ALTER TABLE.


DROP TABLE IF EXISTS /*$wgDBprefix*/ipblocks_newunique;

CREATE TABLE /*$wgDBprefix*/ipblocks_newunique (
  ipb_id int(8) NOT NULL auto_increment,
  ipb_address tinyblob NOT NULL default '',
  ipb_user int(8) unsigned NOT NULL default '0',
  ipb_by int(8) unsigned NOT NULL default '0',
  ipb_reason tinyblob NOT NULL default '',
  ipb_timestamp char(14) binary NOT NULL default '',
  ipb_auto boolean NOT NULL default 0,
  ipb_anon_only boolean NOT NULL default 0,
  ipb_create_account boolean NOT NULL default 1,
  ipb_expiry char(14) binary NOT NULL default '',
  ipb_range_start tinyblob NOT NULL default '',
  ipb_range_end tinyblob NOT NULL default '',
  
  PRIMARY KEY ipb_id (ipb_id),
  UNIQUE INDEX ipb_address_unique (ipb_address(255), ipb_user, ipb_auto),
  INDEX ipb_user (ipb_user),
  INDEX ipb_range (ipb_range_start(8), ipb_range_end(8)),
  INDEX ipb_timestamp (ipb_timestamp),
  INDEX ipb_expiry (ipb_expiry)

) TYPE=InnoDB;

INSERT IGNORE INTO /*$wgDBprefix*/ipblocks_newunique 
        (ipb_id, ipb_address, ipb_user, ipb_by, ipb_reason, ipb_timestamp, ipb_auto, ipb_expiry, ipb_range_start, ipb_range_end) 
  SELECT ipb_id, ipb_address, ipb_user, ipb_by, ipb_reason, ipb_timestamp, ipb_auto, ipb_expiry, ipb_range_start, ipb_range_end 
  FROM /*$wgDBprefix*/ipblocks;

DROP TABLE IF EXISTS /*$wgDBprefix*/ipblocks_old;
RENAME TABLE /*$wgDBprefix*/ipblocks TO /*$wgDBprefix*/ipblocks_old;
RENAME TABLE /*$wgDBprefix*/ipblocks_newunique TO /*$wgDBprefix*/ipblocks;

