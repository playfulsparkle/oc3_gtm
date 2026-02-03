<?php
class ControllerExtensionAnalyticsPsGtm extends Controller
{
    const GTM_GRANTED = 'granted';

    const GTM_DENIED = 'denied';

    /**
     * Render Google Tag Manager script with consent configuration
     *
     * @return string HTML script tag for GTM or empty string if disabled
     */
    public function index()
    {
        // Check if GTM integration is enabled
        if (!$this->config->get('analytics_ps_gtm_status')) {
            return '';
        }

        /**
         * Google Tag Manager container ID (e.g., 'GTM-XXXXXX')
         * This is the unique identifier for your GTM container
         */
        $gtm_id = $this->config->get('analytics_ps_gtm_gtm_id');

        /**
         * Enable Google Consent Mode integration
         * When enabled, consent preferences are sent to Google services
         */
        $gcm_status = (bool) $this->config->get('analytics_ps_gtm_gcm_status');

        /**
         * Consent for ad-related storage (cookies)
         * Controls storage (like cookies) for advertising purposes
         * 'granted' = allowed, 'denied' = blocked
         */
        $ad_storage = (bool) $this->config->get('analytics_ps_gtm_ad_storage');

        /**
         * Consent for sharing data with Google for advertising purposes
         * Controls whether user data can be sent to Google for advertising
         * 'granted' = allowed, 'denied' = blocked
         */
        $ad_user_data = (bool) $this->config->get('analytics_ps_gtm_ad_user_data');

        /**
         * Consent for ad personalization
         * Controls whether personalized advertising is allowed
         * 'granted' = allowed, 'denied' = blocked
         */
        $ad_personalization = (bool) $this->config->get('analytics_ps_gtm_ad_personalization');

        /**
         * Consent for analytics storage
         * Controls storage (like cookies) for analytics purposes
         * 'granted' = allowed, 'denied' = blocked
         */
        $analytics_storage = (bool) $this->config->get('analytics_ps_gtm_analytics_storage');

        /**
         * Consent for functionality storage
         * Controls storage that enables website functionality
         * 'granted' = allowed, 'denied' = blocked
         */
        $functionality_storage = (bool) $this->config->get('analytics_ps_gtm_functionality_storage');

        /**
         * Consent for personalization storage
         * Controls storage for personalization features
         * 'granted' = allowed, 'denied' = blocked
         */
        $personalization_storage = (bool) $this->config->get('analytics_ps_gtm_personalization_storage');

        /**
         * Consent for security storage
         * Controls storage for security purposes (fraud prevention, authentication)
         * 'granted' = allowed, 'denied' = blocked
         */
        $security_storage = (bool) $this->config->get('analytics_ps_gtm_security_storage');

        /**
         * Wait time (in milliseconds) before updating consent
         * Allows time for consent providers to update before tags fire
         */
        $wait_for_update = (int) $this->config->get('analytics_ps_gtm_wait_for_update');

        /**
         * Enable ads data redaction
         * When true, Google ads tags will redact ad click identifiers from URLs
         * Helps with user privacy by removing sensitive URL parameters
         */
        $ads_data_redaction = (bool) $this->config->get('analytics_ps_gtm_ads_data_redaction');

        /**
         * Enable URL passthrough
         * When true, retains original URL parameters for measurement purposes
         * Useful for tracking campaigns while maintaining user privacy
         */
        $url_passthrough = (bool) $this->config->get('analytics_ps_gtm_url_passthrough');

        $html = "<script>" . PHP_EOL;
        $html .= "window.dataLayer = window.dataLayer || [];" . PHP_EOL;
        $html .= "function gtag() { dataLayer.push(arguments); }" . PHP_EOL;

        if ($gcm_status) {
            $default_consent = array(
                'ad_storage' => $ad_storage ? self::GTM_GRANTED : self::GTM_DENIED,
                'ad_user_data' => $ad_user_data ? self::GTM_GRANTED : self::GTM_DENIED,
                'ad_personalization' => $ad_personalization ? self::GTM_GRANTED : self::GTM_DENIED,
                'analytics_storage' => $analytics_storage ? self::GTM_GRANTED : self::GTM_DENIED,
                'functionality_storage' => $functionality_storage ? self::GTM_GRANTED : self::GTM_DENIED,
                'personalization_storage' => $personalization_storage ? self::GTM_GRANTED : self::GTM_DENIED,
                'security_storage' => $security_storage ? self::GTM_GRANTED : self::GTM_DENIED,
            );

            if ($wait_for_update > 0) {
                $default_consent['wait_for_update'] = $wait_for_update;
            }

            $default_consent_json = json_encode($default_consent);

            $ads_data_redaction_str = $ads_data_redaction ? 'true' : 'false';
            $url_passthrough_str = $url_passthrough ? 'true' : 'false';

            $html .= PHP_EOL . "gtag('consent', 'default', " . $default_consent_json . ");" . PHP_EOL;
            $html .= "gtag('set', 'ads_data_redaction', " . $ads_data_redaction_str . ");" . PHP_EOL;
            $html .= "gtag('set', 'url_passthrough', " . $url_passthrough_str . ");" . PHP_EOL;
        }

        $html .= "</script>" . PHP_EOL;
        $html .= "<!-- Google Tag Manager -->" . PHP_EOL;
        $html .= "<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':" . PHP_EOL;
        $html .= "new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0]," . PHP_EOL;
        $html .= "j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=" . PHP_EOL;
        $html .= "'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);" . PHP_EOL;
        $html .= "})(window,document,'script','dataLayer','" . $gtm_id . "');</script>" . PHP_EOL;
        $html .= "<!-- End Google Tag Manager -->" . PHP_EOL;

        return $html;
    }
}
