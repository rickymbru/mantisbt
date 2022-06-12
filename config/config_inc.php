<?php
$g_hostname               = 'mysql';
$g_db_type                = 'mysqli';
$g_database_name          = 'bugtracker';
$g_db_username            = 'mantisbt';
$g_db_password            = 'mantisbt';

$g_default_timezone       = 'America/Sao_Paulo';

$g_crypto_master_salt     = 'A8LCoB9oyFCR6CcR2NZ6KPW188RKXy8y3Hc6IEVSWJU=';

$g_enable_email_notification = ON;
$g_phpMailer_method = PHPMAILER_METHOD_SMTP;
$g_administrator_email = 'infra@cedae.com.br';
$g_webmaster_email = 'webmaster@cedae.com.br';
$g_return_path_email = 'infra+mantisbt@cedae.com.br';
$g_from_email = 'infra+mantisbt@cedae.com.br';
$g_smtp_host = '10.10.0.128';
$g_smtp_port = 25;

$g_login_method = LDAP;
$g_ldap_server = 'ldap://10.10.0.11';
$g_ldap_root_dn = 'dc=cedae,dc=corp';
$g_ldap_bind_dn = 'CN=LDAP MantisBT,OU=Sistemas,DC=cedae,DC=corp';
$g_ldap_bind_passwd = 'Mantisbt@123';
$g_ldap_organization = '';
$g_use_ldap_email = ON;
$g_use_ldap_realname = ON;
$g_ldap_protocol_version = 3;
$g_ldap_follow_referrals = OFF;
$g_ldap_uid_field = 'sAMAccountName';
$g_ldap_use_starttls = OFF;