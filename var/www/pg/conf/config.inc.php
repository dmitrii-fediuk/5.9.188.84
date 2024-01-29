<?php
# 2024-01-29 "Refactor `config.inc.php` for phpPgAdmin": https://github.com/dmitrii-fediuk/5.9.188.84/issues/57
if (!function_exists('df_servers')) {
	/**
	 * @param array(string => int) $ss
	 * @return array(array(string => string|int))
	 */
	function df_servers(array $ss):array {return array_map(function(string $desc, int $port):array {return [
		'defaultdb' => 'discourse'
		,'desc' => $desc
		,'host' => 'localhost'
		,'pg_dump_path' => '/usr/bin/pg_dump'
		,'pg_dumpall_path' => '/usr/bin/pg_dumpall'
		,'port' => $port
		,'sslmode' => 'allow'
	]; }, array_keys($ss), array_values($ss));}
}
$conf['servers'] = df_servers([
	'mage2.ru' => 14578
	,'discourse-forum.ru' => 14579
	,'mage2.pro' => 14580
	,'discourse.pro' => 14581
	,'df.tips' => 14582
	,'oplatform.club' => 14583
	,'maian.family' => 14584
	,'rc.plus' => 14585
	,'dmitry.ai' => 14587
	,'rpa.how' => 14588
]);
$conf['default_lang'] = 'auto';
$conf['autocomplete'] = 'default on';
$conf['extra_login_security'] = false;
$conf['owned_only'] = false;
$conf['show_comments'] = true;
$conf['show_advanced'] = false;
$conf['show_system'] = false;
$conf['min_password_length'] = 1;
$conf['left_width'] = 200;
$conf['theme'] = 'default';
$conf['show_oids'] = false;
$conf['max_rows'] = 30;
$conf['max_chars'] = 50;
$conf['use_xhtml_strict'] = false;
$conf['help_base'] = 'http://www.postgresql.org/docs/%s/interactive/';
$conf['ajax_refresh'] = 3;
$conf['plugins'] = [];
$conf['version'] = 19;