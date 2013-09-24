<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data;// = array();
		var $default_template = 'templates/base';
		
		var $base_css = 'base';
		var $css_path = 'css/';
		var $js_path = 'lib/';

		var $pageUrl;
		var $CI;
		
		function Template() 
		{
			$this->CI =& get_instance();

			if ($_SERVER['SERVER_NAME'] == 'therapick.com') {
				$this->STATIC_ROOT = '/';	
			} 
			else {
				$this->STATIC_ROOT = '/Therapick_v2013/';
			}
			
		}

		function baseurl() {
			return $this->CI->config->config['base_url']; //BH 12/13/11 ssl_hook should set to https by now.
		}

		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
		
		function addHeaderScript($params, $reset = false)
		{
			if(! isset($this->template_data['header_scripts']) || $reset == true  )
				$this->template_data['header_scripts'] = null;
			
			if(is_array($params))
			{
				foreach($params as  $script)
				{
					$this->template_data['header_scripts'] .= "<script type=\"text/javascript\">\n\t" . $script . "\n</script>\n";
				}
			}
			
			else if(is_string($params))
			{
				$this->template_data['header_scripts'] .=  "<script type=\"text/javascript\">\n\t" . $params . "\n</script>\n";
			}
		}
		
		function addBottomScript($params, $reset = false)
		{
			
			if(! isset($this->template_data['bottom_scripts']) || $reset == true  )
				$this->template_data['bottom_scripts'] = null;
			
			if(is_array($params))
			{
				foreach($params as  $script)
				{
					$this->template_data['bottom_scripts'] .= "<script type=\"text/javascript\">\n\t" . $script . "\n</script>\n";
				}
			}
			else if(is_string($params))
			{
				$this->template_data['bottom_scripts'] .=  "<script type=\"text/javascript\">\n\t" . $params . "\n</script>\n";
			}
		}	
		
		function addCSS($params = array(), $reset=false)
		{
		/*
			pass a string with the filename (no extension), or pass an array 
		*/
			
			if( !isset($this->template_data['css_links']) || $reset == true  )
					$this->template_data['css_links'] = null;
				
			if(is_array($params)){
				/*
				params = array: css (filenames) , path, id, reset
				*/
				
				if( !isset($params["path"]) ) $params["path"] = $this->baseurl() . $this->css_path;
				if( !isset($params["id"]) ) $params["id"] = null;
				
				//set $reset = true to remove all previously added css links
				
				if(is_array($params["css"]))
				{
					foreach($params["css"] as  $filename)
					{
						$this->template_data['css_links'] .= 
							"<link id='". $params["id"] . "'rel='stylesheet' type='text/css' href=\"" . $params["path"] . $filename . ".css\" />\n";
					}
				}			
				
				else if(is_string($params["css"]))
				{
					$this->template_data['css_links'] .= 
						"<link id='". $params["id"] . "' rel='stylesheet' type='text/css' href=\"" . $params["path"] . $params["css"] . ".css\" />\n";
				}
			}
			
			if (is_string($params))
			{
				$this->template_data['css_links'] .= 
						"<link rel='stylesheet' type='text/css' href=\"" . $this->baseurl() . $this->css_path . $params . ".css\" />\n";
			}
		}
		
		function addJS($params, $path = null, $reset = false)
		{
			
			if(!isset($path)) $path = $this->baseurl() . $this->js_path;
			else $path = $this->baseurl() . $this->js_path . $path . "/" ;
			
			//set $reset = true to remove all previously added javascript links
			//accepts string of one filename, or array of one or more filenames:
			if(! isset($this->template_data['javascript_links']) || $reset == true  )
			$this->template_data['javascript_links'] = '';
			
			if(is_array($params))
			{
				foreach($params as  $filename)
				{
					$this->template_data['javascript_links'] .= 
						"<script type=\"text/javascript\" src=\"" . $path . $filename . ".js\"></script>\n";
				}
			}
			
			else if(is_string($params))
			{
				$this->template_data['javascript_links'] .= 
					"<script type=\"text/javascript\" src=\"" . $path . $params . ".js\"></script>\n";
			}
		}
		
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			//$this->set('systemVersionNumber', $this->CI->system_model->GetVersionNumber());

			$this->set('STATIC_ROOT', $this->STATIC_ROOT); // This sets for template files
			$view_data['STATIC_ROOT'] = $this->STATIC_ROOT; // This sets for view files
			
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
			
			//initialize defaults:
			$this->addCSS(array ("css"	=>	$this->base_css));
			if($template== 'default') $template = $this->default_template;
			
			//add default title, meta tags: 
			/*if (!isset($this->template_data['pageTitle']))
				$this->template_data['pageTitle'] = $this->seo->LoadTitle;
			*/
			return $this->CI->load->view($template, $this->template_data, $return);
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */