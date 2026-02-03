<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Erste Schritte';
$_['heading_setup']                = 'Einrichtung des Google Tag Managers';
$_['heading_troubleshot']          = 'Häufige Fehlersuche';
$_['heading_faq']                  = 'Häufig gestellte Fragen';
$_['heading_contact']              = 'Support kontaktieren';

// Text
$_['text_extension']                = 'Erweiterungen';
$_['text_edit']                     = 'Google Tag Manager bearbeiten';
$_['text_success']                  = 'Erfolg: Sie haben den Google Tag Manager geändert!';
$_['text_group_ad_settings']        = 'Anzeigeneinstellungen';
$_['text_group_analytics_settings'] = 'Analytikeinstellungen';
$_['text_group_security_settings']  = 'Sicherheitseinstellungen';
$_['text_group_advanced_settings']  = 'Erweiterte Einstellungen';
$_['text_getting_started']          = '<p><strong>Überblick:</strong> Die Playful Sparkle - Google Tag Manager-Erweiterung für OpenCart 3.x ermöglicht es Ihnen, Marketing-Tags auf Ihrem OpenCart-Shop einfach zu verwalten und bereitzustellen, ohne Programmierkenntnisse zu benötigen. Mit dieser Erweiterung können Sie Ihre Tracking-Einrichtung optimieren, was eine bessere Analyse und Marketingeffizienz ermöglicht.</p><p><strong>Voraussetzungen:</strong> Stellen Sie sicher, dass Sie ein Google Tag Manager-Konto, eine gültige Measurement ID haben und eine kompatible Version von OpenCart 3.x+, PHP 7.3 verwenden.</p>';
$_['text_setup']                    = '<p><strong>Einrichtung des Google Tag Managers:</strong> Melden Sie sich in Ihrem <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">Google Tag Manager-Konto</a> an, erstellen Sie einen neuen Container für Ihre Website, falls Sie dies noch nicht getan haben, und rufen Sie Ihre Measurement ID ab. Geben Sie diese ID dann in das entsprechende Feld der Einstellungen der Playful Sparkle - Google Tag Manager-Erweiterung in Ihrem OpenCart-Shop ein.</p>';
$_['text_troubleshot']              = '<ul><li><strong>GTM-ID-Format ist ungültig</strong><br>Die Meldung "Das GTM-ID-Format ist ungültig. Stellen Sie sicher, dass es dem Format GTM-XXXXXXXX entspricht." bedeutet, dass die eingegebene GTM-Container-ID nicht dem erforderlichen Muster entspricht.<br><strong>Lösung:</strong> Öffnen Sie Ihr Google Tag Manager-Konto, wählen Sie den Container aus, kopieren Sie die in der Kopfzeile angezeigte Container-ID und fügen Sie diese in den Erweiterungseinstellungen ein.<br><strong>Prüfen:</strong> Die ID muss mit <strong>GTM-</strong> beginnen und darf nach dem Bindestrich nur Großbuchstaben und Zahlen enthalten.</li>
<li><strong>&lt;noscript&gt;&lt;iframe&gt; fehlt im Storefront</strong><br>Wenn der &lt;noscript&gt;&lt;iframe&gt;-Ausschnitt nicht im Seitenquelltext vorhanden ist, wurde die Modifikation möglicherweise nicht angewendet oder in der Theme-Struktur fehlt das erforderliche Tag.<br><strong>Lösung:</strong><br>1) Gehen Sie im Adminbereich zu <strong>Extensions → Modifications</strong> und klicken Sie auf <strong>Refresh</strong>, um den Modifikations-Cache neu zu erstellen.<br>2) Gehen Sie im Adminbereich zu <strong>Extensions → Extensions</strong>, wählen Sie den Erweiterungstyp und klicken Sie auf <strong>Refresh</strong>, um den Erweiterungs-Cache neu zu erstellen.<br>3) Prüfen Sie die aktive Theme-Vorlage und stellen Sie sicher, dass ein gültiges <strong>&lt;body&gt;</strong>-Tag vorhanden ist. Die GTM-Einbindung ist davon abhängig.<br><strong>Prüfen:</strong> Öffnen Sie den Storefront, zeigen Sie den Seitenquelltext an, suchen Sie nach <strong>googletagmanager.com/ns.html</strong> und bestätigen Sie, dass der &lt;noscript&gt;-Block vorhanden ist.</li>
<li><strong>Es werden keine Ereignisse in GTM oder GA erfasst</strong><br>Wenn Ihr Shop lädt, Sie jedoch keine Hits, Trigger oder Ereignisse in Google Tag Manager oder Google Analytics sehen, wird das Tracking in der Regel durch eine ungültige GTM-ID oder durch ein falsch konfiguriertes GA-Tag im GTM-Container verhindert.<br><strong>Lösung:</strong><ol><li>Stellen Sie sicher, dass die GTM-ID in der Erweiterung exakt mit Ihrer Container-ID übereinstimmt.</li><li>Öffnen Sie in Google Tag Manager den Container und prüfen Sie die GA4-Konfiguration.</li><li>Stellen Sie sicher, dass die <strong>Measurement ID</strong> (Format <strong>G-XXXXXXXXXX</strong>) in den GA4-Tag-Einstellungen korrekt ist.</li><li>Verwenden Sie <strong>GTM Preview (Tag Assistant)</strong>, um zu prüfen, ob Tags beim Seitenaufruf und bei Ereignissen ausgelöst werden.</li></ol><br><strong>Prüfen:</strong> In GTM Preview sollten Sie sehen, dass Ihr GA-Tag ausgelöst wird. In GA Realtime oder DebugView sollten Sie aktive Nutzer oder Debug-Ereignisse sehen.</li></ul>';
$_['text_faq']                      = '<details><summary>Was ist, wenn ich meine Tags im Google Tag Manager nicht sehe?</summary>Stellen Sie sicher, dass Ihre Measurement ID korrekt ist und dass die Tags veröffentlicht und mit den richtigen Triggern konfiguriert sind.</details><details><summary>Wie kann ich überprüfen, ob die Erweiterung funktioniert?</summary>Verwenden Sie die <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a>-Chrome-Erweiterung oder den Vorschau-Modus im Google Tag Manager, um zu bestätigen, dass Ihre Tags wie erwartet ausgelöst werden.</details><details><summary>Ist diese Erweiterung mit anderen Erweiterungen kompatibel?</summary>Diese Erweiterung ist im Allgemeinen kompatibel, es wird jedoch empfohlen, sie mit anderen auf Ihrer Website installierten Erweiterungen zu testen, um Konflikte zu vermeiden. Wenn Sie auf Probleme stoßen, überprüfen Sie bekannte Kompatibilitätsprobleme.</details><details><summary>Wie behebe ich häufige Tag-Probleme?</summary>Verweisen Sie auf den Leitfaden zur Fehlersuche im Google Tag Manager, um Hilfe bei häufigen Tag-Problemen und bewährten Praktiken für die Konfiguration zu erhalten.</details>';
$_['text_contact']                  = '<p>Für weitere Unterstützung wenden Sie sich bitte an unser Support-Team:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Benutzerdokumentation</a></li></ul>';
$_['text_gcm_info']                 = 'Um diese Funktion zu verwenden, stellen Sie sicher, dass ein Cookie-Banner installiert ist. Diese Erweiterung setzt standardmäßig einen grundlegenden Zustimmungsstatus, aber das Cookie-Banner ist dafür verantwortlich, die Zustimmung zu aktualisieren, um die Datenerfassung zu ermöglichen.';

// Tab
$_['tab_general']                   = 'Allgemein';
$_['tab_gcm']                       = 'Google Consent Mode (GCM)';
$_['tab_help_and_support']          = 'Hilfe &amp; Support';

// Entry
$_['entry_status']                  = 'Status';
$_['entry_gtm_id']                  = 'Measurement ID';
$_['entry_gcm_status']              = 'GCM aktivieren';
$_['entry_ad_storage']              = 'Anzeigendaten speichern';
$_['entry_ad_user_data']            = 'Benutzerdaten für Werbung';
$_['entry_ad_personalization']      = 'Anpassung von Werbung';
$_['entry_analytics_storage']       = 'Analytikdaten speichern';
$_['entry_functionality_storage']   = 'Funktionalitätsdaten speichern';
$_['entry_personalization_storage'] = 'Personalisierungsdaten speichern';
$_['entry_security_storage']        = 'Sicherheitsdaten speichern';
$_['entry_wait_for_update']         = 'Auf Update warten';
$_['entry_ads_data_redaction']      = 'Redaktion von Anzeigendaten';
$_['entry_url_passthrough']         = 'URL durchleiten';
$_['entry_strict']                  = 'Streng';
$_['entry_balanced']                = 'Ausgewogen';
$_['entry_custom']                  = 'Benutzerdefiniert';
$_['entry_gcm_profiles']            = 'GCM-Profile';

// Help
$_['help_ad_storage']               = 'Steuert, ob die Speicherung von Daten für Werbezwecke, wie das Verfolgen von Klicks oder Konversionen, erlaubt ist.';
$_['help_ad_user_data']             = 'Bestimmt, ob Daten über Benutzer, die mit Anzeigen interagieren, gespeichert werden, um die Anzeigenzielgruppenerstellung zu verbessern.';
$_['help_ad_personalization']       = 'Ermöglicht die Personalisierung von Anzeigen basierend auf Benutzerdaten, um relevantere Werbung anzuzeigen.';
$_['help_analytics_storage']        = 'Ermöglicht die Speicherung von Daten für Analysezwecke, um die Leistung der Website und das Benutzerverhalten zu verfolgen.';
$_['help_functionality_storage']    = 'Ermöglicht die Speicherung von Daten zur Unterstützung von Funktionen wie Benutzerpräferenzen oder Website-Funktionen, die das Benutzererlebnis verbessern.';
$_['help_personalization_storage']  = 'Steuert die Speicherung von Daten zur Personalisierung des Benutzererlebnisses, wie z. B. empfohlene Inhalte oder Einstellungen.';
$_['help_security_storage']         = 'Stellt die Speicherung von sicherheitsrelevanten Daten sicher, z. B. für Betrugsprävention und sichere Zugriffskontrolle.';
$_['help_wait_for_update']          = 'Bestimmt die Zeit (in Millisekunden), die gewartet werden soll, bevor der Zustimmungsstatus aktualisiert wird, um sicherzustellen, dass alle Einstellungen angewendet werden.';
$_['help_ads_data_redaction']       = 'Reduziert Benutzerdaten, die mit Anzeigen in Verbindung stehen, und sorgt für Datenschutz, indem bestimmte identifizierbare Informationen verborgen werden.';
$_['help_url_passthrough']          = 'Ermöglicht es, dass die URL die Zustimmungsprüfung passiert, was nützlich ist, um bestimmte Benutzerpfade zu verfolgen, ohne persönliche Daten zu speichern.';
$_['help_gcm_status']               = 'Aktiviert den Google Consent Mode, der es Ihrer Website ermöglicht, das Verhalten von Google-Tags basierend auf den Zustimmungspräferenzen der Benutzer anzupassen. Dieser Modus bietet datenschutzfreundliches Tracking, das die Funktionalität von Analysen und Werbung im Einklang mit den Zustimmungspräferenzen ermöglicht.';
$_['help_gtm_id_locate']            = 'Um Ihre Mess-ID für das <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">Google Tag Manager-Konto</a> zu finden, suchen Sie nach der ID oben im Dashboard des Arbeitsbereichs. Sie beginnt mit "GTM-" und wird von einer einzigartigen Reihe von Buchstaben und Zahlen gefolgt, z. B. "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=de" target="_blank" rel="external noopener noreferrer">Detaillierte Anweisungen hier</a>.';

// Error
$_['error_permission']              = 'Warnung: Sie haben nicht die Berechtigung, die Einstellungen des Google Tag Managers zu ändern!';
$_['error_gtm_id']                  = 'Das Feld für die GTM-ID ist erforderlich. Bitte geben Sie Ihre Measurement ID ein.';
$_['error_gtm_id_invalid']          = 'Das Format der GTM-ID ist ungültig. Stellen Sie sicher, dass es dem Format GTM-XXXXXXXX entspricht.';
$_['error_wait_for_update']         = 'Der Wert für auf Update warten muss eine Zahl zwischen 0 und 10000 Millisekunden sein.';

