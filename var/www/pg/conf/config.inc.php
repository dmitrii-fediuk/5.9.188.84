<?php
# 2024-01-29 "Refactor `config.inc.php` for phpPgAdmin": https://github.com/dmitrii-fediuk/5.9.188.84/issues/57
$conf = [
	'servers' => (function() {
		$ss = [
			14578 => 'mage2.ru'
			,14579 => 'discourse-forum.ru'
			,14580 =>'mage2.pro'
			,14581 => 'discourse.pro'
			,14582 => 'df.tips'
			,14583 => 'oplatform.club'
			,14584 => 'maian.family'
			,14587 => 'dmitry.ai'
			# 2024-01-29 "Configure phpPgAdmin for `tr.guide`" https://github.com/dmitrii-fediuk/5.9.188.84/issues/56
			,14588 => 'tr.guide'
		];
		return array_map(function(int $port, string $desc):array {return [
			'defaultdb' => 'discourse'
			,'desc' => $desc
			,'host' => 'localhost'
			,'pg_dump_path' => '/usr/bin/pg_dump'
			,'pg_dumpall_path' => '/usr/bin/pg_dumpall'
			,'port' => $port
			,'sslmode' => 'allow'
		]; }, array_keys($ss), $ss);
	})()
] + [
	'ajax_refresh' => 3
	,'autocomplete' => 'default on'
	,'default_lang' => 'auto'
	,'extra_login_security' => false
	,'help_base' => 'http://www.postgresql.org/docs/%s/interactive/'
	,'left_width' => 200
	,'max_chars' => 50
	,'max_rows' => 30
	,'min_password_length' => 1
	,'owned_only' => false
	,'plugins' => []
	,'show_advanced' => false
	,'show_comments' => true
	,'show_oids' => false
	,'show_system' => false
	,'theme' => 'default'
	,'use_xhtml_strict' => false
	,'version' => 19
] + (isset($conf) ? $conf : []);