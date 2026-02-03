<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Kezdő lépések';
$_['heading_setup']                = 'Google Tag Manager beállítása';
$_['heading_troubleshot']          = 'Gyakori hibakeresési lépések';
$_['heading_faq']                  = 'GYIK';
$_['heading_contact']              = 'Terméktámogatás';

// Text
$_['text_extension']                = 'Bővítmények';
$_['text_edit']                     = 'Google Tag Manager szerkesztése';
$_['text_success']                  = 'Siker: A Google Tag Manager módosítása megtörtént!';
$_['text_group_ad_settings']        = 'Hirdetési beállítások';
$_['text_group_analytics_settings'] = 'Analitikai beállítások';
$_['text_group_security_settings']  = 'Biztonsági beállítások';
$_['text_group_advanced_settings']  = 'Fejlett beállítások';
$_['text_getting_started']          = '<p><strong>Áttekintés:</strong> A Playful Sparkle - Google Tag Manager bővítmény az OpenCart 3-hoz lehetővé teszi a marketingcímkék egyszerű kezelését és telepítését az OpenCart áruházában, programozói tudás nélkül. Ezzel a bővítménnyel optimalizálhatja a nyomkövetési beállításait, lehetővé téve a jobb analitikát és a hatékonyabb marketinget.</p><p><strong>Előfeltételek:</strong> Biztosítsa, hogy rendelkezik Google Tag Manager fiókkal, érvényes Measurement ID-vel, és hogy kompatibilis OpenCart 3.x+, PHP 7.3 verziót használ.</p>';
$_['text_setup']                    = '<p><strong>Google Tag Manager beállítása:</strong> Jelentkezzen be a <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">Google Tag Manager fiókjába</a>, ha még nem tette meg, hozzon létre egy új tárolót a weboldala számára, és szerezze meg a Measurement ID-jét. Ezután adja meg ezt az azonosítót a Playful Sparkle - Google Tag Manager bővítmény beállításainak kijelölt mezőjében az OpenCart áruházában.</p>';
$_['text_troubleshot']              = '<ul><li><strong>A GTM azonosító formátuma hibás</strong><br>A "A GTM azonosító formátuma hibás. Győződjön meg róla, hogy a következő formátumot követi: GTM-XXXXXXXX." üzenet azt jelenti, hogy a megadott GTM konténerazonosító nem felel meg az elvárt mintának.<br><strong>Megoldás:</strong> Lépjen be a Google Tag Manager fiókjába, nyissa meg a konténert, másolja ki a fejlécben látható konténerazonosítót, majd illessze be a bővítmény beállításaiba.<br><strong>Ellenőrzés:</strong> Az azonosítónak <strong>GTM-</strong> előtaggal kell kezdődnie, és a kötőjel után kizárólag nagybetűket és számokat tartalmazhat.</li>
<li><strong>Hiányzik a &lt;noscript&gt;&lt;iframe&gt; a webáruházban</strong><br>Ha a &lt;noscript&gt;&lt;iframe&gt; részlet nem található meg az oldal forráskódjában, előfordulhat, hogy a módosítás nem került alkalmazásra, vagy a sablon szerkezetéből hiányzik a szükséges tag.<br><strong>Megoldás:</strong><br>1) Az admin felületen lépjen a <strong>Extensions → Modifications</strong> menüpontra, majd kattintson a <strong>Refresh</strong> gombra a módosítások gyorsítótárának újraépítéséhez.<br>2) Az admin felületen lépjen a <strong>Extensions → Extensions</strong> menüpontra, válassza ki a bővítmény típusát, majd kattintson a <strong>Refresh</strong> gombra a bővítmények gyorsítótárának újraépítéséhez.<br>3) Ellenőrizze az aktív sablont, és győződjön meg róla, hogy tartalmaz érvényes <strong>&lt;body&gt;</strong> taget. A GTM beillesztés erre támaszkodik.<br><strong>Ellenőrzés:</strong> Nyissa meg a webáruházat, tekintse meg az oldal forráskódját, keressen rá a <strong>googletagmanager.com/ns.html</strong> kifejezésre, és ellenőrizze, hogy a &lt;noscript&gt; blokk jelen van.</li>
<li><strong>Nem kerülnek események rögzítésre a GTM-ben vagy a GA-ban</strong><br>Ha az áruház betölt, de a Google Tag Managerben vagy a Google Analyticsben nem lát találatokat, triggereket vagy eseményeket, a mérés jellemzően érvénytelen GTM azonosító vagy a GTM konténerben hibásan beállított GA tag miatt nem működik.<br><strong>Megoldás:</strong><ol><li>Ellenőrizze, hogy a bővítményben megadott GTM azonosító pontosan megegyezik a konténerazonosítójával.</li><li>A Google Tag Managerben nyissa meg a konténert, és ellenőrizze a GA4 beállításait.</li><li>Ellenőrizze, hogy a <strong>Measurement ID</strong> (formátum: <strong>G-XXXXXXXXXX</strong>) helyes a GA4 tag beállításaiban.</li><li>Használja a <strong>GTM Preview (Tag Assistant)</strong> módot annak ellenőrzésére, hogy a tagek elsülnek az oldalmegtekintéskor és az eseményeknél.</li></ol><br><strong>Ellenőrzés:</strong> A GTM Preview nézetben látnia kell, hogy a GA tag elsül. A GA Realtime vagy DebugView nézetben aktív felhasználókat vagy hibakeresési eseményeket kell látnia.</li></ul>';
$_['text_faq']                      = '<details><summary>Mi a teendő, ha nem látom a címkéim aktiválódását a Google Tag Manager-ben?</summary>Győződjön meg arról, hogy a Measurement ID-je helyes, és ellenőrizze, hogy a címkék publikálva vannak, és megfelelően vannak konfigurálva a megfelelő aktiválókkal.</details><details><summary>Hogyan ellenőrizhetem, hogy a bővítmény működik-e?</summary>Használja a <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> Chrome bővítményt, vagy a Google Tag Manager előnézeti módját, hogy megbizonyosodjon arról, hogy a címkék a várt módon aktiválódnak.</details><details><summary>Ez a bővítmény kompatibilis más bővítményekkel?</summary>Ez a bővítmény általában kompatibilis, de ajánlott tesztelni más, az oldalon telepített bővítményekkel az ütközések elkerülése érdekében. Ha problémák merülnek fel, ellenőrizze a már ismert kompatibilitási problémákat.</details><details><summary>Hogyan hárítsam el a gyakori címkeproblémákat?</summary>Tekintse meg a Google Tag Manager hibakeresési útmutatóját a gyakori címkeproblémák és a konfigurálás legjobb gyakorlatai kapcsán.</details>';
$_['text_contact']                  = '<p>További segítségért kérjük, lépjen kapcsolatba támogatási csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';
$_['text_gcm_info']                 = 'A funkció használatához győződjön meg róla, hogy cookie banner van telepítve. Ez a kiterjesztés alapértelmezés szerint egy alapértelmezett beleegyezési állapotot állít be, de a cookie banner felelős a beleegyezés frissítéséért az adatgyűjtés engedélyezéséhez.';

// Tab
$_['tab_general']                   = 'Általános';
$_['tab_gcm']                       = 'Google Hozzájárulás Mód (GCM)';
$_['tab_help_and_support']          = 'Segítség &amp; Támogatás';

// Entry
$_['entry_status']                  = 'Állapot';
$_['entry_gtm_id']                  = 'Measurement ID';
$_['entry_gcm_status']              = 'GCM engedélyezése';
$_['entry_ad_storage']              = 'Hirdetés tárolása';
$_['entry_ad_user_data']            = 'Hirdetés felhasználói adatok';
$_['entry_ad_personalization']      = 'Hirdetés személyre szabása';
$_['entry_analytics_storage']       = 'Analitika tárolása';
$_['entry_functionality_storage']   = 'Funkcionalitás tárolása';
$_['entry_personalization_storage'] = 'Személyre szabás tárolása';
$_['entry_security_storage']        = 'Biztonsági tárolás';
$_['entry_wait_for_update']         = 'Várakozás frissítésre';
$_['entry_ads_data_redaction']      = 'Hirdetési adatok visszatartása';
$_['entry_url_passthrough']         = 'URL továbbítás';
$_['entry_strict']                  = 'Szigorú';
$_['entry_balanced']                = 'Kiegyensúlyozott';
$_['entry_custom']                  = 'Egyedi';
$_['entry_gcm_profiles']            = 'GCM profilok';

// Help
$_['help_ad_storage']               = 'Szabályozza az adatok hirdetési célú tárolását, mint például hirdetési kattintások és konverziók nyomkövetése.';
$_['help_ad_user_data']             = 'Megadja, hogy a hirdetésekkel interakcióba lépő felhasználókról szóló adatok tárolásra kerülnek-e, ezáltal javítva a hirdetési célzást.';
$_['help_ad_personalization']       = 'Lehetővé teszi a hirdetések személyre szabását felhasználói adatok alapján, relevánsabb hirdetéseket biztosítva a felhasználók számára.';
$_['help_analytics_storage']        = 'Lehetővé teszi az analitikai célokra használt adatok tárolását, segítve ezzel a weboldal teljesítményének és a felhasználói viselkedés nyomon követését.';
$_['help_functionality_storage']    = 'Lehetővé teszi az adatok tárolását a weboldal funkcionális elemeinek támogatására, például felhasználói preferenciák vagy weboldal jellemzők javítására.';
$_['help_personalization_storage']  = 'Szabályozza a felhasználói élmény személyre szabásához szükséges adatok tárolását, például tartalom vagy ajánlások személyre szabását.';
$_['help_security_storage']         = 'Biztosítja a biztonsággal kapcsolatos adatok tárolását, beleértve a csalásmegelőzést és a biztonságos hozzáférés-ellenőrzést.';
$_['help_wait_for_update']          = 'Beállítja azt az időt (ezredmásodpercben), amelyet a hozzájárulási állapot frissítése előtt várni kell, ezzel biztosítva, hogy minden beállítás alkalmazva legyen.';
$_['help_ads_data_redaction']       = 'Visszatartja a hirdetésekkel kapcsolatos felhasználói adatokat, ezáltal védve a felhasználók magánéletét és elrejtve a személyazonosításra alkalmas információkat.';
$_['help_url_passthrough']          = 'Lehetővé teszi, hogy az URL átmenjen a hozzájárulási ellenőrzéseken, ami segíti a konkrét felhasználói útvonalak nyomkövetését anélkül, hogy személyes adatokat tárolna.';
$_['help_gcm_status']               = 'Engedélyezi a Google Hozzájárulás Módot (GCM), lehetővé téve az Ön weboldala számára, hogy alkalmazkodjon a felhasználói hozzájárulási beállításokhoz a Google címkék viselkedésének megváltoztatásával. Ez a mód adatvédelmi szempontból barátságos nyomkövetést tesz lehetővé, biztosítva az analitikai és hirdetési funkciók összhangját a hozzájárulási preferenciákkal.';
$_['help_gtm_id_locate']            = 'A Measurement ID azonosítót a <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">Google Tag Manager fiókjában</a> találhatja meg a munkaterület irányítópultjának tetején. Az azonosító "GTM-" betűkkel kezdődik, amelyet betűk és számok egyedi kombinációja követ, például "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=hu" target="_blank" rel="external noopener noreferrer">Részletes útmutató itt</a>.';


// Error
$_['error_permission']              = 'Figyelmeztetés: Nincs engedélye a Google Tag Manager beállításainak módosítására!';
$_['error_gtm_id']                  = 'A GTM azonosító mező kötelező. Kérjük, adja meg a Measurement ID-jét.';
$_['error_gtm_id_invalid']          = 'A GTM azonosító formátuma helytelen. Győződjön meg arról, hogy a GTM-XXXXXXXX formátumot követi.';
$_['error_wait_for_update']         = 'A Várakozás a frissítésre értékének 0 és 10000 millisekundum közötti számnak kell lennie.';
