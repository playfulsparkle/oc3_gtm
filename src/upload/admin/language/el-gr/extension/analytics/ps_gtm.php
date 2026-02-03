<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Ξεκινώντας';
$_['heading_setup']                = 'Ρύθμιση του Google Tag Manager';
$_['heading_troubleshot']          = 'Συνηθισμένη Αντιμετώπιση Προβλημάτων';
$_['heading_faq']                  = 'Συχνές Ερωτήσεις';
$_['heading_contact']              = 'Επικοινωνία με την Υποστήριξη';

// Text
$_['text_extension']                = 'Επεκτάσεις';
$_['text_edit']                     = 'Επεξεργασία Google Tag Manager';
$_['text_success']                  = 'Επιτυχία: Τροποποιήσατε το Google Tag Manager!';
$_['text_group_ad_settings']        = 'Ρυθμίσεις Διαφημίσεων';
$_['text_group_analytics_settings'] = 'Ρυθμίσεις Analytics';
$_['text_group_security_settings']  = 'Ρυθμίσεις Ασφαλείας';
$_['text_group_advanced_settings']  = 'Προηγμένες Ρυθμίσεις';
$_['text_getting_started']          = '<p><strong>Επισκόπηση:</strong> Το Playful Sparkle - Google Tag Manager για OpenCart 3.x σας επιτρέπει να διαχειρίζεστε και να αναπτύσσετε εύκολα ετικέτες μάρκετινγκ στο κατάστημά σας OpenCart χωρίς καμία γνώση κώδικα. Με αυτήν την επέκταση, μπορείτε να βελτιστοποιήσετε τη ρύθμιση παρακολούθησης, επιτρέποντας καλύτερες αναλύσεις και αποτελεσματικότητα στο μάρκετινγκ.</p><p><strong>Απαιτήσεις:</strong> Βεβαιωθείτε ότι έχετε έναν λογαριασμό Google Tag Manager, ένα έγκυρο Measurement ID και ότι χρησιμοποιείτε μια συμβατή έκδοση OpenCart 3.x+, PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>Ρύθμιση του Google Tag Manager:</strong> Συνδεθείτε στον <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">λογαριασμό σας Google Tag Manager</a>, δημιουργήστε ένα νέο κοντέινερ για τον ιστότοπό σας εάν δεν το έχετε κάνει ήδη και ανακτήστε το Measurement ID σας. Στη συνέχεια, εισαγάγετε αυτό το ID στο καθορισμένο πεδίο των ρυθμίσεων της επέκτασης Playful Sparkle - Google Tag Manager στο κατάστημά σας OpenCart.</p>';
$_['text_troubleshot']              = '<ul><li><strong>Η μορφή του GTM ID είναι λανθασμένη</strong><br>Το μήνυμα "Η μορφή του GTM ID είναι λανθασμένη. Βεβαιωθείτε ότι ακολουθεί τη μορφή GTM-XXXXXXXX." σημαίνει ότι το GTM Container ID που εισαγάγατε δεν αντιστοιχεί στο απαιτούμενο πρότυπο.<br><strong>Λύση:</strong> Μεταβείτε στον λογαριασμό σας στο Google Tag Manager, ανοίξτε το container, αντιγράψτε το Container ID που εμφανίζεται στην κεφαλίδα και επικολλήστε το στις ρυθμίσεις της επέκτασης.<br><strong>Έλεγχος:</strong> Το ID πρέπει να ξεκινά με <strong>GTM-</strong> και μετά την παύλα να περιέχει μόνο κεφαλαία γράμματα και αριθμούς.</li>
<li><strong>Λείπει το &lt;noscript&gt;&lt;iframe&gt; στο storefront</strong><br>Εάν το απόσπασμα &lt;noscript&gt;&lt;iframe&gt; δεν υπάρχει στον πηγαίο κώδικα της σελίδας, η τροποποίηση ενδέχεται να μην έχει εφαρμοστεί ή η δομή του θέματος να μην περιλαμβάνει την απαιτούμενη ετικέτα.<br><strong>Λύση:</strong><br>1) Στον πίνακα διαχείρισης, μεταβείτε στο <strong>Extensions → Modifications</strong> και πατήστε <strong>Refresh</strong> για να αναδημιουργήσετε την cache των τροποποιήσεων.<br>2) Στον πίνακα διαχείρισης, μεταβείτε στο <strong>Extensions → Extensions</strong>, επιλέξτε τον τύπο επέκτασης και πατήστε <strong>Refresh</strong> για να αναδημιουργήσετε την cache των επεκτάσεων.<br>3) Ελέγξτε το ενεργό πρότυπο θέματος και βεβαιωθείτε ότι περιέχει έγκυρη ετικέτα <strong>&lt;body&gt;</strong>. Η ενσωμάτωση του GTM βασίζεται σε αυτήν.<br><strong>Έλεγχος:</strong> Ανοίξτε το storefront, προβάλετε τον πηγαίο κώδικα, αναζητήστε το <strong>googletagmanager.com/ns.html</strong> και επιβεβαιώστε ότι υπάρχει το block &lt;noscript&gt;.</li>
<li><strong>Δεν καταγράφονται συμβάντα σε GTM ή GA</strong><br>Εάν το κατάστημά σας φορτώνει αλλά δεν βλέπετε hits, triggers ή συμβάντα στο Google Tag Manager ή στο Google Analytics, η παρακολούθηση συνήθως εμποδίζεται από μη έγκυρο GTM ID ή από εσφαλμένη ρύθμιση της ετικέτας GA μέσα στο GTM container.<br><strong>Λύση:</strong><ol><li>Επιβεβαιώστε ότι το GTM ID στην επέκταση ταιριάζει ακριβώς με το Container ID σας.</li><li>Στο Google Tag Manager, ανοίξτε το container και ελέγξτε τη ρύθμιση του GA4.</li><li>Επιβεβαιώστε ότι το <strong>Measurement ID</strong> (μορφή <strong>G-XXXXXXXXXX</strong>) είναι σωστό στις ρυθμίσεις της ετικέτας GA4.</li><li>Χρησιμοποιήστε το <strong>GTM Preview (Tag Assistant)</strong> για να επιβεβαιώσετε ότι οι ετικέτες ενεργοποιούνται στο page view και στα συμβάντα.</li></ol><br><strong>Έλεγχος:</strong> Στο GTM Preview θα πρέπει να βλέπετε ότι ενεργοποιείται η ετικέτα GA. Στο GA Realtime ή στο DebugView θα πρέπει να βλέπετε ενεργούς χρήστες ή συμβάντα αποσφαλμάτωσης.</li></ul>';
$_['text_faq']                      = '<details><summary>Τι γίνεται αν δεν βλέπω τις ετικέτες μου να ενεργοποιούνται στο Google Tag Manager;</summary>Βεβαιωθείτε ότι το Measurement ID σας είναι σωστό και επιβεβαιώστε ότι οι ετικέτες έχουν δημοσιευτεί και έχουν ρυθμιστεί σωστά με τους σωστούς ενεργοποιητές.</details><details><summary>Πώς μπορώ να ελέγξω αν η επέκταση λειτουργεί;</summary>Χρησιμοποιήστε την επέκταση <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> για Chrome ή τη λειτουργία προεπισκόπησης στο Google Tag Manager για να επιβεβαιώσετε ότι οι ετικέτες σας ενεργοποιούνται όπως αναμένεται.</details><details><summary>Είναι αυτή η επέκταση συμβατή με άλλες επεκτάσεις;</summary>Ενώ αυτή η επέκταση είναι γενικά συμβατή, συνιστάται να τη δοκιμάσετε με άλλες επεκτάσεις που είναι εγκατεστημένες στον ιστότοπό σας για να αποφύγετε συγκρούσεις. Εάν αντιμετωπίσετε προβλήματα, ελέγξτε για γνωστά προβλήματα συμβατότητας.</details><details><summary>Πώς μπορώ να αντιμετωπίσω κοινά προβλήματα ετικετών;</summary>Ανατρέξτε στον οδηγό αντιμετώπισης προβλημάτων του Google Tag Manager για βοήθεια σχετικά με κοινά προβλήματα ετικετών και βέλτιστες πρακτικές για τη διαμόρφωση.</details>';
$_['text_contact']                  = '<p>Για περαιτέρω βοήθεια, επικοινωνήστε με την ομάδα υποστήριξής μας:</p><ul><li><strong>Επικοινωνία:</strong> <a href="mailto:%s">%s</a></li><li><strong>Τεκμηρίωση:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Εγχειρίδιο Χρήστη</a></li></ul>';
$_['text_gcm_info']                 = 'Για να χρησιμοποιήσετε αυτήν τη λειτουργία, βεβαιωθείτε ότι έχετε εγκατεστημένο ένα banner cookies. Αυτή η επέκταση ορίζει μια βασική κατάσταση συναίνεσης από προεπιλογή, αλλά το banner cookies είναι υπεύθυνο για την ενημέρωση της συναίνεσης ώστε να επιτρέπεται η συλλογή δεδομένων.';

// Tab
$_['tab_general']                   = 'Γενικά';
$_['tab_gcm']                       = 'Google Conset Mode (GCM)';
$_['tab_help_and_support']          = 'Βοήθεια &amp; Υποστήριξη';

// Entry
$_['entry_status']                  = 'Κατάσταση';
$_['entry_gtm_id']                  = 'Measurement ID';
$_['entry_gcm_status']              = 'Ενεργοποίηση GCM';
$_['entry_ad_storage']              = 'Ad Storage';
$_['entry_ad_user_data']            = 'Ad User Data';
$_['entry_ad_personalization']      = 'Ad Personalization';
$_['entry_analytics_storage']       = 'Analytics Storage';
$_['entry_functionality_storage']   = 'Functionality Storage';
$_['entry_personalization_storage'] = 'Personalization Storage';
$_['entry_security_storage']        = 'Security Storage';
$_['entry_wait_for_update']         = 'Αναμονή για Ενημέρωση';
$_['entry_ads_data_redaction']      = 'Απόκρυψη Δεδομένων Διαφημίσεων';
$_['entry_url_passthrough']         = 'Διέλευση URL';
$_['entry_strict']                  = 'Αυστηρό';
$_['entry_balanced']                = 'Ισορροπημένο';
$_['entry_custom']                  = 'Προσαρμοσμένο';
$_['entry_gcm_profiles']            = 'Προφίλ GCM';

// Help
$_['help_ad_storage']               = 'Ελέγχει εάν επιτρέπεται η αποθήκευση δεδομένων για σκοπούς που σχετίζονται με διαφημίσεις, όπως η παρακολούθηση κλικ διαφημίσεων ή μετατροπών.';
$_['help_ad_user_data']             = 'Καθορίζει εάν αποθηκεύονται δεδομένα σχετικά με τους χρήστες που αλληλεπιδρούν με διαφημίσεις, βελτιώνοντας τις δυνατότητες στόχευσης διαφημίσεων.';
$_['help_ad_personalization']       = 'Επιτρέπει την εξατομίκευση των διαφημίσεων με βάση τα δεδομένα χρήστη, παρέχοντας πιο σχετικές διαφημίσεις στους χρήστες.';
$_['help_analytics_storage']        = 'Ενεργοποιεί την αποθήκευση δεδομένων που χρησιμοποιούνται για σκοπούς ανάλυσης, βοηθώντας στην παρακολούθηση της απόδοσης του ιστότοπου και της συμπεριφοράς των χρηστών.';
$_['help_functionality_storage']    = 'Επιτρέπει την αποθήκευση δεδομένων για την υποστήριξη λειτουργικότητας, όπως προτιμήσεις χρήστη ή λειτουργίες ιστότοπου που βελτιώνουν την εμπειρία χρήστη.';
$_['help_personalization_storage']  = 'Ελέγχει την αποθήκευση δεδομένων για την εξατομίκευση της εμπειρίας χρήστη, όπως προτεινόμενο περιεχόμενο ή ρυθμίσεις.';
$_['help_security_storage']         = 'Διασφαλίζει την αποθήκευση δεδομένων που σχετίζονται με την ασφάλεια, όπως για την πρόληψη απάτης και τον ασφαλή έλεγχο πρόσβασης.';
$_['help_wait_for_update']          = 'Ορίζει τον χρόνο (σε χιλιοστά του δευτερολέπτου) καθυστέρησης πριν από την ενημέρωση της κατάστασης συναίνεσης, διασφαλίζοντας ότι εφαρμόζονται όλες οι ρυθμίσεις.';
$_['help_ads_data_redaction']       = 'Αποκρύπτει τα δεδομένα χρήστη που σχετίζονται με διαφημίσεις, διασφαλίζοντας την ιδιωτικότητα αποκρύπτοντας ορισμένες πληροφορίες που μπορούν να ταυτοποιήσουν ένα άτομο.';
$_['help_url_passthrough']          = 'Επιτρέπει στο URL να περάσει από τους ελέγχους συναίνεσης, χρήσιμο για την παρακολούθηση συγκεκριμένων διαδρομών χρήστη χωρίς αποθήκευση προσωπικών δεδομένων.';
$_['help_gcm_status']               = 'Ενεργοποιεί το Google Consent Mode, επιτρέποντας στον ιστότοπό σας να προσαρμόζει τη συμπεριφορά των ετικετών Google με βάση τις ρυθμίσεις συναίνεσης του χρήστη. Αυτή η λειτουργία παρέχει παρακολούθηση φιλική προς την ιδιωτικότητα, επιτρέποντας στις αναλύσεις και τις διαφημίσεις να λειτουργούν σύμφωνα με τις προτιμήσεις συναίνεσης.';
$_['help_gtm_id_locate']            = 'Για να βρείτε το Measurement ID σας, συνδεθείτε στον <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">λογαριασμό σας Google Tag Manager</a>. Στον χώρο εργασίας, αναζητήστε το ID στο επάνω μέρος του πίνακα ελέγχου—ξεκινά με "GTM-" ακολουθούμενο από μια μοναδική σειρά γραμμάτων και αριθμών, όπως "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=en" target="_blank" rel="external noopener noreferrer">Περισσότερες λεπτομερείς οδηγίες εδώ</a>.';

// Error
$_['error_permission']              = 'Προειδοποίηση: Δεν έχετε άδεια να τροποποιήσετε τις ρυθμίσεις του Google Tag Manager!';
$_['error_gtm_id']                  = 'Το πεδίο GTM ID είναι υποχρεωτικό. Παρακαλώ εισάγετε το Measurement ID σας.';
$_['error_gtm_id_invalid']          = 'Η μορφή του GTM ID είναι λανθασμένη. Βεβαιωθείτε ότι ακολουθεί τη μορφή GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'Η τιμή "Αναμονή για Ενημέρωση" πρέπει να είναι ένας αριθμός μεταξύ 0 και 10000 χιλιοστών του δευτερολέπτου.';
