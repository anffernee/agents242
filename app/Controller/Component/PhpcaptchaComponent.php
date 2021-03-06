<?php
class PhpcaptchaComponent extends Component {
	var $Controller = null;
	
	function startup(Controller $controller) {
		App::import('Vendor', 'phpcaptcha/securimage');
		$this->Controller = $controller;
	}
	
	function show() {
		$options = array(
			'text_color' => new Securimage_Color('#e80707'),
			'captcha_type' => 1,
			'noise_level' => 2
		);
		$phpcaptcha = new Securimage($options);
		
		$phpcaptcha->show();
		
		exit;
	}
	
	function play() {
		$phpcaptcha = new Securimage();
		$phpcaptcha->outputAudioFile();
		exit;
	}
}
?>
