<?php

return [
    'ad'                        => 'Υπηρεσία καταλόγου Active Directory',
    'ad_domain'                    => 'Τομέα Active Directory',
    'ad_domain_help'            => 'Αυτό είναι μερικές φορές το ίδιο με τον τομέα ηλεκτρονικού ταχυδρομείου σας, αλλά όχι πάντα.',
    'is_ad'                        => 'Αυτός είναι ένας διακομιστής υπηρεσίας καταλόγου Active Directory',
    'alert_email'                => 'Αποστολή ειδοποιήσεων προς',
    'alerts_enabled'            => 'Ειδοποιήσεις ενεργοποιημένες',
    'alert_interval'            => 'Ελάχιστο όριο λήξης ειδοποιήσεων (σε ημέρες)',
    'alert_inv_threshold'        => 'Ειδοποιήση ορίου αποθήκης',
    'asset_ids'                    => 'Στοιχεία ταυτότητας περιουσιακών στοιχείων',
    'audit_interval'            => 'Διάρκεια ελέγχου',
    'audit_interval_help'       => 'Αν απαιτείται να ελέγχετε τακτικά τα πάγια σας, εισάγετε το διάστημα σε μήνες.',
    'audit_warning_days'        => 'Όριο προειδοποίησης ελέγχου',
    'audit_warning_days_help'   => 'Πόσες μέρες νωρίτερα θα πρέπει να σας προειδοποιήσουμε όταν τα περιουσιακά στοιχεία οφείλονται για έλεγχο;',
    'auto_increment_assets'        => 'Δημιουργία αναγνωριστικών στοιχείων ενεργητικού αυτόματης αύξησης',
    'auto_increment_prefix'        => 'Πρόθεμα (μη υποχρεωτικό)',
    'auto_incrementing_help'    => 'Ενεργοποιήστε πρώτα τα αναγνωριστικά στοιχείων αυτόματης αύξησης, για να το ορίσετε',
    'backups'                    => 'Αντίγραφα Ασφαλείας',
    'barcode_settings'            => 'Ρυθμίσεις γραμμωτού κώδικα',
    'confirm_purge'                => 'Επιβεβαίωση καθαρισμού',
    'confirm_purge_help'        => 'Εισάγετε το κείμενο «Διαγραφή» στο πλαίσιο παρακάτω για να καθαρίσει τις διαγραμμένες εγγραφές σας. Αυτή η ενέργεια δεν μπορεί να αναιρεθεί.',
    'custom_css'                => 'Προσαρμοσμένο CSS',
    'custom_css_help'            => 'Εισαγάγετε τυχόν προσαρμοσμένες επικαλύψεις CSS που θέλετε να χρησιμοποιήσετε. Μην συμπεριλάβετε τις ετικέτες &lt;style&gt;&lt;/style&gt;.',
    'custom_forgot_pass_url'    => 'Custom Password Reset URL',
    'custom_forgot_pass_url_help'    => 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'default_currency'        => 'Προεπιλεγμένο νόμισμα',
    'default_eula_text'            => 'Προεπιλογή EULA',
  'default_language'                    => 'Προκαθορισμένη γλώσσα',
    'default_eula_help_text'    => 'Μπορείτε επίσης να συσχετίσετε προσαρμοσμένες ΑΔΕΚ με συγκεκριμένες κατηγορίες περιουσιακών στοιχείων.',
    'display_asset_name'        => 'Εμφάνιση ονόματος παγίου',
    'display_checkout_date'     => 'Εμφάνιση ημερομηνίας αποχώρησης',
    'display_eol'               => 'Εμφάνιση του EOL στην προβολή πίνακα',
    'display_qr'                => 'Εμφάνιση τετραγώνων κωδίκων',
    'display_alt_barcode'        => 'Εμφάνιση 1D barcode',
    'barcode_type'                => '2D Barcode Type',
    'alt_barcode_type'            => '1D τύπο γραμμωτού κώδικα',
    'eula_settings'                => 'Ρυθμίσεις EULA',
    'eula_markdown'                => 'Αυτή η EULA επιτρέπει <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>.',
    'general_settings'            => 'Γενικές ρυθμίσεις',
    'generate_backup'            => 'Δημιουργία Αντίγραφου Ασφαλείας',
    'header_color'              => 'Χρώμα επικεφαλίδας',
    'info'                      => 'Αυτές οι ρυθμίσεις σάς επιτρέπουν να προσαρμόσετε ορισμένες πτυχές της εγκατάστασής σας.',
    'laravel'                   => 'Έκδοση οδηγού',
    'ldap_enabled'              => 'Ενεργό LDAP',
    'ldap_integration'          => 'Ενσωμάτωση LDAP',
    'ldap_settings'             => 'Ρυθμίσεις LDAP',
    'ldap_login_test_help'      => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help'      => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_server'               => 'LDAP Server',
    'ldap_server_help'          => 'Αυτό θα πρέπει να ξεκινά με το ldap: // (για μη κρυπτογραφημένο ή TLS) ή ldaps: // (για SSL)',
    'ldap_server_cert'            => 'Πιστοποίηση πιστοποιητικού SSL για LDAP',
    'ldap_server_cert_ignore'    => 'Να επιτρέπεται η μη έγκυρη πιστοποίηση SSL',
    'ldap_server_cert_help'        => 'Επιλέξτε αυτό το πλαίσιο ελέγχου εάν χρησιμοποιείτε έναν αυτόματο έλεγχο SSL και θέλετε να αποδεχτείτε ένα μη έγκυρο πιστοποιητικό SSL.',
    'ldap_tls'                  => 'Χρήση TLS',
    'ldap_tls_help'             => 'Αυτό θα πρέπει να ελέγχεται μόνο αν εκτελείτε το STARTTLS στο διακομιστή LDAP.',
    'ldap_uname'                => 'LDAP δεσμεύει το όνομα χρήστη',
    'ldap_pword'                => 'Κωδικός πρόσβασης δεσμού LDAP',
    'ldap_basedn'               => 'Δέσμευση βάσης DN',
    'ldap_filter'               => 'LDAP Φίλτρο',
    'ldap_pw_sync'              => 'LDAP συγχρονισμός κωδικού πρόσβασης',
    'ldap_pw_sync_help'         => 'Καταργήστε την επιλογή αυτού του πλαισίου αν δεν θέλετε να διατηρείτε τους κωδικούς LDAP συγχρονισμένους με τοπικούς κωδικούς πρόσβασης. Απενεργοποιώντας αυτό σημαίνει ότι οι χρήστες σας ενδέχεται να μην μπορούν να συνδεθούν αν ο διακομιστής LDAP δεν είναι προσβάσιμος για κάποιο λόγο.',
    'ldap_username_field'       => 'Πεδίο ονόματος χρήστη',
    'ldap_lname_field'          => 'Επίθετο',
    'ldap_fname_field'          => 'Όνομα LDAP',
    'ldap_auth_filter_query'    => 'Ερώτημα ελέγχου ταυτότητας LDAP',
    'ldap_version'              => 'Έκδοση LDAP',
    'ldap_active_flag'          => 'Ενεργή σημαία LDAP',
    'ldap_emp_num'              => 'Αριθμός υπαλλήλου LDAP',
    'ldap_email'                => 'LDAP Email',
    'load_remote_text'          => 'Απομακρυσμένα Scripts',
    'load_remote_help_text'        => 'Αυτή η εγκατάσταση Snipe-IT μπορεί να φορτώσει δέσμες ενεργειών από τον έξω κόσμο.',
    'login_note'                => 'Σύνδεση Σημείωση',
    'login_note_help'           => 'Προαιρετικά συμπεριλάβετε μερικές προτάσεις στην οθόνη σύνδεσης, για παράδειγμα για να βοηθήσετε άτομα που έχουν βρει μια χαμένη ή κλεμμένη συσκευή. Αυτό το πεδίο δέχεται <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>',
    'logo'                        => 'Λογότυπο',
    'full_multiple_companies_support_help_text' => 'Περιορισμός των χρηστών (συμπεριλαμβανομένων των διαχειριστών) που εκχωρούνται σε εταιρείες στα περιουσιακά στοιχεία της εταιρείας τους.',
    'full_multiple_companies_support_text' => 'Πλήρης υποστήριξη πολλαπλών εταιρειών',
    'optional'                    => 'προαιρετικός',
    'per_page'                  => 'Αποτελέσματα ανά σελίδα',
    'php'                       => 'Έκδοση PHP',
    'php_gd_info'               => 'Πρέπει να εγκαταστήσετε το php-gd για να εμφανίσετε τους QR κώδικες, δείτε τις οδηγίες εγκατάστασης.',
    'php_gd_warning'            => 'Η επεξεργασία εικόνας PHP και το πρόσθετο GD ΔΕΝ έχουν εγκατασταθεί.',
    'pwd_secure_complexity'     => 'Πολυπλοκότητα κωδικού πρόσβασης',
    'pwd_secure_complexity_help' => 'Επιλέξτε τους κανόνες περίπλοκου κωδικού πρόσβασης που θέλετε να επιβάλλετε.',
    'pwd_secure_min'            => 'Κωδικοί ελάχιστων χαρακτήρων',
    'pwd_secure_min_help'       => 'Η ελάχιστη επιτρεπόμενη τιμή είναι 5',
    'pwd_secure_uncommon'       => 'Αποτρέψτε τους κοινούς κωδικούς πρόσβασης',
    'pwd_secure_uncommon_help'  => 'Αυτό θα αποκλείσει τους χρήστες από τη χρήση κοινών κωδικών πρόσβασης από τους κορυφαίους 10.000 κωδικούς πρόσβασης που αναφέρονται σε παραβιάσεις.',
    'qr_help'                   => 'Ενεργοποιήστε πρώτα τους κωδικούς QR για να τις ορίσετε',
    'qr_text'                   => 'QR Code Κείμενο',
    'setting'                   => 'Ρύθμιση',
    'settings'                  => 'Ρυθμίσεις',
    'site_name'                 => 'Όνομα ιστότοπου',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Χωρίς κανάλι',
    'slack_endpoint'            => 'Χαμηλό τελικό σημείο',
    'slack_integration'         => 'Ρυθμίσεις χαλαρών',
    'slack_integration_help'    => 'Η ενσωμάτωση χαλάρωσης είναι προαιρετική, ωστόσο το τελικό σημείο και το κανάλι είναι απαραίτητα αν θέλετε να το χρησιμοποιήσετε. Για να ρυθμίσετε την ενσωμάτωση Slack, πρέπει πρώτα να <a href=":slack_link" target="_new">δημιουργήσετε ένα εισερχόμενο webhook</a> στον λογαριασμό σας Slack.',
    'snipe_version'            => 'Snipe-It έκδοση',
    'system'                    => 'Πληροφορίες συστήματος',
    'update'                    => 'Ενημέρωση ρυθμίσεων',
    'value'                     => 'Τιμή',
    'brand'                     => 'Μάρκα',
    'about_settings_title'      => 'Σχετικά με τις ρυθμίσεις',
    'about_settings_text'       => 'Αυτές οι ρυθμίσεις σάς επιτρέπουν να προσαρμόσετε ορισμένες πτυχές της εγκατάστασής σας.',
    'labels_per_page'           => 'Ετικέτες ανά σελίδα',
    'label_dimensions'          => 'Διαστάσεις ετικέτας (ίντσες)',
    'next_auto_tag_base'        => 'Επόμενη αυτόματη αύξηση',
    'page_padding'             => 'Περιθώρια σελίδας (ίντσες)',
    'purge'                    => 'Καθαρισμός αρχείων που έχουν διαγραφεί',
    'labels_display_bgutter'    => 'Ετικέτα κάτω υδρορροή',
    'labels_display_sgutter'    => 'Εσωτερική υδρορροή ετικέτας',
    'labels_fontsize'           => 'Μέγεθος γραμματοσειράς ετικέτας',
    'labels_pagewidth'          => 'Πλάτος ετικέτας',
    'labels_pageheight'         => 'Ύψος φύλλου ετικέτας',
    'label_gutters'        => 'Απόσταση ετικετών (ίντσες)',
    'page_dimensions'        => 'Διαστάσεις σελίδας (ίντσες)',
    'label_fields'          => 'Ετικέτα ορατά πεδία',
    'inches'        => 'ίντσες',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Σύνδεση με το Snipe-IT στα ηλεκτρονικά ταχυδρομεία',
    'show_url_in_emails_help_text'      => 'Καταργήστε την επιλογή αυτού του πλαισίου αν δεν θέλετε να συνδεθείτε πίσω στην εγκατάσταση Snipe-IT στα υποσέλιδα ηλεκτρονικού ταχυδρομείου σας. Χρήσιμο αν οι περισσότεροι χρήστες σας δεν συνδέονται ποτέ.',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Μέγιστο ύψος μικρογραφιών',
    'thumbnail_max_h_help'   => 'Το μέγιστο ύψος σε εικονοστοιχεία που ενδέχεται να εμφανίζονται στην εικ να. Ελάχιστο 25, μέγιστο 500.',
    'two_factor'        => 'Έλεγχος ταυτότητας δύο παραγόντων',
    'two_factor_secret'        => 'Κωδικός δύο συντελεστών',
    'two_factor_enrollment'        => 'Εγγραφή δύο συντελεστών',
    'two_factor_enabled_text'        => 'Ενεργοποίηση ελέγχου ταυτότητας δύο παραγόντων',
    'two_factor_reset'        => 'Επαναφορά του μυστικού δύο παραγόντων',
    'two_factor_reset_help'        => 'Αυτό θα υποχρεώσει τον χρήστη να εγγραφεί ξανά στη συσκευή του με τον Επαληθευτή Google. Αυτό μπορεί να είναι χρήσιμο εάν η τρέχουσα εγγεγραμμένη συσκευή τους χάσει ή κλαπεί.',
    'two_factor_reset_success'          => 'Επαναφορά της συσκευής δύο παραγόντων',
    'two_factor_reset_error'          => 'Επαναφορά συσκευής δύο παραγόντων απέτυχε',
    'two_factor_enabled_warning'        => 'Εάν ενεργοποιήσετε τον παράγοντα δύο παραγόντων, εάν δεν είναι ενεργοποιημένος, θα σας αναγκάσει αμέσως να επαληθεύσετε την ταυτότητά σας με μια συσκευή εγγραφής στο Google Auth. Θα έχετε τη δυνατότητα να εγγραφείτε στη συσκευή σας εάν δεν είστε εγγεγραμμένος.',
    'two_factor_enabled_help'        => 'Αυτό θα ενεργοποιήσει τον έλεγχο ταυτότητας δύο παραγόντων χρησιμοποιώντας το Google Authenticator.',
    'two_factor_optional'        => 'Επιλεκτική (Οι χρήστες μπορούν να ενεργοποιήσουν ή να απενεργοποιήσουν αν επιτρέπεται)',
    'two_factor_required'        => 'Απαιτείται για όλους τούς χρήστες',
    'two_factor_disabled'        => 'Έχει απενεργοποιηθεί',
    'two_factor_enter_code'    => 'Εισαγάγετε τον κωδικό δύο συντελεστών',
    'two_factor_config_complete'    => 'Υποβολή Κωδικού',
    'two_factor_enabled_edit_not_allowed' => 'Ο διαχειριστής σας δεν σας επιτρέπει να επεξεργαστείτε αυτήν τη ρύθμιση.',
    'two_factor_enrollment_text'    => 'Απαιτείται έλεγχος ταυτότητας δύο παραγόντων, ωστόσο η συσκευή σας δεν έχει εγγραφεί ακόμα. Ανοίξτε την εφαρμογή Google Authenticator και σαρώστε τον παρακάτω κωδικό QR για να εγγραφείτε στη συσκευή σας. Μόλις εγγραφείτε στη συσκευή σας, πληκτρολογήστε τον παρακάτω κώδικα',
    'require_accept_signature'      => 'Απαιτείται υπογραφή',
    'require_accept_signature_help_text'      => 'Η ενεργοποίηση αυτής της λειτουργίας θα απαιτεί από τους χρήστες να αποδεχθούν φυσικά την αποδοχή ενός στοιχείου.',
    'left'        => 'αριστερά',
    'right'        => 'δεξιά',
    'top'        => 'κορυφή',
    'bottom'        => 'κάτω μέρος',
    'vertical'        => 'κάθετα',
    'horizontal'        => 'οριζόντιος',
    'zerofill_count'        => 'Μήκος ετικετών ενεργητικού, συμπεριλαμβανομένου του zerofill',
];
