<?php

return array(
    'ad'				        => 'Aktiewe gids',
    'ad_domain'				    => 'Active Directory-domein',
    'ad_domain_help'			=> 'Dit is soms dieselfde as jou e-pos domein, maar nie altyd nie.',
    'is_ad'				        => 'Dit is \'n Active Directory-bediener',
	'alert_email'				=> 'Stuur kennisgewings aan',
	'alerts_enabled'			=> 'Alerts aangeskakel',
	'alert_interval'			=> 'Uitgaande Alert Drempel (in dae)',
	'alert_inv_threshold'		=> 'Voorraadwaarskuwingsdrempel',
	'asset_ids'					=> 'Bate ID\'s',
	'audit_interval'            => 'Ouditinterval',
    'audit_interval_help'       => 'As u gereeld u bates fisies moet kontroleer, vul die interval in maande in.',
	'audit_warning_days'        => 'Oudit Waarskuwing Drempel',
    'audit_warning_days_help'   => 'Hoeveel dae vooruit moet ons u waarsku wanneer bates verskuldig is vir ouditering?',
	'auto_increment_assets'		=> 'Genereer outomaties inkrementele bate-ID\'s',
	'auto_increment_prefix'		=> 'Voorvoegsel (opsioneel)',
	'auto_incrementing_help'    => 'Aktiveer outomaties inkrementering van bate ID\'s om dit te stel',
	'backups'					=> 'rugsteun',
	'barcode_settings'			=> 'Barcode-instellings',
    'confirm_purge'			    => 'Bevestig skoonmaak',
    'confirm_purge_help'		=> 'Tik die teks "DELETE" in die onderstaande blokkie om jou geskrapde rekords te verwyder. Hierdie handeling kan nie ongedaan gemaak word nie.',
	'custom_css'				=> 'Aangepaste CSS',
	'custom_css_help'			=> 'Voer enige aangepaste CSS-oortredings in wat u graag wil gebruik. Moenie die &lt;style&gt;&lt;/style&gt;-etikette insluit nie.',
    'custom_forgot_pass_url'	=> 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'	=> 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message'			=> 'Dashboard Message',
    'dashboard_message_help'	=> 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
	'default_currency'  		=> 'Verstek Geld',
	'default_eula_text'			=> 'Standaard EULA',
  'default_language'			=> 'Verstek taal',
	'default_eula_help_text'	=> 'U kan ook aangepaste EULA\'s aan spesifieke batekategorieë assosieer.',
    'display_asset_name'        => 'Wys bate naam',
    'display_checkout_date'     => 'Vertoon Checkout Date',
    'display_eol'               => 'Wys EOL in tabelweergawe',
    'display_qr'                => 'Vertoon vierkante kodes',
	'display_alt_barcode'		=> 'Wys 1D strepieskode',
	'barcode_type'				=> '2D Barcode Type',
	'alt_barcode_type'			=> '1D barcode tipe',
    'eula_settings'				=> 'EULA-instellings',
    'eula_markdown'				=> 'Hierdie EULA laat <a href="https://help.github.com/articles/github-flavored-markdown/">Github-geurde markdown</a> toe.',
    'general_settings'			=> 'Algemene instellings',
	'generate_backup'			=> 'Genereer rugsteun',
    'header_color'              => 'Opskrif Kleur',
    'info'                      => 'Met hierdie instellings kan u sekere aspekte van u installasie aanpas.',
    'laravel'                   => 'Laravel Weergawe',
    'ldap_enabled'              => 'LDAP aangeskakel',
    'ldap_integration'          => 'LDAP-integrasie',
    'ldap_settings'             => 'LDAP-instellings',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP-bediener',
    'ldap_server_help'          => 'Dit moet begin met ldap: // (vir unencrypted of TLS) of ldaps: // (vir SSL)',
	'ldap_server_cert'			=> 'LDAP SSL-sertifikaat-validering',
	'ldap_server_cert_ignore'	=> 'Laat ongeldige SSL-sertifikaat toe',
	'ldap_server_cert_help'		=> 'Kies hierdie boks as u \'n self-ondertekende SSL-sertifikaat gebruik en graag \'n ongeldige SSL-sertifikaat aanvaar.',
    'ldap_tls'                  => 'Gebruik TLS',
    'ldap_tls_help'             => 'Dit moet slegs nagegaan word as u STARTTLS op u LDAP-bediener uitvoer.',
    'ldap_uname'                => 'LDAP Bind Gebruikersnaam',
    'ldap_pword'                => 'LDAP-koppel wagwoord',
    'ldap_basedn'               => 'Base Bind DN',
    'ldap_filter'               => 'LDAP Filter',
    'ldap_pw_sync'              => 'LDAP-wagwoordsynkronisering',
    'ldap_pw_sync_help'         => 'Verwyder hierdie vinkje as u nie LDAP-wagwoorde wil laat sinkroniseer met plaaslike wagwoorde nie. As u hierdie opsie uitskakel, beteken dit dat u gebruikers dalk nie kan aanmeld as u LDAP-bediener om een ​​of ander rede onbereikbaar is nie.',
    'ldap_username_field'       => 'Gebruikernaam',
    'ldap_lname_field'          => 'Van',
    'ldap_fname_field'          => 'LDAP Voornaam',
    'ldap_auth_filter_query'    => 'LDAP-verifikasie navraag',
    'ldap_version'              => 'LDAP-weergawe',
    'ldap_active_flag'          => 'LDAP-aktiewe vlag',
    'ldap_emp_num'              => 'LDAP Werknemersnommer',
    'ldap_email'                => 'LDAP-e-pos',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'Hierdie Snipe-IT installasie kan skrifte van die buitewêreld laai.',
    'login_note'                => 'Login Nota',
    'login_note_help'           => 'Voeg opsioneel \'n paar sinne op jou aanmeldskerm, byvoorbeeld om mense te help wat \'n verlore of gesteelde toestel gevind het. Hierdie veld aanvaar <a href="https://help.github.com/articles/github-flavored-markdown/">Gitub-gegeurde markdown</a>',
    'logo'                    	=> 'logo',
    'full_multiple_companies_support_help_text' => 'Beperking van gebruikers (insluitend administrateurs) wat aan maatskappye toegewys is aan hul maatskappy se bates.',
    'full_multiple_companies_support_text' => 'Volledige Veelvuldige Maatskappye Ondersteuning',
    'optional'					=> 'opsioneel',
    'per_page'                  => 'Resultate per bladsy',
    'php'                       => 'PHP weergawe',
    'php_gd_info'               => 'Jy moet php-gd installeer om QR-kodes te vertoon, sien installeringsinstruksies.',
    'php_gd_warning'            => 'PHP Image Processing en GD plugin is NIE geïnstalleer nie.',
    'pwd_secure_complexity'     => 'Wagwoord Kompleksiteit',
    'pwd_secure_complexity_help' => 'Kies watter wagwoord kompleksiteit reëls jy wil afdwing.',
    'pwd_secure_min'            => 'Wagwoord minimum karakters',
    'pwd_secure_min_help'       => 'Minimum toelaatbare waarde is 5',
    'pwd_secure_uncommon'       => 'Voorkom algemene wagwoorde',
    'pwd_secure_uncommon_help'  => 'Dit sal gebruikers nie toelaat om algemene wagwoorde te gebruik van die top 10,000 wagwoorde wat in oortredings gerapporteer is nie.',
    'qr_help'                   => 'Aktiveer QR-kodes eers om dit te stel',
    'qr_text'                   => 'QR Kode Teks',
    'setting'                   => 'omgewing',
    'settings'                  => 'instellings',
    'show_alerts_in_menu'       => 'Show alerts in top menu',
    'show_archived_in_list'     => 'Archived Assets',
    'show_archived_in_list_text'     => 'Show archived assets in the "all assets" listing',
    'site_name'                 => 'Site Naam',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slap integrasie is opsioneel, maar die eindpunt en die kanaal word benodig as u dit wil gebruik. Om Slack integrasie te konfigureer, moet jy eers <a href=":slack_link" target="_new">\'n inkomende webhook</a> op jou Slack-rekening skep.',
    'snipe_version'  			=> 'Snipe-IT-weergawe',
    'system'                    => 'Stelselinligting',
    'update'                    => 'Opdateer instellings',
    'value'                     => 'waarde',
    'brand'                     => 'Handelsmerk',
    'about_settings_title'      => 'Oor instellings',
    'about_settings_text'       => 'Met hierdie instellings kan u sekere aspekte van u installasie aanpas.',
    'labels_per_page'           => 'Etikette per bladsy',
    'label_dimensions'          => 'Etiketafmetings (duim)',
    'next_auto_tag_base'        => 'Volgende outomatiese inkrement',
    'page_padding'             => 'Bladsy marges (duim)',
    'purge'                    => 'Verwyder verwyderde rekords',
    'labels_display_bgutter'    => 'Etiket onderkant goot',
    'labels_display_sgutter'    => 'Label side goot',
    'labels_fontsize'           => 'Etiket lettergrootte',
    'labels_pagewidth'          => 'Label vel breedte',
    'labels_pageheight'         => 'Etiketbladhoogte',
    'label_gutters'        => 'Etiket spasiëring (duim)',
    'page_dimensions'        => 'Bladsy dimensies (duim)',
    'label_fields'          => 'Merk sigbare velde',
    'inches'        => 'duim',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Skakel na Snipe-IT in e-posse',
    'show_url_in_emails_help_text'      => 'Verwyder hierdie vinkje as u nie wil terugkoppel na u Snipe-IT-installasie in u e-posvoetboks nie. Nuttig as die meeste van jou gebruikers nooit ingeteken het nie.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Maksimum miniatuurhoogte',
    'thumbnail_max_h_help'   => 'Maksimum hoogte in pixels wat duimnaels mag vertoon in die lysinskrywing. Min 25, maksimum 500.',
    'two_factor'        => 'Twee faktor verifikasie',
    'two_factor_secret'        => 'Twee-faktor kode',
    'two_factor_enrollment'        => 'Twee-faktorinskrywing',
    'two_factor_enabled_text'        => 'Aktiveer twee faktore',
    'two_factor_reset'        => 'Herstel twee-faktor geheim',
    'two_factor_reset_help'        => 'Dit sal die gebruiker dwing om hul toestel weer met Google Authenticator in te skryf. Dit kan handig wees as hul toestel wat tans ingeskryf is, verlore of gesteel is.',
    'two_factor_reset_success'          => 'Twee faktor toestel suksesvol herstel',
    'two_factor_reset_error'          => 'Twee faktor toestel herstel het misluk',
    'two_factor_enabled_warning'        => 'As jy twee faktore aktiveer as dit nie tans geaktiveer is nie, sal dit jou dadelik dwing om te verifieer met \'n Google Auth-ingeskrewe toestel. Jy sal die vermoë hê om jou toestel in te skryf as een nie tans ingeskryf is nie.',
    'two_factor_enabled_help'        => 'Dit sal twee-faktor-verifikasie met behulp van Google Authenticator aanskakel.',
    'two_factor_optional'        => 'Selektief (Gebruikers kan aktiveer of deaktiveer indien toegelaat)',
    'two_factor_required'        => 'Benodig vir alle gebruikers',
    'two_factor_disabled'        => 'gestremde',
    'two_factor_enter_code'	=> 'Voer twee-faktor kode in',
    'two_factor_config_complete'	=> 'Dien kode in',
    'two_factor_enabled_edit_not_allowed' => 'Jou administrateur laat jou nie toe om hierdie instelling te wysig nie.',
    'two_factor_enrollment_text'	=> "Twee faktor verifikasie is nodig, maar jou toestel is nog nie ingeskryf nie. Maak jou Google Authenticator-program oop en scan die QR-kode hieronder om jou toestel in te skryf. Sodra jy jou toestel ingeskryf het, voer die kode hieronder in",
    'require_accept_signature'      => 'Vereis Handtekening',
    'require_accept_signature_help_text'      => 'As u hierdie kenmerk aanskakel, sal gebruikers fisies moet afmeld wanneer hulle \'n bate aanvaar.',
    'left'        => 'links',
    'right'        => 'reg',
    'top'        => 'Top',
    'bottom'        => 'onderkant',
    'vertical'        => 'vertikale',
    'horizontal'        => 'horisontale',
    'zerofill_count'        => 'Lengte van bate-etikette, insluitend zerofill',
);
