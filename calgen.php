<?php
/**
* Plugin Name: CALCULATOR - FOREIGN VEHICLE REGISTRATION - GENERAL TEMPLATE - M1 (hu)
* Description: ONLINE CALCULATOR - FOREIGN CAR REGISTRATION - GENERAL TEMPLATE - TYPE: M1 - LANG: HU
* Version: 1.01
* Author: WEB1TEAM
*/

if ( ! defined( 'ABSPATH') ) exit;


class calcxregxm1xhuxeuxeux {

            private $lblxeuxeu = [];
            private $lblxdvxeuxeu = [];
            private $lblsxdvxdsplxeuxeu = [];
            private $lblxnmxeuxeu = [];
            private $lblxidxeuxeu = [];
            private $lblxptnxeuxeu = [];
            private $lblxrrrxeuxeu = [];

	public function __construct() {

            add_shortcode('calcxregxm1xhuxeuxeux', [$this, 'render']);

  	}


	public function render() {

		ob_start();

			<form id="formxeuxeu">


				?>

            		<script>
			const lblxeuxeu = <?php echo wp_json_encode($this->lblxeuxeu); ?>;
			const lblxdvxeuxeu = <?php echo wp_json_encode($this->lblxdvxeuxeu); ?>;
			const lblsxdvxdsplxeuxeu = <?php echo wp_json_encode($this->lblsxdvxdsplxeuxeu); ?>;
			const lblxnmxeuxeu = <?php echo wp_json_encode($this->lblxnmxeuxeu); ?>;
			const lblxidxeuxeu = <?php echo wp_json_encode($this->lblxidxeuxeu); ?>;
			const lblxptnxeuxeu = <?php echo wp_json_encode($this->lblxptnxeuxeu); ?>;
			const lblxrrrxeuxeu = <?php echo wp_json_encode($this->lblxrrrxeuxeu); ?>;

			</script>

            			<?php

		return ob_get_clean();



    				}

    new calcxregxm1xhuxeuxeux();

