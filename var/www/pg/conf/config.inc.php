<?php
if (!function_exists('df_servers')) {
	/**
	 * @param array(string => int) $servers
	 * @return array(array(string => string|int))
	 */
	function df_servers(array $servers) {
		return array_map('df_server', array_keys($servers), array_values($servers));
	}
	if (!function_exists('df_server')) {
		/**
		 * @return array(string => string|int)
		 */
		function df_server(string $desc, int $port):array {return [
			'defaultdb' => 'discourse'
			,'desc' => $desc
			,'host' => 'localhost'
			,'pg_dump_path' => '/usr/bin/pg_dump'
			,'pg_dumpall_path' => '/usr/bin/pg_dumpall'
			,'port' => $port
			,'sslmode' => 'allow'
		]; }
	}
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