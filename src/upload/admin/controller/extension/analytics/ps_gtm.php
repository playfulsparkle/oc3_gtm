<?php
class ControllerExtensionAnalyticsPsGtm extends Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://github.com/playfulsparkle/oc3_gtm.git';

    private $error = array();

    public function index()
    {
        $this->load->language('extension/analytics/ps_gtm');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->request->post['analytics_ps_gtm_gtm_id'] = strtoupper($this->request->post['analytics_ps_gtm_gtm_id']);

            $this->model_setting_setting->editSetting('analytics_ps_gtm', $this->request->post, $this->request->get['store_id']);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['gtm_id'])) {
            $data['error_gtm_id'] = $this->error['gtm_id'];
        } else {
            $data['error_gtm_id'] = '';
        }

        if (isset($this->error['wait_for_update'])) {
            $data['error_wait_for_update'] = $this->error['wait_for_update'];
        } else {
            $data['error_wait_for_update'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/analytics/ps_gtm', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true)
        );

        $data['action'] = $this->url->link('extension/analytics/ps_gtm', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $this->request->get['store_id'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=analytics', true);

        if (isset($this->request->post['analytics_ps_gtm_status'])) {
            $data['analytics_ps_gtm_status'] = (bool) $this->request->post['analytics_ps_gtm_status'];
        } else {
            $data['analytics_ps_gtm_status'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_status', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_gtm_id'])) {
            $data['analytics_ps_gtm_gtm_id'] = (string) $this->request->post['analytics_ps_gtm_gtm_id'];
        } else {
            $data['analytics_ps_gtm_gtm_id'] = (string) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_gtm_id', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_gcm_status'])) {
            $data['analytics_ps_gtm_gcm_status'] = (bool) $this->request->post['analytics_ps_gtm_gcm_status'];
        } else {
            $data['analytics_ps_gtm_gcm_status'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_gcm_status', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_ad_storage'])) {
            $data['analytics_ps_gtm_ad_storage'] = (bool) $this->request->post['analytics_ps_gtm_ad_storage'];
        } else {
            $data['analytics_ps_gtm_ad_storage'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_ad_storage', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_ad_user_data'])) {
            $data['analytics_ps_gtm_ad_user_data'] = (bool) $this->request->post['analytics_ps_gtm_ad_user_data'];
        } else {
            $data['analytics_ps_gtm_ad_user_data'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_ad_user_data', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_ad_personalization'])) {
            $data['analytics_ps_gtm_ad_personalization'] = (bool) $this->request->post['analytics_ps_gtm_ad_personalization'];
        } else {
            $data['analytics_ps_gtm_ad_personalization'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_ad_personalization', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_analytics_storage'])) {
            $data['analytics_ps_gtm_analytics_storage'] = (bool) $this->request->post['analytics_ps_gtm_analytics_storage'];
        } else {
            $data['analytics_ps_gtm_analytics_storage'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_analytics_storage', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_functionality_storage'])) {
            $data['analytics_ps_gtm_functionality_storage'] = (bool) $this->request->post['analytics_ps_gtm_functionality_storage'];
        } else {
            $data['analytics_ps_gtm_functionality_storage'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_functionality_storage', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_personalization_storage'])) {
            $data['analytics_ps_gtm_personalization_storage'] = (bool) $this->request->post['analytics_ps_gtm_personalization_storage'];
        } else {
            $data['analytics_ps_gtm_personalization_storage'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_personalization_storage', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_security_storage'])) {
            $data['analytics_ps_gtm_security_storage'] = (bool) $this->request->post['analytics_ps_gtm_security_storage'];
        } else {
            $data['analytics_ps_gtm_security_storage'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_security_storage', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_wait_for_update'])) {
            $data['analytics_ps_gtm_wait_for_update'] = (int) $this->request->post['analytics_ps_gtm_wait_for_update'];
        } else {
            $data['analytics_ps_gtm_wait_for_update'] = (int) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_wait_for_update', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_ads_data_redaction'])) {
            $data['analytics_ps_gtm_ads_data_redaction'] = (bool) $this->request->post['analytics_ps_gtm_ads_data_redaction'];
        } else {
            $data['analytics_ps_gtm_ads_data_redaction'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_ads_data_redaction', $this->request->get['store_id']);
        }

        if (isset($this->request->post['analytics_ps_gtm_url_passthrough'])) {
            $data['analytics_ps_gtm_url_passthrough'] = (bool) $this->request->post['analytics_ps_gtm_url_passthrough'];
        } else {
            $data['analytics_ps_gtm_url_passthrough'] = (bool) $this->model_setting_setting->getSettingValue('analytics_ps_gtm_url_passthrough', $this->request->get['store_id']);
        }

        $data['analytics_ps_gtm_gcm_profiles'] = 0;

        if (
            !$data['analytics_ps_gtm_ad_storage'] &&
            !$data['analytics_ps_gtm_ad_user_data'] &&
            !$data['analytics_ps_gtm_ad_personalization'] &&
            !$data['analytics_ps_gtm_analytics_storage'] &&
            $data['analytics_ps_gtm_functionality_storage'] &&
            $data['analytics_ps_gtm_personalization_storage'] &&
            $data['analytics_ps_gtm_security_storage']
        ) {
            $data['analytics_ps_gtm_gcm_profiles'] = 1;
        }

        if (
            $data['analytics_ps_gtm_ad_storage'] &&
            $data['analytics_ps_gtm_ad_user_data'] &&
            !$data['analytics_ps_gtm_ad_personalization'] &&
            $data['analytics_ps_gtm_analytics_storage'] &&
            $data['analytics_ps_gtm_functionality_storage'] &&
            $data['analytics_ps_gtm_personalization_storage'] &&
            $data['analytics_ps_gtm_security_storage']
        ) {
            $data['analytics_ps_gtm_gcm_profiles'] = 2;
        }

        $data['gcm_profiles'] = [
            $this->language->get('entry_custom'),
            $this->language->get('entry_strict'),
            $this->language->get('entry_balanced'),
        ];

        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/analytics/ps_gtm', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/analytics/ps_gtm')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->error) {
            if (empty($this->request->post['analytics_ps_gtm_gtm_id'])) {
                $this->error['gtm_id'] = $this->language->get('error_gtm_id');
            } elseif (preg_match('/^GTM-[A-Z0-9]{6,8}$/', strtoupper($this->request->post['analytics_ps_gtm_gtm_id'])) !== 1) {
                $this->error['gtm_id'] = $this->language->get('error_gtm_id_invalid');
            }

            if (
                $this->request->post['analytics_ps_gtm_wait_for_update'] < 0 ||
                $this->request->post['analytics_ps_gtm_wait_for_update'] > 10000
            ) {
                $this->error['wait_for_update'] = $this->language->get('error_wait_for_update');
            }
        }

        return !$this->error;
    }

    public function install()
    {
        $this->load->model('setting/setting');

        $data = array(
            'analytics_ps_gtm_ad_personalization' => 0,
            'analytics_ps_gtm_ad_storage' => 1,
            'analytics_ps_gtm_ad_user_data' => 1,
            'analytics_ps_gtm_ads_data_redaction' => 0,
            'analytics_ps_gtm_analytics_storage' => 1,
            'analytics_ps_gtm_functionality_storage' => 1,
            'analytics_ps_gtm_gcm_status' => 0,
            'analytics_ps_gtm_gtm_id' => '',
            'analytics_ps_gtm_personalization_storage' => 1,
            'analytics_ps_gtm_security_storage' => 1,
            'analytics_ps_gtm_status' => 0,
            'analytics_ps_gtm_url_passthrough' => 0,
            'analytics_ps_gtm_wait_for_update' => 500,
        );

        $this->model_setting_setting->editSetting('analytics_ps_gtm', $data);
    }

    public function uninstall()
    {

    }
}
