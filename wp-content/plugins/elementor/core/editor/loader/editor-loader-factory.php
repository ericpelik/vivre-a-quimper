<?php
namespace Elementor\Core\Editor\Loader;

use Elementor\Core\Editor\Editor;
use Elementor\Core\Editor\Loader\V1\Editor_V1_Loader;
use Elementor\Core\Editor\Loader\V2\Editor_V2_Loader;
use Elementor\Core\Utils\Assets_Config_Provider;
use Elementor\Core\Utils\Collection;
use Elementor\Plugin;
use Elementor\Utils;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Editor_Loader_Factory {
	/**
	 * @return Editor_Loader_Interface
	 */
	public static function create() {
		$is_editor_v2_active = Plugin::$instance->experiments->is_feature_active( Editor::EDITOR_V2_EXPERIMENT_NAME );

		// Nonce verification is not required, using param for routing purposes.
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$editor_version = Utils::get_super_global_value( $_GET, 'v' ) ?? ( $is_editor_v2_active ? '2' : '1' );

		$config = new Collection( [
			'assets_url' => ELEMENTOR_ASSETS_URL,
			'min_suffix' => ( Utils::is_script_debug() || Utils::is_elementor_tests() ) ? '' : '.min',
			'direction_suffix' => is_rtl() ? '-rtl' : '',
		] );

		$assets_config_provider = ( new Assets_Config_Provider() )
			->set_path_resolver( function ( $name ) {
				return ELEMENTOR_ASSETS_PATH . "js/packages/{$name}/{$name}.asset.php";
			} );

		if ( '2' === $editor_version ) {
			return new Editor_V2_Loader( $config, $assets_config_provider );
		}

		return new Editor_V1_Loader( $config, $assets_config_provider );
	}
}
