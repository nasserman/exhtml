<?php
class ControllerExtensionModuleEXHTML extends Controller {
	public function index($setting) {
		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['heading_title'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['html'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['description'], ENT_QUOTES, 'UTF-8');


			$matches = array();
			$t = preg_match_all('/\[(.*?)\\]/s', $data['html'], $matches);
			for($i = 0 ; $i < count($matches[0]) ; $i++){
				$this->_load_module($matches[0][$i] , $matches[1][$i] , $data['html']);
			}

			return $this->load->view('extension/module/exhtml', $data);
		}
	}

	protected function _load_module($_a , $_b , &$html) {
		$module = json_decode($_b);
		$setting_info = $this->model_extension_module->getModule($module->module_id);
		try {
			$output = $this->load->controller("extension/module/" . $module->module_type , $setting_info);
			$html = str_replace($_a, $output , $html);
		} catch (Exception $e) {
			echo $e->message;
		}
	}

}
