# Playful Sparkle - Google Tag Manager for OpenCart 3

The **Playful Sparkle - Google Tag Manager** extension for OpenCart 3.x+ seamlessly integrates **Google Tag Manager (GTM)** into your OpenCart eCommerce store without requiring any coding knowledge. Simply enter your **GTM Measurement ID**, and the tracking code is automatically injected into your site. This enables precise tracking and data collection for services such as **Google Ads**, **Google Analytics**, and other marketing tools.

This extension fully supports **Google Consent Mode V2**, which enhances privacy compliance by allowing websites to adjust tracking behavior based on user consent. Unlike the previous version, which only handled basic ad and analytics storage permissions, Consent Mode V2 expands consent signals to include **ad user data** and **ad personalization preferences**.

To make use of these consent settings, you must install a separate [Cookie Consent Banner](https://www.opencart.com/index.php?route=marketplace/extension&filter_search=cookie%20consent%20banner) to collect user choices. The extension automatically configures GTM to respect these choices by dynamically setting consent states for **ad storage**, **analytics storage**, **security storage**, **functionality storage**, **personalization storage**, and **ads data redaction**.

Additionally, it supports **URL Passthrough** and allows setting a **wait_for_update** delay to defer tracking until consent is granted.

This ensures compliance with **GDPR**, **ePrivacy**, and other data regulations while maintaining effective analytics and ad tracking without slowing down your site.

This extension **does not** track **Enhanced eCommerce events** or **ad conversions** it only configures **default consent settings** for Google Tag Manager. If you require **Enhanced eCommerce event tracking** or **Google Ads conversion tracking**, you will need an additional extension such as [Google Analytics (GA4)/Ads Conversion Enhanced Measurement](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=46693) for OpenCart 4.x+.


## About Google Tag Manager

**Google Tag Manager (GTM)** is a free tool that helps you manage marketing tags (like analytics and tracking codes) on your website without needing to touch the code. It lets marketers and developers add, update, and manage tags in real-time, without the hassle of modifying the website code every time you want to update or add a tag.

With GTM, you can easily integrate services like **Google Ads**, **Google Analytics**, and other marketing tools. This extension simplifies the process by automatically setting up GTM on your OpenCart store, so it's ready to track key metrics with minimal effort.

---

## About Google Consent Mode V2

**Google Consent Mode V2** is a feature designed to help websites comply with privacy regulations like **GDPR** by adjusting tracking behavior based on user consent.

In **Consent Mode V1**, you could only manage basic tracking permissions, such as **ad storage** and **analytics storage**. However, **Consent Mode V2** extends these capabilities, allowing websites to also manage consent for **ad user data** and **ad personalization preferences**.

The main difference is that V2 offers more granular control over user consent. With **Consent Mode V2**, you can set consent preferences for multiple types of data (such as ad storage, analytics storage, and personalization storage) and configure more privacy-conscious features like **ads data redaction** and **URL passthrough**.

To use Consent Mode V2, you must install a separate **cookie consent banner** to collect user preferences. Once the user provides consent, the extension automatically applies the selected settings to Google Tag Manager, ensuring compliant tracking across your store.

---

## Features

- **No-code Integration:** Effortless setup—just insert your Google Tag Manager Measurement ID, and the tracking code is added automatically.
- **Google Consent Mode V2:** Supports Google Consent Mode V2, allowing you to manage user consent for data storage, ad personalization, and analytics tracking.
- **Consent Management Compatibility:** Requires a separate cookie consent banner to collect user choices and automatically applies consent preferences to GTM.
- **Ads Data Redaction:** Supports Ads Data Redaction to enhance privacy by limiting the transmission of identifiable ad data.
- **URL Passthrough:** Enables URL Passthrough to help preserve tracking information when users navigate across pages.
- **Multi-store Support:** Works seamlessly with OpenCart’s multi-store functionality, allowing easy integration across multiple stores.
- **Compatibility:** Fully compatible with OpenCart 3.x+.
- **Multilingual Support**: Ready for international use with languages including العربية (ar), Български (bg), 中文(简体) (zh-cn), 中文(繁體) (zh-tw), Čeština (cs-cz), English (UK) (en-gb), English (US) (en-us), Français (fr-fr), Deutsch (de-de), Ελληνικά (el-gr), Magyar (hu-hu), Italiano (it-it), 日本語 (ja), 한국어 (ko-kr), Polski (pl-pl), Português (Brasil) (pt-br), Русский (ru-ru), Slovenčina (sk-sk), Español (es-es), and Türkçe (tr-tr).

---

## Installation Instructions

1. Download the latest version from this repository.
2. Log in to your OpenCart admin panel.
3. Navigate to `Extensions > Installer`.
4. Click the `Upload` button and upload the `ps_gtm.ocmod.zip` file.
5. Navigate to `Extensions > Extensions` and select `Analytics` from the `Choose the extension type` dropdown list.
6. Locate the extension in the `Analytics` list and click the `Install` button.
7. Click the `Edit` button, configure the extension parameters, and click the `Save` button to save your settings.
8. Navigate to `Extensions > Modifications`, select all your modifications and click the `Refresh` button to update the modification cache and apply the changes.

---

## Support & Inquiries

For assistance or inquiries related to this extension, please open an issue on this repository or contact us via email at [support@playfulsparkle.com](mailto:support@playfulsparkle.com).

---

## License

This project is distributed under the GPL-3.0 license. Please refer to the [LICENSE](./LICENSE) file for further details.

---

## Contributing

We encourage contributions from the community. To contribute, please fork the repository and submit a pull request with your proposed changes.
