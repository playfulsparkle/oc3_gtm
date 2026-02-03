<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Začínáme';
$_['heading_setup']                = 'Nastavení Google Tag Manageru';
$_['heading_troubleshot']          = 'Běžné řešení problémů';
$_['heading_faq']                  = 'Často kladené otázky';
$_['heading_contact']              = 'Kontaktujte podporu';

// Text
$_['text_extension']                = 'Rozšíření';
$_['text_edit']                     = 'Upravit Google Tag Manager';
$_['text_success']                  = 'Úspěch: Úspěšně jste upravili Google Tag Manager!';
$_['text_group_ad_settings']        = 'Nastavení reklam';
$_['text_group_analytics_settings'] = 'Nastavení analytiky';
$_['text_group_security_settings']  = 'Nastavení zabezpečení';
$_['text_group_advanced_settings']  = 'Pokročilá nastavení';
$_['text_getting_started']          = '<p><strong>Přehled:</strong> Rozšíření Playful Sparkle - Google Tag Manager pro OpenCart 3.x umožňuje snadno spravovat a nasazovat marketingové značky ve vašem obchodě OpenCart bez znalosti programování. S tímto rozšířením můžete zjednodušit nastavení sledování, což zlepší analytiku a marketingovou efektivitu.</p><p><strong>Požadavky:</strong> Zajistěte si účet Google Tag Manager, platný Measurement ID a používejte kompatibilní verzi OpenCart 3.x+, PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>Nastavení Google Tag Manageru:</strong> Přihlaste se do svého <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">účtu Google Tag Manager</a>, pokud ještě nemáte, vytvořte nový kontejner pro svou webovou stránku a získejte svůj Measurement ID. Poté zadejte tento ID do příslušného pole nastavení rozšíření Playful Sparkle - Google Tag Manager ve vašem obchodě OpenCart.</p>';
$_['text_troubleshot']              = '<ul><li><strong>Formát ID GTM je nesprávný</strong><br>Zpráva "Formát ID GTM je nesprávný. Ujistěte se, že odpovídá formátu GTM-XXXXXXXX." znamená, že zadané ID kontejneru GTM neodpovídá požadovanému formátu.<br><strong>Řešení:</strong> Přejděte do svého účtu Google Tag Manager, otevřete kontejner, zkopírujte ID kontejneru zobrazené v záhlaví a vložte jej do nastavení rozšíření.<br><strong>Ověření:</strong> ID musí začínat <strong>GTM-</strong> a za pomlčkou smí obsahovat pouze velká písmena a číslice.</li>
<li><strong>Na storefrontu chybí &lt;noscript&gt;&lt;iframe&gt;</strong><br>Pokud se ve zdrojovém kódu stránky nenachází úryvek &lt;noscript&gt;&lt;iframe&gt;, úprava se pravděpodobně neaplikovala, nebo ve struktuře šablony chybí požadovaný tag.<br><strong>Řešení:</strong><br>1) V administraci přejděte na <strong>Extensions → Modifications</strong> a klikněte na <strong>Refresh</strong> pro znovuvytvoření cache modifikací.<br>2) V administraci přejděte na <strong>Extensions → Extensions</strong>, zvolte typ rozšíření a klikněte na <strong>Refresh</strong> pro znovuvytvoření cache rozšíření.<br>3) Zkontrolujte aktivní šablonu motivu a ujistěte se, že obsahuje platný tag <strong>&lt;body&gt;</strong>. Vložení GTM je na něm závislé.<br><strong>Ověření:</strong> Otevřete storefront, zobrazte zdrojový kód stránky, vyhledejte <strong>googletagmanager.com/ns.html</strong> a potvrďte, že je přítomen blok &lt;noscript&gt;.</li>
<li><strong>V GTM nebo GA se nesledují žádné události</strong><br>Pokud se obchod načte, ale v Google Tag Manageru nebo Google Analytics nevidíte žádné hity, spouštěče ani události, bývá sledování zablokováno neplatným ID GTM nebo nesprávně nakonfigurovaným tagem GA uvnitř kontejneru GTM.<br><strong>Řešení:</strong><ol><li>Ověřte, že ID GTM v rozšíření přesně odpovídá ID vašeho kontejneru.</li><li>V Google Tag Manageru otevřete kontejner a ověřte nastavení GA4.</li><li>Ověřte, že <strong>Measurement ID</strong> (formát <strong>G-XXXXXXXXXX</strong>) je v nastavení tagu GA4 správné.</li><li>Použijte <strong>GTM Preview (Tag Assistant)</strong> a ověřte, že se tagy spouštějí při zobrazení stránky i při událostech.</li></ol><br><strong>Ověření:</strong> V režimu GTM Preview byste měli vidět spouštění tagu GA. V GA Realtime nebo DebugView byste měli vidět aktivní uživatele nebo ladicí události.</li></ul>';
$_['text_faq']                      = '<details><summary>Co dělat, když se mi značky ve Google Tag Manageru nespouští?</summary>Ujistěte se, že vaše Measurement ID je správné, a ověřte, že jsou značky publikovány a správně nastaveny s odpovídajícími spouštěči.</details><details><summary>Jak mohu zkontrolovat, zda rozšíření funguje?</summary>Využijte rozšíření <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> pro Chrome nebo režim náhledu v Google Tag Manageru, abyste potvrdili, že se vaše značky spouští, jak očekáváte.</details><details><summary>Je toto rozšíření kompatibilní s jinými rozšířeními?</summary>I když je toto rozšíření obecně kompatibilní, doporučuje se otestovat ho s jinými rozšířeními nainstalovanými na vašem webu, abyste se vyhnuli konfliktům. Pokud narazíte na problémy, zkontrolujte známé problémy s kompatibilitou.</details><details><summary>Jak řešit běžné problémy se značkami?</summary>Odkazujte na příručku pro řešení problémů Google Tag Manager pro pomoc s běžnými problémy se značkami a nejlepšími postupy pro konfiguraci.</details>';
$_['text_contact']                  = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';
$_['text_gcm_info']                 = 'Pro použití této funkce se ujistěte, že máte nainstalovaný banner pro soubory cookie. Tato rozšíření nastaví výchozí základní stav souhlasu, ale banner pro soubory cookie je zodpovědný za aktualizaci souhlasu, aby umožnil sběr dat.';

// Tab
$_['tab_general']                   = 'Obecné';
$_['tab_gcm']                       = 'Google Conset Mode (GCM)';
$_['tab_help_and_support']          = 'Nápověda a podpora';

// Entry
$_['entry_status']                  = 'Stav';
$_['entry_gtm_id']                  = 'Measurement ID';
$_['entry_gcm_status']              = 'Povolit GCM';
$_['entry_ad_storage']              = 'Úložiště reklam';
$_['entry_ad_user_data']            = 'Údaje o uživatelských reklamách';
$_['entry_ad_personalization']      = 'Personalizace reklam';
$_['entry_analytics_storage']       = 'Úložiště analytiky';
$_['entry_functionality_storage']   = 'Úložiště funkcionality';
$_['entry_personalization_storage'] = 'Úložiště personalizace';
$_['entry_security_storage']        = 'Úložiště zabezpečení';
$_['entry_wait_for_update']         = 'Čekat na aktualizaci';
$_['entry_ads_data_redaction']      = 'Redakce údajů o reklamách';
$_['entry_url_passthrough']         = 'Přesměrování URL';
$_['entry_strict']                  = 'Přísný';
$_['entry_balanced']                = 'Vyvážený';
$_['entry_custom']                  = 'Vlastní';
$_['entry_gcm_profiles']            = 'Profily GCM';

// Help
$_['help_ad_storage']               = 'Určuje, zda mohou být ukládána data pro účely související s reklamami, například sledování kliknutí nebo konverzí.';
$_['help_ad_user_data']             = 'Povoluje ukládání dat o uživatelích interagujících s reklamami pro zlepšení cílení reklam.';
$_['help_ad_personalization']       = 'Povoluje personalizaci reklam na základě uživatelských dat.';
$_['help_analytics_storage']        = 'Povoluje ukládání dat pro analytické účely, například sledování výkonu webu.';
$_['help_functionality_storage']    = 'Umožňuje ukládání dat podporujících funkčnost webu, například uživatelských preferencí.';
$_['help_personalization_storage']  = 'Umožňuje ukládání dat pro personalizaci uživatelského zážitku, například doporučeného obsahu.';
$_['help_security_storage']         = 'Povoluje ukládání dat pro zabezpečení, například ochranu proti podvodům.';
$_['help_wait_for_update']          = 'Určuje čas (v milisekundách) pro vyčkání před aktualizací stavu souhlasu.';
$_['help_ads_data_redaction']       = 'Anonymizuje uživatelská data související s reklamami pro ochranu soukromí.';
$_['help_url_passthrough']          = 'Povoluje, aby URL prošly kontrolami souhlasu, aniž by byly ukládány osobní údaje.';
$_['help_gcm_status']               = 'Povoluje Google režim souhlasu, přizpůsobující chování značek podle uživatelských preferencí.';
$_['help_gtm_id_locate']            = 'Chcete-li najít své ID měření pro <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">Google Tag Manager</a>, podívejte se do horní části panelu pracovního prostoru. ID začíná písmeny "GTM-" následovanými unikátní kombinací písmen a čísel, například "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=cs" target="_blank" rel="external noopener noreferrer">Podrobnější návod zde</a>.';

// Error
$_['error_permission']              = 'Upozornění: Nemáte oprávnění upravovat nastavení Google Tag Manageru!';
$_['error_gtm_id']                  = 'Pole ID GTM je povinné. Prosím zadejte své Measurement ID.';
$_['error_gtm_id_invalid']          = 'Formát ID GTM je nesprávný. Ujistěte se, že následuje formát GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'Hodnota pro Počkejte na aktualizaci musí být číslo mezi 0 a 10000 milisekundami.';
