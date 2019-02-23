<?php

use Queulat\Metabox;
use Queulat\Forms\Node_Factory;
use Queulat\Forms\Element\Input;
use Queulat\Forms\Element\Repeater;
use Queulat\Forms\Element\Input_Url;
use Queulat\Forms\Element\Input_Text;
use Queulat\Forms\Element\WP_Gallery;

class Jetpack_Portfolio_Metabox extends Metabox {
	public function get_fields() : array {
		return [
			Node_Factory::make(
				Input_Text::class,
				[
					'name' => 'made_with',
					'label' => 'Hecho con',
					[
						'class' => 'regular-text'
					]
				]
			),
			Node_Factory::make(
				Input_Text::class,
				[
					'name' => 'client_name',
					'label' => 'Nombre del Cliente',
					'attributes' => [
						'class' => 'regular-text'
					]
				]
			),
			Node_Factory::make(
				Input_Url::class,
				[
					'name' => 'client_url',
					'label' => 'URL del cliente',
					'attributes' => [
						'class' => 'regular-text'
					]
				]
			),
			Node_Factory::make(
				Input::class,
				[
					'label' => 'Fecha del proyecto',
					'name' => 'project_date',
					'attributes' => [
						'type' => 'date'
					]
				]
			),
			Node_Factory::make(
				Repeater::class,
				[
					'label' => 'Equipo',
					'name'  => 'equipo',
					'children' => [
						Node_Factory::make(
							Input_Text::class,
							[
								'name' => 'team_member_name',
								'label' => 'Nombre'
							]
						),
						Node_Factory::make(
							Input_Url::class,
							[
								'name' => 'team_member_url',
								'label' => 'Sitio web'
							]
						)
					]
				]
			),
			Node_Factory::make(
				WP_Gallery::class,
				[
					'label' => 'Galería',
					'name' => 'project_gallery',
				]
			)
		];
	}
	public function sanitize_data( array $data ) : array {
		return queulat_sanitizer( $data, [
			'made_with'                 => [ 'sanitize_text_field' ],
			'client_name'               => [ 'sanitize_text_field' ],
			'client_url'                => [ 'esc_url_raw' ],
			'equipo.*.team_member_name' => [ 'sanitize_text_field' ],
			'equipo.*.team_member_url'  => [ 'esc_url_raw' ],
			'project_gallery.*'         => [ 'absint' ],
			'project_date'              => [ function( $item ){
				$date = DateTime::createFromFormat( 'Y-m-d', $item );
				if ( $date ) {
					return $date->format('Y-m-d');
				}
				return null;
			} ]
		] );
	}

}