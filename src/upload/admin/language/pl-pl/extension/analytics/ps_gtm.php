<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Pierwsze kroki';
$_['heading_setup']                = 'Konfiguracja Google Tag Manager';
$_['heading_troubleshot']          = 'Typowe problemy i ich rozwiązywanie';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Kontakt z pomocą techniczną';

// Text
$_['text_extension']                = 'Rozszerzenia';
$_['text_edit']                     = 'Edytuj Google Tag Manager';
$_['text_success']                  = 'Sukces: Zmodyfikowano Google Tag Manager!';
$_['text_group_ad_settings']        = 'Ustawienia reklam';
$_['text_group_analytics_settings'] = 'Ustawienia analityki';
$_['text_group_security_settings']  = 'Ustawienia bezpieczeństwa';
$_['text_group_advanced_settings']  = 'Ustawienia zaawansowane';
$_['text_getting_started']          = '<p><strong>Przegląd:</strong> Playful Sparkle - Google Tag Manager dla OpenCart 3.x pozwala na łatwe zarządzanie i wdrażanie tagów marketingowych w Twoim sklepie OpenCart bez umiejętności kodowania. Dzięki temu rozszerzeniu możesz usprawnić konfigurację śledzenia, co pozwoli na lepszą analitykę i efektywność marketingową.</p><p><strong>Wymagania:</strong> Upewnij się, że masz konto Google Tag Manager, ważny identyfikator pomiaru i że używasz kompatybilnej wersji OpenCart 3.x+, PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>Konfiguracja Google Tag Manager:</strong> Zaloguj się na swoje <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">konto Google Tag Manager</a>, utwórz nowy kontener dla swojej strony internetowej, jeśli jeszcze tego nie zrobiłeś, i pobierz swój identyfikator pomiaru. Następnie wprowadź ten identyfikator w wyznaczonym polu ustawień rozszerzenia Playful Sparkle - Google Tag Manager w swoim sklepie OpenCart.</p>';
$_['text_troubleshot']              = '<ul><li><strong>Format identyfikatora GTM jest nieprawidłowy</strong><br>Komunikat "Format identyfikatora GTM jest nieprawidłowy. Proszę upewnić się, że jest zgodny z formatem GTM-XXXXXXXX." oznacza, że wprowadzony identyfikator kontenera GTM nie spełnia wymaganego wzorca.<br><strong>Rozwiązanie:</strong> Proszę przejść do konta Google Tag Manager, otworzyć kontener, skopiować identyfikator kontenera widoczny w nagłówku, a następnie wkleić go do ustawień rozszerzenia.<br><strong>Weryfikacja:</strong> Identyfikator musi zaczynać się od <strong>GTM-</strong> i po myślniku może zawierać wyłącznie wielkie litery oraz cyfry.</li>
<li><strong>Brakuje &lt;noscript&gt;&lt;iframe&gt; w witrynie sklepu</strong><br>Jeżeli fragment &lt;noscript&gt;&lt;iframe&gt; nie występuje w źródle strony, modyfikacja mogła nie zostać zastosowana lub w strukturze motywu brakuje wymaganego znacznika.<br><strong>Rozwiązanie:</strong><br>1) W panelu administracyjnym przejdź do <strong>Extensions → Modifications</strong> i kliknij <strong>Refresh</strong>, aby przebudować pamięć podręczną modyfikacji.<br>2) W panelu administracyjnym przejdź do <strong>Extensions → Extensions</strong>, wybierz typ rozszerzenia i kliknij <strong>Refresh</strong>, aby przebudować pamięć podręczną rozszerzeń.<br>3) Proszę sprawdzić szablon aktywnego motywu i upewnić się, że zawiera poprawny znacznik <strong>&lt;body&gt;</strong>. Wstawianie GTM opiera się na jego obecności.<br><strong>Weryfikacja:</strong> Proszę otworzyć witrynę sklepu, wyświetlić źródło strony, wyszukać <strong>googletagmanager.com/ns.html</strong> i potwierdzić, że blok &lt;noscript&gt; jest obecny.</li>
<li><strong>Brak śledzenia zdarzeń w GTM lub GA</strong><br>Jeżeli sklep się ładuje, ale nie widać żadnych hitów, wyzwalaczy ani zdarzeń w Google Tag Manager lub Google Analytics, śledzenie jest zwykle blokowane przez nieprawidłowy identyfikator GTM albo błędnie skonfigurowany tag GA w kontenerze GTM.<br><strong>Rozwiązanie:</strong><ol><li>Proszę potwierdzić, że identyfikator GTM w rozszerzeniu dokładnie odpowiada identyfikatorowi kontenera.</li><li>W Google Tag Manager proszę otworzyć kontener i zweryfikować konfigurację GA4.</li><li>Proszę potwierdzić, że <strong>Measurement ID</strong> (format <strong>G-XXXXXXXXXX</strong>) jest poprawny w ustawieniach tagu GA4.</li><li>Proszę użyć <strong>GTM Preview (Tag Assistant)</strong>, aby potwierdzić, że tagi uruchamiają się przy wyświetleniu strony oraz przy zdarzeniach.</li></ol><br><strong>Weryfikacja:</strong> W GTM Preview powinno być widoczne uruchamianie tagu GA. W GA Realtime lub DebugView powinny być widoczne aktywne osoby lub zdarzenia debugowania.</li></ul>';
$_['text_faq']                      = '<details><summary>Co zrobić, jeśli nie widzę moich tagów uruchamiających się w Google Tag Manager?</summary>Upewnij się, że Twój identyfikator pomiaru jest poprawny i zweryfikuj, czy tagi są opublikowane i poprawnie skonfigurowane z odpowiednimi wyzwalaczami.</details><details><summary>Jak mogę sprawdzić, czy rozszerzenie działa?</summary>Skorzystaj z rozszerzenia Chrome <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> lub trybu podglądu w Google Tag Manager, aby potwierdzić, że Twoje tagi uruchamiają się zgodnie z oczekiwaniami.</details><details><summary>Czy to rozszerzenie jest kompatybilne z innymi rozszerzeniami?</summary>Chociaż to rozszerzenie jest generalnie kompatybilne, zaleca się przetestowanie go z innymi rozszerzeniami zainstalowanymi na Twojej stronie, aby uniknąć konfliktów. Jeśli napotkasz problemy, sprawdź znane problemy z kompatybilnością.</details><details><summary>Jak rozwiązywać typowe problemy z tagami?</summary>Zapoznaj się z przewodnikiem rozwiązywania problemów Google Tag Manager, aby uzyskać pomoc dotyczącą typowych problemów z tagami i najlepszych praktyk konfiguracji.</details>';
$_['text_contact']                  = '<p>Aby uzyskać dalszą pomoc, skontaktuj się z naszym zespołem wsparcia:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentacja:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentacja użytkownika</a></li></ul>';
$_['text_gcm_info']                 = 'Aby używać tej funkcji, upewnij się, że masz zainstalowany baner cookie. To rozszerzenie domyślnie ustawia podstawowy stan zgody, ale baner cookie jest odpowiedzialny za aktualizację zgody na zbieranie danych.';

// Tab
$_['tab_general']                   = 'Ogólne';
$_['tab_gcm']                       = 'Google Conset Mode (GCM)';
$_['tab_help_and_support']          = 'Pomoc i wsparcie';

// Entry
$_['entry_status']                  = 'Status';
$_['entry_gtm_id']                  = 'Identyfikator pomiaru';
$_['entry_gcm_status']              = 'Włącz GCM';
$_['entry_ad_storage']              = 'Przechowywanie reklam';
$_['entry_ad_user_data']            = 'Dane użytkownika dotyczące reklam';
$_['entry_ad_personalization']      = 'Personalizacja reklam';
$_['entry_analytics_storage']       = 'Przechowywanie danych analitycznych';
$_['entry_functionality_storage']   = 'Przechowywanie funkcjonalności';
$_['entry_personalization_storage'] = 'Przechowywanie personalizacji';
$_['entry_security_storage']        = 'Przechowywanie zabezpieczeń';
$_['entry_wait_for_update']         = 'Czekaj na aktualizację';
$_['entry_ads_data_redaction']      = 'Redakcja danych reklamowych';
$_['entry_url_passthrough']         = 'Przekazywanie URL';
$_['entry_strict']                  = 'Ścisły';
$_['entry_balanced']                = 'Zrównoważony';
$_['entry_custom']                  = 'Niestandardowy';
$_['entry_gcm_profiles']            = 'Profile GCM';

// Help
$_['help_ad_storage']               = 'Kontroluje, czy dozwolone jest przechowywanie danych w celach związanych z reklamami, takich jak śledzenie kliknięć reklam lub konwersji.';
$_['help_ad_user_data']             = 'Określa, czy dane o użytkownikach wchodzących w interakcje z reklamami są przechowywane, co zwiększa możliwości targetowania reklam.';
$_['help_ad_personalization']       = 'Umożliwia personalizację reklam na podstawie danych użytkownika, dostarczając użytkownikom bardziej trafnych reklam.';
$_['help_analytics_storage']        = 'Włącza przechowywanie danych wykorzystywanych do celów analitycznych, pomagając w śledzeniu wydajności witryny i zachowań użytkowników.';
$_['help_functionality_storage']    = 'Umożliwia przechowywanie danych w celu wspierania funkcjonalności, takich jak preferencje użytkownika lub funkcje witryny, które poprawiają komfort użytkowania.';
$_['help_personalization_storage']  = 'Kontroluje przechowywanie danych w celu personalizacji doświadczenia użytkownika, takich jak rekomendowane treści lub ustawienia.';
$_['help_security_storage']         = 'Zapewnia przechowywanie danych związanych z bezpieczeństwem, takich jak zapobieganie oszustwom i bezpieczna kontrola dostępu.';
$_['help_wait_for_update']          = 'Ustawia czas (w milisekundach) opóźnienia przed aktualizacją statusu zgody, zapewniając zastosowanie wszystkich ustawień.';
$_['help_ads_data_redaction']       = 'Redaguje dane użytkownika związane z reklamami, zapewniając prywatność poprzez ukrywanie pewnych informacji umożliwiających identyfikację.';
$_['help_url_passthrough']          = 'Umożliwia przekazywanie adresu URL przez kontrole zgody, co jest przydatne do śledzenia określonych ścieżek użytkownika bez przechowywania danych osobowych.';
$_['help_gcm_status']               = 'Włącza tryb zgody Google, umożliwiając Twojej witrynie dostosowanie zachowania tagów Google na podstawie ustawień zgody użytkownika. Ten tryb zapewnia przyjazne dla prywatności śledzenie, umożliwiając działanie analityki i reklam zgodnie z preferencjami dotyczącymi zgody.';
$_['help_gtm_id_locate']            = 'Aby znaleźć swój identyfikator pomiaru, zaloguj się na swoje <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">konto Google Tag Manager</a>. W obszarze roboczym poszukaj identyfikatora u góry pulpitu nawigacyjnego — zaczyna się od "GTM-" a następnie unikalnej serii liter i cyfr, na przykład "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=en" target="_blank" rel="external noopener noreferrer">Bardziej szczegółowe instrukcje znajdziesz tutaj</a>.';

// Error
$_['error_permission']              = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania ustawień Google Tag Manager!';
$_['error_gtm_id']                  = 'Pole identyfikatora GTM jest wymagane. Wprowadź swój identyfikator pomiaru.';
$_['error_gtm_id_invalid']          = 'Format identyfikatora GTM jest nieprawidłowy. Upewnij się, że jest zgodny z formatem GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'Wartość "Czekaj na aktualizację" musi być liczbą z zakresu od 0 do 10000 milisekund.';
