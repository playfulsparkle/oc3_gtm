<?php
// Heading
$_['heading_title']                = 'Playful Sparkle - Google Tag Manager';
$_['heading_getting_started']      = 'Démarrage';
$_['heading_setup']                = 'Configuration de Google Tag Manager';
$_['heading_troubleshot']          = 'Dépannage courant';
$_['heading_faq']                  = 'FAQ';
$_['heading_contact']              = 'Contacter le support';

// Text
$_['text_extension']                = 'Extensions';
$_['text_edit']                     = 'Modifier Google Tag Manager';
$_['text_success']                  = 'Succès : Vous avez modifié Google Tag Manager !';
$_['text_group_ad_settings']        = 'Paramètres des annonces';
$_['text_group_analytics_settings'] = 'Paramètres des analyses';
$_['text_group_security_settings']  = 'Paramètres de sécurité';
$_['text_group_advanced_settings']  = 'Paramètres avancés';
$_['text_getting_started']          = '<p><strong>Présentation :</strong> Le Playful Sparkle - Google Tag Manager pour OpenCart 3.x vous permet de gérer et déployer facilement les balises marketing sur votre boutique OpenCart sans compétences en codage. Grâce à cette extension, vous pouvez simplifier votre configuration de suivi, permettant une meilleure analyse et une efficacité marketing accrue.</p><p><strong>Exigences :</strong> Assurez-vous de disposer d\'un compte Google Tag Manager, d\'un identifiant de mesure valide et d\'utiliser une version compatible d\'OpenCart 3.x+ ainsi que PHP 7.3.</p>';
$_['text_setup']                    = '<p><strong>Configuration de Google Tag Manager :</strong> Connectez-vous à votre <a href="https://tagmanager.google.com" target="_blank" rel="noopener noreferrer">compte Google Tag Manager</a>, créez un nouveau conteneur pour votre site web si ce n\'est pas déjà fait, puis récupérez votre identifiant de mesure. Ensuite, saisissez cet identifiant dans le champ prévu à cet effet dans les paramètres de l\'extension Playful Sparkle - Google Tag Manager de votre boutique OpenCart.</p>';
$_['text_troubleshot']              = '<ul><li><strong>Le format de l’identifiant GTM est incorrect</strong><br>Le message "Le format de l’identifiant GTM est incorrect. Assurez-vous qu’il respecte le format GTM-XXXXXXXX." signifie que l’identifiant de conteneur GTM saisi ne correspond pas au format requis.<br><strong>Solution :</strong> Accédez à votre compte Google Tag Manager, ouvrez votre conteneur, copiez l’identifiant du conteneur affiché dans l’en-tête, puis collez-le dans les paramètres de l’extension.<br><strong>Vérification :</strong> L’identifiant doit commencer par <strong>GTM-</strong> et ne contenir après le tiret que des lettres majuscules et des chiffres.</li>
<li><strong>La balise &lt;noscript&gt;&lt;iframe&gt; est absente sur la vitrine</strong><br>Si l’extrait &lt;noscript&gt;&lt;iframe&gt; n’apparaît pas dans le code source de la page, la modification n’a peut-être pas été appliquée, ou la structure du thème ne contient pas la balise requise.<br><strong>Solution :</strong><br>1) Dans l’administration, allez dans <strong>Extensions → Modifications</strong> puis cliquez sur <strong>Refresh</strong> pour reconstruire le cache des modifications.<br>2) Dans l’administration, allez dans <strong>Extensions → Extensions</strong>, sélectionnez le type d’extension puis cliquez sur <strong>Refresh</strong> pour reconstruire le cache des extensions.<br>3) Vérifiez le modèle du thème actif et assurez-vous qu’il contient une balise <strong>&lt;body&gt;</strong> valide. L’injection GTM en dépend.<br><strong>Vérification :</strong> Ouvrez la vitrine, affichez le code source, recherchez <strong>googletagmanager.com/ns.html</strong> et confirmez la présence du bloc &lt;noscript&gt;.</li>
<li><strong>Aucun événement n’est suivi dans GTM ou GA</strong><br>Si votre boutique se charge mais que vous ne voyez aucun hit, déclencheur ou événement dans Google Tag Manager ou Google Analytics, le suivi est généralement bloqué par un identifiant GTM invalide ou par une balise GA mal configurée dans le conteneur GTM.<br><strong>Solution :</strong><ol><li>Confirmez que l’identifiant GTM dans l’extension correspond exactement à l’identifiant de votre conteneur.</li><li>Dans Google Tag Manager, ouvrez le conteneur et vérifiez la configuration GA4.</li><li>Confirmez que le <strong>Measurement ID</strong> (format <strong>G-XXXXXXXXXX</strong>) est correct dans les paramètres de la balise GA4.</li><li>Utilisez <strong>GTM Preview (Tag Assistant)</strong> pour confirmer que les balises se déclenchent à l’affichage de page et lors des événements.</li></ol><br><strong>Vérification :</strong> Dans GTM Preview, vous devriez voir votre balise GA se déclencher. Dans GA Realtime ou DebugView, vous devriez voir des utilisateurs actifs ou des événements de débogage.</li></ul>';
$_['text_faq']                      = '<details><summary>Que faire si je ne vois pas mes balises se déclencher dans Google Tag Manager ?</summary>Assurez-vous que votre identifiant de mesure est correct et vérifiez que les balises sont publiées et correctement configurées avec les bons déclencheurs.</details><details><summary>Comment puis-je vérifier si l\'extension fonctionne ?</summary>Utilisez l\'extension <a href="https://tagassistant.google.com/" target="_blank" rel="noopener noreferrer">Google Tag Assistant</a> pour Chrome ou le mode de prévisualisation dans Google Tag Manager pour confirmer que vos balises se déclenchent comme prévu.</details><details><summary>Cette extension est-elle compatible avec d\'autres extensions ?</summary>Bien que cette extension soit généralement compatible, il est recommandé de la tester avec les autres extensions installées sur votre site pour éviter les conflits. Si vous rencontrez des problèmes, vérifiez les problèmes de compatibilité connus.</details><details><summary>Comment résoudre les problèmes courants de balises ?</summary>Consultez le guide de dépannage de Google Tag Manager pour vous aider à résoudre les problèmes courants de balises et suivre les meilleures pratiques de configuration.</details>';
$_['text_contact']                  = '<p>Pour toute assistance supplémentaire, veuillez contacter notre équipe de support :</p><ul><li><strong>Contact :</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation :</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentation de l\'utilisateur</a></li></ul>';
$_['text_gcm_info']                 = 'Pour utiliser cette fonctionnalité, assurez-vous d\'avoir installé un bandeau de cookies. Cette extension définit un état de consentement de base par défaut, mais le bandeau de cookies est responsable de la mise à jour du consentement pour permettre la collecte des données.';

// Tab
$_['tab_general']                   = 'Général';
$_['tab_gcm']                       = 'Mode de consentement Google (GCM)';
$_['tab_help_and_support']          = 'Aide &amp; Support';

// Entry
$_['entry_status']                  = 'Statut';
$_['entry_gtm_id']                  = 'Identifiant de mesure';
$_['entry_gcm_status']              = 'Activer le GCM';
$_['entry_ad_storage']              = 'Stockage des annonces';
$_['entry_ad_user_data']            = 'Données utilisateur des annonces';
$_['entry_ad_personalization']      = 'Personnalisation des annonces';
$_['entry_analytics_storage']       = 'Stockage des analyses';
$_['entry_functionality_storage']   = 'Stockage des fonctionnalités';
$_['entry_personalization_storage'] = 'Stockage de la personnalisation';
$_['entry_security_storage']        = 'Stockage de la sécurité';
$_['entry_wait_for_update']         = 'Attendre la mise à jour';
$_['entry_ads_data_redaction']      = 'Rédaction des données publicitaires';
$_['entry_url_passthrough']         = 'Passage d\'URL';
$_['entry_strict']                  = 'Strict';
$_['entry_balanced']                = 'Équilibré';
$_['entry_custom']                  = 'Personnalisé';
$_['entry_gcm_profiles']            = 'Profils GCM';

// Help
$_['help_ad_storage']               = 'Contrôle si le stockage des données est autorisé à des fins publicitaires, telles que le suivi des clics sur les publicités ou des conversions.';
$_['help_ad_user_data']             = 'Détermine si les données des utilisateurs interagissant avec les publicités sont stockées, améliorant ainsi les capacités de ciblage des publicités.';
$_['help_ad_personalization']       = 'Permet de personnaliser les publicités en fonction des données utilisateur, fournissant des publicités plus pertinentes pour les utilisateurs.';
$_['help_analytics_storage']        = 'Active le stockage des données utilisées à des fins d\'analyse, permettant de suivre la performance du site et le comportement des utilisateurs.';
$_['help_functionality_storage']    = 'Permet le stockage des données nécessaires au bon fonctionnement du site, comme les préférences utilisateur ou les fonctionnalités qui améliorent l\'expérience utilisateur.';
$_['help_personalization_storage']  = 'Contrôle le stockage des données permettant de personnaliser l\'expérience utilisateur, comme les contenus recommandés ou les paramètres.';
$_['help_security_storage']         = 'Assure le stockage des données liées à la sécurité, telles que la prévention des fraudes et le contrôle d\'accès sécurisé.';
$_['help_wait_for_update']          = 'Définit le délai (en millisecondes) à attendre avant de mettre à jour le statut de consentement, garantissant que tous les paramètres sont appliqués.';
$_['help_ads_data_redaction']       = 'Rédige les données utilisateur liées aux publicités, garantissant la confidentialité en masquant certaines informations identifiables.';
$_['help_url_passthrough']          = 'Permet au URL de passer à travers les vérifications de consentement, utile pour suivre des chemins d\'utilisateurs spécifiques sans stocker de données personnelles.';
$_['help_gcm_status']               = 'Active le Mode de Consentement Google, permettant à votre site d\'ajuster le comportement des balises Google en fonction des paramètres de consentement de l\'utilisateur. Ce mode offre un suivi respectueux de la vie privée, permettant à la fois les analyses et les publicités de fonctionner conformément aux préférences de consentement.';
$_['help_gtm_id_locate']            = 'Pour trouver votre identifiant Measurement ID pour votre <a href="https://tagmanager.google.com" target="_blank" rel="external noopener noreferrer">compte Google Tag Manager</a>, recherchez l\'ID en haut du tableau de bord de l\'espace de travail — il commence par "GTM-" suivi d\'une série unique de lettres et de chiffres, comme "GTM-XXXXXXXX". <a href="https://support.google.com/analytics/answer/12270356?hl=fr" target="_blank" rel="external noopener noreferrer">Instructions détaillées ici</a>.';

// Error
$_['error_permission']              = 'Avertissement : Vous n\'avez pas la permission de modifier les paramètres de Google Tag Manager !';
$_['error_gtm_id']                  = 'Le champ ID GTM est requis. Veuillez entrer votre identifiant de mesure.';
$_['error_gtm_id_invalid']          = 'Le format de l\'ID GTM est incorrect. Assurez-vous qu\'il suit le format GTM-XXXXXXXX.';
$_['error_wait_for_update']         = 'La valeur de Attendre la mise à jour doit être un nombre compris entre 0 et 10000 millisecondes.';
