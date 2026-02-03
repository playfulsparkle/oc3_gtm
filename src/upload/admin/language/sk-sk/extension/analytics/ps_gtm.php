<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Začíname';
$_['heading_setup']                = 'Nastavenie Google Tag Manager';
$_['heading_troubleshot']          = 'Bežné problémy';
$_['heading_faq']                  = 'Často kladené otázky';
$_['heading_contact']              = 'Kontaktujte podporu';

// Text
$_['text_extension']                = 'Rozšírenia';
$_['text_edit']                     = 'Upraviť Google Tag Manager';
$_['text_success']                  = 'Úspech: Úspešne ste upravili Google Tag Manager!';
$_['text_group_ad_settings']        = 'Nastavenia reklám';
$_['text_group_analytics_settings'] = 'Nastavenia analytiky';
$_['text_group_security_settings']  = 'Nastavenia zabezpečenia';
$_['text_group_advanced_settings']  = 'Pokročilé nastavenia';
$_['text_getting_started']          = '<p><strong>Prehľad:</strong> Rozšírenie Playful Sparkle - Google Tag Manager pre OpenCart 3.x vám umožňuje jednoducho spravovať a nasadzovať marketingové značky vo vašom obchode OpenCart bez akýchkoľvek programovacích zručností. S týmto rozšírením môžete zjednodušiť nastavenie sledovania, čo umožňuje lepšiu analytiku a efektivitu marketingu.</p><p><strong>Požiadavky:</strong> Uistite sa, že máte účet Google Tag Manager, platný Measurement ID a že používate kompatibilnú verziu OpenCart 3.x+, PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>Nastavenie Google Tag Manager:</strong> Prihláste sa do svojho <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">účtu Google Tag Manager</a>, vytvorte nový kontajner pre vašu webovú stránku, ak ste to ešte neurobili, a získajte svoj Measurement ID. Potom zadajte tento ID do určeného poľa nastavení rozšírenia Playful Sparkle - Google Tag Manager vo vašom obchode OpenCart.</p>';
$_['text_troubleshot']              = '<ul><li><strong>Formát GTM ID je nesprávny</strong><br>Hlásenie "Formát GTM ID je nesprávny. Uistite sa, že zodpovedá formátu GTM-XXXXXXXX." znamená, že zadané ID kontajnera GTM nezodpovedá požadovanému formátu.<br><strong>Riešenie:</strong> Prejdite do svojho účtu Google Tag Manager, otvorte kontajner, skopírujte ID kontajnera zobrazené v hlavičke a vložte ho do nastavení rozšírenia.<br><strong>Overenie:</strong> ID musí začínať <strong>GTM-</strong> a za pomlčkou môže obsahovať iba veľké písmená a čísla.</li>
<li><strong>Na storefronte chýba &lt;noscript&gt;&lt;iframe&gt;</strong><br>Ak sa úryvok &lt;noscript&gt;&lt;iframe&gt; nenachádza v zdrojovom kóde stránky, modifikácia sa pravdepodobne neaplikovala, alebo v štruktúre šablóny chýba požadovaný tag.<br><strong>Riešenie:</strong><br>1) V administrácii prejdite na <strong>Extensions → Modifications</strong> a kliknite na <strong>Refresh</strong> pre znovuvytvorenie cache modifikácií.<br>2) V administrácii prejdite na <strong>Extensions → Extensions</strong>, vyberte typ rozšírenia a kliknite na <strong>Refresh</strong> pre znovuvytvorenie cache rozšírení.<br>3) Skontrolujte šablónu aktívnej témy a uistite sa, že obsahuje platný tag <strong>&lt;body&gt;</strong>. Vloženie GTM je na ňom závislé.<br><strong>Overenie:</strong> Otvorte storefront, zobrazte zdrojový kód stránky, vyhľadajte <strong>googletagmanager.com/ns.html</strong> a potvrďte, že je prítomný blok &lt;noscript&gt;.</li>
<li><strong>V GTM alebo GA sa nesledujú žiadne udalosti</strong><br>Ak sa obchod načíta, ale v Google Tag Manageri alebo Google Analytics nevidíte žiadne hity, spúšťače ani udalosti, sledovanie je zvyčajne blokované neplatným GTM ID alebo nesprávne nakonfigurovaným tagom GA v rámci GTM kontajnera.<br><strong>Riešenie:</strong><ol><li>Overte, že GTM ID v rozšírení sa presne zhoduje s ID vášho kontajnera.</li><li>V Google Tag Manageri otvorte kontajner a overte nastavenie GA4.</li><li>Overte, že <strong>Measurement ID</strong> (formát <strong>G-XXXXXXXXXX</strong>) je v nastaveniach GA4 tagu správne.</li><li>Použite <strong>GTM Preview (Tag Assistant)</strong> a overte, že sa tagy spúšťajú pri zobrazení stránky aj pri udalostiach.</li></ol><br><strong>Overenie:</strong> V GTM Preview by ste mali vidieť spustenie GA tagu. V GA Realtime alebo DebugView by ste mali vidieť aktívnych používateľov alebo ladiace udalosti.</li></ul>';$_['text_faq']                      = '<details><summary>Čo robiť, ak nevidím, že sa moje značky spúšťajú v Google Tag Manager?</summary>Uistite sa, že vaše Measurement ID je správne a overte, či sú značky publikované a správne nakonfigurované so správnymi spúšťačmi.</details><details><summary>Ako môžem skontrolovať, či rozšírenie funguje?</summary>Využite rozšírenie <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> pre Chrome alebo režim náhľadu v Google Tag Manager na potvrdenie, že sa vaše značky spúšťajú podľa očakávania.</details><details><summary>Je toto rozšírenie kompatibilné s inými rozšíreniami?</summary>Hoci je toto rozšírenie vo všeobecnosti kompatibilné, odporúča sa ho otestovať s inými rozšíreniami nainštalovanými na vašej stránke, aby sa predišlo konfliktom. Ak narazíte na problémy, skontrolujte známe problémy s kompatibilitou.</details><details><summary>Ako môžem diagnostikovať bežné problémy so značkami?</summary>Odkazujte na príručku na diagnostiku Google Tag Manager na pomoc s bežnými problémami so značkami a najlepšími praktikami konfigurácie.</details>';
$_['text_contact']                  = '<p>Pre ďalšiu pomoc sa, prosím, obráťte na náš tím podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentácia:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentácia pre používateľov</a></li></ul>';
$_['text_gcm_info']                 = 'Na použitie tejto funkcie sa uistite, že máte nainštalovaný banner s cookies. Tento rozšírenie nastavuje základný stav súhlasu predvolene, ale banner s cookies je zodpovedný za aktualizáciu súhlasu na povolenie zbierania údajov.';

// Tab
$_['tab_general']                   = 'Všeobecné';
$_['tab_gcm']                       = 'Google Conset Mode (GCM)';
$_['tab_help_and_support']          = 'Pomoc &amp; Podpora';

// Entry
$_['entry_status']                  = 'Stav';
$_['entry_gtm_id']                  = 'Measurement ID';
$_['entry_gcm_status']              = 'Povoliť GCM';
$_['entry_ad_storage']              = 'Úložisko reklám';
$_['entry_ad_user_data']            = 'Údaje o používateľských reklamách';
$_['entry_ad_personalization']      = 'Personalizácia reklám';
$_['entry_analytics_storage']       = 'Úložisko analytických dát';
$_['entry_functionality_storage']   = 'Úložisko funkčnosti';
$_['entry_personalization_storage'] = 'Úložisko personalizácie';
$_['entry_security_storage']        = 'Úložisko bezpečnosti';
$_['entry_wait_for_update']         = 'Počkajte na aktualizáciu';
$_['entry_ads_data_redaction']      = 'Redakcia dát o reklamách';
$_['entry_url_passthrough']         = 'URL Passthrough';
$_['entry_strict']                  = 'Prísny';
$_['entry_balanced']                = 'Vyvážený';
$_['entry_custom']                  = 'Vlastný';
$_['entry_gcm_profiles']            = 'GCM Profily';

// Help
$_['help_ad_storage']               = 'Ovláda, či je povolené ukladať dáta na účely súvisiace s reklamami, ako je sledovanie kliknutí na reklamy alebo konverzie.';
$_['help_ad_user_data']             = 'Určuje, či sú ukladané dáta o používateľoch, ktorí interagujú s reklamami, čo zlepšuje schopnosti cielenej reklamy.';
$_['help_ad_personalization']       = 'Umožňuje personalizáciu reklám na základe údajov o používateľoch, čo poskytuje relevantnejšie reklamy pre používateľov.';
$_['help_analytics_storage']        = 'Povoľuje ukladanie dát používaných na analytické účely, čo pomáha sledovať výkon webu a správanie používateľov.';
$_['help_functionality_storage']    = 'Umožňuje ukladanie dát na podporu funkcionality, ako sú užívateľské preferencie alebo funkcie webu, ktoré zlepšujú používateľský zážitok.';
$_['help_personalization_storage']  = 'Ovláda ukladanie dát na personalizáciu užívateľského zážitku, ako sú odporúčaný obsah alebo nastavenia.';
$_['help_security_storage']         = 'Zabezpečuje ukladanie bezpečnostných dát, napríklad na prevenciu podvodov a bezpečnú kontrolu prístupu.';
$_['help_wait_for_update']          = 'Nastavuje čas (v milisekundách), ktorý sa má čakať pred aktualizovaním stavu súhlasu, aby bola zabezpečená aplikácia všetkých nastavení.';
$_['help_ads_data_redaction']       = 'Rediguje užívateľské dáta súvisiace s reklamami, čím zaisťuje ochranu súkromia skrytím niektorých identifikovateľných informácií.';
$_['help_url_passthrough']          = 'Umožňuje, aby URL prešla kontrolami súhlasu, čo je užitočné na sledovanie konkrétnych užívateľských ciest bez ukládania osobných údajov.';
$_['help_gcm_status']               = 'Povoľuje režim súhlasu Google, čo umožňuje vašej stránke prispôsobiť správanie Google značiek na základe nastavení súhlasu používateľa. Tento režim poskytuje sledovanie šetrné k súkromiu, čo umožňuje, aby analytika a reklamy fungovali v súlade so súhlasnými preferenciami.';
$_['help_gtm_id_locate']            = 'Ak chcete nájsť svoje ID merania pre svoj <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">účet Google Tag Manager</a>, vyhľadajte ID v hornej časti panela pracovného priestoru – začína písmenami "GTM-" nasledovanými jedinečnou sériou písmen a číslic, napr. "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=sk" target="_blank" rel="external noopener noreferrer">Podrobnejší návod tu</a>.';

// Error
$_['error_permission']              = 'Upozornenie: Nemáte povolenie na úpravu nastavení Google Tag Manager!';
$_['error_gtm_id']                  = 'Pole ID GTM je povinné. Zadajte svoje Measurement ID.';
$_['error_gtm_id_invalid']          = 'Formát ID GTM je nesprávny. Uistite sa, že dodržiava formát GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'Hodnota pre Čakať na aktualizáciu musí byť číslo medzi 0 a 10000 milisekundami.';
