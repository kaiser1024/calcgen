<?php
/**
* Plugin Name: CALCULATOR - FOREIGN VEHICLE REGISTRATION - GENERAL TEMPLATE - M1 (hu)
* Description: ONLINE CALCULATOR - FOREIGN CAR REGISTRATION - GENERAL TEMPLATE - TYPE: M1 - LANG: HU
* Version: 1.01
* Author: WEB1TEAM
*/

if ( ! defined( 'ABSPATH') ) exit;


class calcxregxm1xhuxeuxeux {

            private $intakexeuxeu = [];
            private $lblxeuxeu = [];
            private $lblxdependencexeuxeu = [];
            private $lblxancestorxeuxeu = [];
            private $lblxamcestorexistxeuxeu = [];
            private $lblxamcestorvaluexeuxeu = [];
            private $lblxdvxeuxeu = [];
            private $lblsxdvxdsplxeuxeu = [];
            private $lblxnmxeuxeu = [];
            private $lblxidxeuxeu = [];
            private $lblxptnxeuxeu = [];
            private $lblxrrrxeuxeu = [];

	public function __construct() {

		$intakexeuxeu = [

			'intake1xeuxeu' => [
				'wrapper1xdividxeuxeu' => 'divid',
				'wrapper1xdisplayxeueu' => 'block/none',
				'label1xlabelforxeuxeu' => 'labelfor',
				'label1xlabeltextxeuxeu' => 'Label Text',
				'label1xselectnamexeuxeu' => 'selectname',
				'label1xselectidxeuxeu' => 'selectid',
				'label1xoptionvaluesandnamesxeuxeu' => [
						'label1xoptionvalue1xeuxeu' => 'Option 1',
						'label1xoptionvalue2xeuxeu' => 'Option 2',
						'label1xoptionvalue3xeuxeu' => 'Option 3',
						],
				'intake1xancestorxeuxeu' => 'ancestorselectname/none',
				'intake1xreversorxeuxeu' => 'ancestoroptionvalue/blank',
				'label1xerroridxeuxeu' => 'errorid',
				'label1xerrortextxeuxeu' => 'Error Text',
				'intake1xoutputintrotextxeuxeu' => 'Output Intro Text'/ none,
				'intake1xoutputresulttextxeuxeu' => 'Output Result Text'/none',
				'intake1xoutputresultspanxeuxeu' => 'outputresultspan/none',
				'intake1xoutputnumericalxeuxeu' => 'yes/no',
				'intake1xoutputtexttonumericaltransformxeuxeu' => 'yes/no',
				'intake1xoutputnumericaltransfortablemxeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],
				'intake1xoutputintermediaryvalue1xeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],
				'intake1xoutputintermediaryvalue2xeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],

				'intake1xoutputmultiplier1xeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],
				'intake1xoutputmultiplier2xeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],
				'intake1xoutputdivider1xeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],

				'intake1xoutputdivider2xeuxeu' =>  [
						'select1' => '1',
						'select2' => '2',
						'select3' => '3',
						],
				'intake1xinheritedvalue1xeuxeu' =>  => 'const',
				'intake1xinheritedvalue2xeuxeu' =>  => 'const',
				'intake1xinheritedvalue3xeuxeu' =>  => 'const',
				'intake1xpassonvalue1xeuxeu' =>  => 'const',
				'intake1xpassonvalue2xeuxeu' =>  => 'const',
				'intake1xpassonvalue3xeuxeu' =>  => 'const',


				'intake1xoutputintrospanxeuxeu' => 'outputintrospan/none',

				],

		];


            add_shortcode('calcxregxm1xhuxeuxeux', [$this, 'render']);

  	}


        public function enqueue_scripts() {  }



	public function render() {

		ob_start();

			<form id="formxeuxeu">

			<div id="ntkxwrpprxeuxeu" display: block/none>
    				<label for="lblxeuxeu"><?php echo esc_html($this->labels['lblxeuxeu'])?></label>
				<select name="lblxnmxeuxeu" id="lblxidxeuxeu"><option value="">Válassz...</option>
        				<?php foreach ($this->lblxptnxeuxeu as $value => $label): ?>
						<option value="<?php echo esc_attr($value); ?>">
							<?php echo esc_html($label); ?>
						</option>
					<?php endforeach; ?>
				</select>


				?>

            		<script>

			const lblxeuxeu = <?php echo wp_json_encode($this->lblxeuxeu); ?>;
			const lblxdvxeuxeu = <?php echo wp_json_encode($this->lblxdvxeuxeu); ?>;
			const lblsxdvxdsplxeuxeu = <?php echo wp_json_encode($this->lblsxdvxdsplxeuxeu); ?>;
			const lblxnmxeuxeu = <?php echo wp_json_encode($this->lblxnmxeuxeu); ?>;
			const lblxidxeuxeu = <?php echo wp_json_encode($this->lblxidxeuxeu); ?>;
			const lblxptnxeuxeu = <?php echo wp_json_encode($this->lblxptnxeuxeu); ?>;
			const lblxrrrxeuxeu = <?php echo wp_json_encode($this->lblxrrrxeuxeu); ?>;

			document.addEventListener("DOMContentLoaded", () => {

    				const calcbuttonxeuxeu = document.getElementById("calcbuttonxeuxeu");
				const formxeuxeu = document.getElementById("formxeuxeu");



			</script>

            			<?php

		return ob_get_clean();



    				}

    new calcxregxm1xhuxeuxeux();

