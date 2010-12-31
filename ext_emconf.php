<?php

########################################################################
# Extension Manager/Repository config file for ext "scheduler_http".
#
# Auto generated 31-12-2010 11:29
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Scheduler via HTTP',
	'description' => 'Invoke scheduler via HTTP-Request',
	'category' => 'misc',
	'author' => 'Gernot Leitgab',
	'author_email' => 'leitgab@gmail.com',
	'shy' => '',
	'dependencies' => 'scheduler',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'scheduler' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:5:{s:12:"ext_icon.gif";s:4:"97d0";s:17:"ext_localconf.php";s:4:"b455";s:17:"doc/manual.de.sxw";s:4:"a40c";s:14:"doc/manual.sxw";s:4:"1dc8";s:34:"eid/class.tx_schedulerhttp_eid.php";s:4:"ef50";}',
	'suggests' => array(
	),
);

?>