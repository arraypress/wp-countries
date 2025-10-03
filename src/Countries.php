<?php
/**
 * WordPress Countries Library
 *
 * A simple, lightweight library for country data and utilities in WordPress.
 *
 * @package     ArrayPress\WP\Countries
 * @copyright   Copyright (c) 2025, ArrayPress Limited
 * @license     GPL2+
 * @version     1.0.0
 * @author      David Sherlock
 */

namespace ArrayPress\Countries;

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Countries class
 *
 * Provides static methods for working with country data including
 * ISO 3166-1 alpha-2 country codes and names.
 *
 * @since 1.0.0
 */
class Countries {

	/**
	 * Get all countries
	 *
	 * @param bool $translate Whether to return translated names
	 *
	 * @return array Array of country code => country name pairs
	 * @since 1.0.0
	 */
	public static function all( bool $translate = true ): array {
		$countries = [
			'AF' => __( 'Afghanistan', 'arraypress' ),
			'AX' => __( 'Åland Islands', 'arraypress' ),
			'AL' => __( 'Albania', 'arraypress' ),
			'DZ' => __( 'Algeria', 'arraypress' ),
			'AS' => __( 'American Samoa', 'arraypress' ),
			'AD' => __( 'Andorra', 'arraypress' ),
			'AO' => __( 'Angola', 'arraypress' ),
			'AI' => __( 'Anguilla', 'arraypress' ),
			'AQ' => __( 'Antarctica', 'arraypress' ),
			'AG' => __( 'Antigua and Barbuda', 'arraypress' ),
			'AR' => __( 'Argentina', 'arraypress' ),
			'AM' => __( 'Armenia', 'arraypress' ),
			'AW' => __( 'Aruba', 'arraypress' ),
			'AU' => __( 'Australia', 'arraypress' ),
			'AT' => __( 'Austria', 'arraypress' ),
			'AZ' => __( 'Azerbaijan', 'arraypress' ),
			'BS' => __( 'Bahamas', 'arraypress' ),
			'BH' => __( 'Bahrain', 'arraypress' ),
			'BD' => __( 'Bangladesh', 'arraypress' ),
			'BB' => __( 'Barbados', 'arraypress' ),
			'BY' => __( 'Belarus', 'arraypress' ),
			'BE' => __( 'Belgium', 'arraypress' ),
			'PW' => __( 'Belau', 'arraypress' ),
			'BZ' => __( 'Belize', 'arraypress' ),
			'BJ' => __( 'Benin', 'arraypress' ),
			'BM' => __( 'Bermuda', 'arraypress' ),
			'BT' => __( 'Bhutan', 'arraypress' ),
			'BO' => __( 'Bolivia', 'arraypress' ),
			'BQ' => __( 'Bonaire, Saint Eustatius and Saba', 'arraypress' ),
			'BA' => __( 'Bosnia and Herzegovina', 'arraypress' ),
			'BW' => __( 'Botswana', 'arraypress' ),
			'BV' => __( 'Bouvet Island', 'arraypress' ),
			'BR' => __( 'Brazil', 'arraypress' ),
			'IO' => __( 'British Indian Ocean Territory', 'arraypress' ),
			'BN' => __( 'Brunei', 'arraypress' ),
			'BG' => __( 'Bulgaria', 'arraypress' ),
			'BF' => __( 'Burkina Faso', 'arraypress' ),
			'BI' => __( 'Burundi', 'arraypress' ),
			'KH' => __( 'Cambodia', 'arraypress' ),
			'CM' => __( 'Cameroon', 'arraypress' ),
			'CA' => __( 'Canada', 'arraypress' ),
			'CV' => __( 'Cape Verde', 'arraypress' ),
			'KY' => __( 'Cayman Islands', 'arraypress' ),
			'CF' => __( 'Central African Republic', 'arraypress' ),
			'TD' => __( 'Chad', 'arraypress' ),
			'CL' => __( 'Chile', 'arraypress' ),
			'CN' => __( 'China', 'arraypress' ),
			'CX' => __( 'Christmas Island', 'arraypress' ),
			'CC' => __( 'Cocos (Keeling) Islands', 'arraypress' ),
			'CO' => __( 'Colombia', 'arraypress' ),
			'KM' => __( 'Comoros', 'arraypress' ),
			'CG' => __( 'Congo (Brazzaville)', 'arraypress' ),
			'CD' => __( 'Congo (Kinshasa)', 'arraypress' ),
			'CK' => __( 'Cook Islands', 'arraypress' ),
			'CR' => __( 'Costa Rica', 'arraypress' ),
			'HR' => __( 'Croatia', 'arraypress' ),
			'CU' => __( 'Cuba', 'arraypress' ),
			'CW' => __( 'Cura&ccedil;ao', 'arraypress' ),
			'CY' => __( 'Cyprus', 'arraypress' ),
			'CZ' => __( 'Czech Republic', 'arraypress' ),
			'DK' => __( 'Denmark', 'arraypress' ),
			'DJ' => __( 'Djibouti', 'arraypress' ),
			'DM' => __( 'Dominica', 'arraypress' ),
			'DO' => __( 'Dominican Republic', 'arraypress' ),
			'EC' => __( 'Ecuador', 'arraypress' ),
			'EG' => __( 'Egypt', 'arraypress' ),
			'SV' => __( 'El Salvador', 'arraypress' ),
			'GQ' => __( 'Equatorial Guinea', 'arraypress' ),
			'ER' => __( 'Eritrea', 'arraypress' ),
			'EE' => __( 'Estonia', 'arraypress' ),
			'ET' => __( 'Ethiopia', 'arraypress' ),
			'FK' => __( 'Falkland Islands', 'arraypress' ),
			'FO' => __( 'Faroe Islands', 'arraypress' ),
			'FJ' => __( 'Fiji', 'arraypress' ),
			'FI' => __( 'Finland', 'arraypress' ),
			'FR' => __( 'France', 'arraypress' ),
			'GF' => __( 'French Guiana', 'arraypress' ),
			'PF' => __( 'French Polynesia', 'arraypress' ),
			'TF' => __( 'French Southern Territories', 'arraypress' ),
			'GA' => __( 'Gabon', 'arraypress' ),
			'GM' => __( 'Gambia', 'arraypress' ),
			'GE' => __( 'Georgia', 'arraypress' ),
			'DE' => __( 'Germany', 'arraypress' ),
			'GH' => __( 'Ghana', 'arraypress' ),
			'GI' => __( 'Gibraltar', 'arraypress' ),
			'GR' => __( 'Greece', 'arraypress' ),
			'GL' => __( 'Greenland', 'arraypress' ),
			'GD' => __( 'Grenada', 'arraypress' ),
			'GP' => __( 'Guadeloupe', 'arraypress' ),
			'GU' => __( 'Guam', 'arraypress' ),
			'GT' => __( 'Guatemala', 'arraypress' ),
			'GG' => __( 'Guernsey', 'arraypress' ),
			'GN' => __( 'Guinea', 'arraypress' ),
			'GW' => __( 'Guinea-Bissau', 'arraypress' ),
			'GY' => __( 'Guyana', 'arraypress' ),
			'HT' => __( 'Haiti', 'arraypress' ),
			'HM' => __( 'Heard Island and McDonald Islands', 'arraypress' ),
			'HN' => __( 'Honduras', 'arraypress' ),
			'HK' => __( 'Hong Kong', 'arraypress' ),
			'HU' => __( 'Hungary', 'arraypress' ),
			'IS' => __( 'Iceland', 'arraypress' ),
			'IN' => __( 'India', 'arraypress' ),
			'ID' => __( 'Indonesia', 'arraypress' ),
			'IR' => __( 'Iran', 'arraypress' ),
			'IQ' => __( 'Iraq', 'arraypress' ),
			'IE' => __( 'Ireland', 'arraypress' ),
			'IM' => __( 'Isle of Man', 'arraypress' ),
			'IL' => __( 'Israel', 'arraypress' ),
			'IT' => __( 'Italy', 'arraypress' ),
			'CI' => __( 'Ivory Coast', 'arraypress' ),
			'JM' => __( 'Jamaica', 'arraypress' ),
			'JP' => __( 'Japan', 'arraypress' ),
			'JE' => __( 'Jersey', 'arraypress' ),
			'JO' => __( 'Jordan', 'arraypress' ),
			'KZ' => __( 'Kazakhstan', 'arraypress' ),
			'KE' => __( 'Kenya', 'arraypress' ),
			'KI' => __( 'Kiribati', 'arraypress' ),
			'KW' => __( 'Kuwait', 'arraypress' ),
			'KG' => __( 'Kyrgyzstan', 'arraypress' ),
			'LA' => __( 'Laos', 'arraypress' ),
			'LV' => __( 'Latvia', 'arraypress' ),
			'LB' => __( 'Lebanon', 'arraypress' ),
			'LS' => __( 'Lesotho', 'arraypress' ),
			'LR' => __( 'Liberia', 'arraypress' ),
			'LY' => __( 'Libya', 'arraypress' ),
			'LI' => __( 'Liechtenstein', 'arraypress' ),
			'LT' => __( 'Lithuania', 'arraypress' ),
			'LU' => __( 'Luxembourg', 'arraypress' ),
			'MO' => __( 'Macao', 'arraypress' ),
			'MK' => __( 'North Macedonia', 'arraypress' ),
			'MG' => __( 'Madagascar', 'arraypress' ),
			'MW' => __( 'Malawi', 'arraypress' ),
			'MY' => __( 'Malaysia', 'arraypress' ),
			'MV' => __( 'Maldives', 'arraypress' ),
			'ML' => __( 'Mali', 'arraypress' ),
			'MT' => __( 'Malta', 'arraypress' ),
			'MH' => __( 'Marshall Islands', 'arraypress' ),
			'MQ' => __( 'Martinique', 'arraypress' ),
			'MR' => __( 'Mauritania', 'arraypress' ),
			'MU' => __( 'Mauritius', 'arraypress' ),
			'YT' => __( 'Mayotte', 'arraypress' ),
			'MX' => __( 'Mexico', 'arraypress' ),
			'FM' => __( 'Micronesia', 'arraypress' ),
			'MD' => __( 'Moldova', 'arraypress' ),
			'MC' => __( 'Monaco', 'arraypress' ),
			'MN' => __( 'Mongolia', 'arraypress' ),
			'ME' => __( 'Montenegro', 'arraypress' ),
			'MS' => __( 'Montserrat', 'arraypress' ),
			'MA' => __( 'Morocco', 'arraypress' ),
			'MZ' => __( 'Mozambique', 'arraypress' ),
			'MM' => __( 'Myanmar', 'arraypress' ),
			'NA' => __( 'Namibia', 'arraypress' ),
			'NR' => __( 'Nauru', 'arraypress' ),
			'NP' => __( 'Nepal', 'arraypress' ),
			'NL' => __( 'Netherlands', 'arraypress' ),
			'NC' => __( 'New Caledonia', 'arraypress' ),
			'NZ' => __( 'New Zealand', 'arraypress' ),
			'NI' => __( 'Nicaragua', 'arraypress' ),
			'NE' => __( 'Niger', 'arraypress' ),
			'NG' => __( 'Nigeria', 'arraypress' ),
			'NU' => __( 'Niue', 'arraypress' ),
			'NF' => __( 'Norfolk Island', 'arraypress' ),
			'MP' => __( 'Northern Mariana Islands', 'arraypress' ),
			'KP' => __( 'North Korea', 'arraypress' ),
			'NO' => __( 'Norway', 'arraypress' ),
			'OM' => __( 'Oman', 'arraypress' ),
			'PK' => __( 'Pakistan', 'arraypress' ),
			'PS' => __( 'Palestinian Territory', 'arraypress' ),
			'PA' => __( 'Panama', 'arraypress' ),
			'PG' => __( 'Papua New Guinea', 'arraypress' ),
			'PY' => __( 'Paraguay', 'arraypress' ),
			'PE' => __( 'Peru', 'arraypress' ),
			'PH' => __( 'Philippines', 'arraypress' ),
			'PN' => __( 'Pitcairn', 'arraypress' ),
			'PL' => __( 'Poland', 'arraypress' ),
			'PT' => __( 'Portugal', 'arraypress' ),
			'PR' => __( 'Puerto Rico', 'arraypress' ),
			'QA' => __( 'Qatar', 'arraypress' ),
			'RE' => __( 'Reunion', 'arraypress' ),
			'RO' => __( 'Romania', 'arraypress' ),
			'RU' => __( 'Russia', 'arraypress' ),
			'RW' => __( 'Rwanda', 'arraypress' ),
			'BL' => __( 'Saint Barth&eacute;lemy', 'arraypress' ),
			'SH' => __( 'Saint Helena', 'arraypress' ),
			'KN' => __( 'Saint Kitts and Nevis', 'arraypress' ),
			'LC' => __( 'Saint Lucia', 'arraypress' ),
			'MF' => __( 'Saint Martin (French part)', 'arraypress' ),
			'SX' => __( 'Saint Martin (Dutch part)', 'arraypress' ),
			'PM' => __( 'Saint Pierre and Miquelon', 'arraypress' ),
			'VC' => __( 'Saint Vincent and the Grenadines', 'arraypress' ),
			'SM' => __( 'San Marino', 'arraypress' ),
			'ST' => __( 'S&atilde;o Tom&eacute; and Pr&iacute;ncipe', 'arraypress' ),
			'SA' => __( 'Saudi Arabia', 'arraypress' ),
			'SN' => __( 'Senegal', 'arraypress' ),
			'RS' => __( 'Serbia', 'arraypress' ),
			'SC' => __( 'Seychelles', 'arraypress' ),
			'SL' => __( 'Sierra Leone', 'arraypress' ),
			'SG' => __( 'Singapore', 'arraypress' ),
			'SK' => __( 'Slovakia', 'arraypress' ),
			'SI' => __( 'Slovenia', 'arraypress' ),
			'SB' => __( 'Solomon Islands', 'arraypress' ),
			'SO' => __( 'Somalia', 'arraypress' ),
			'ZA' => __( 'South Africa', 'arraypress' ),
			'GS' => __( 'South Georgia/Sandwich Islands', 'arraypress' ),
			'KR' => __( 'South Korea', 'arraypress' ),
			'SS' => __( 'South Sudan', 'arraypress' ),
			'ES' => __( 'Spain', 'arraypress' ),
			'LK' => __( 'Sri Lanka', 'arraypress' ),
			'SD' => __( 'Sudan', 'arraypress' ),
			'SR' => __( 'Suriname', 'arraypress' ),
			'SJ' => __( 'Svalbard and Jan Mayen', 'arraypress' ),
			'SZ' => __( 'Eswatini', 'arraypress' ),
			'SE' => __( 'Sweden', 'arraypress' ),
			'CH' => __( 'Switzerland', 'arraypress' ),
			'SY' => __( 'Syria', 'arraypress' ),
			'TW' => __( 'Taiwan', 'arraypress' ),
			'TJ' => __( 'Tajikistan', 'arraypress' ),
			'TZ' => __( 'Tanzania', 'arraypress' ),
			'TH' => __( 'Thailand', 'arraypress' ),
			'TL' => __( 'Timor-Leste', 'arraypress' ),
			'TG' => __( 'Togo', 'arraypress' ),
			'TK' => __( 'Tokelau', 'arraypress' ),
			'TO' => __( 'Tonga', 'arraypress' ),
			'TT' => __( 'Trinidad and Tobago', 'arraypress' ),
			'TN' => __( 'Tunisia', 'arraypress' ),
			'TR' => __( 'Turkey', 'arraypress' ),
			'TM' => __( 'Turkmenistan', 'arraypress' ),
			'TC' => __( 'Turks and Caicos Islands', 'arraypress' ),
			'TV' => __( 'Tuvalu', 'arraypress' ),
			'UG' => __( 'Uganda', 'arraypress' ),
			'UA' => __( 'Ukraine', 'arraypress' ),
			'AE' => __( 'United Arab Emirates', 'arraypress' ),
			'GB' => __( 'United Kingdom (UK)', 'arraypress' ),
			'US' => __( 'United States (US)', 'arraypress' ),
			'UM' => __( 'United States (US) Minor Outlying Islands', 'arraypress' ),
			'UY' => __( 'Uruguay', 'arraypress' ),
			'UZ' => __( 'Uzbekistan', 'arraypress' ),
			'VU' => __( 'Vanuatu', 'arraypress' ),
			'VA' => __( 'Vatican', 'arraypress' ),
			'VE' => __( 'Venezuela', 'arraypress' ),
			'VN' => __( 'Vietnam', 'arraypress' ),
			'VG' => __( 'Virgin Islands (British)', 'arraypress' ),
			'VI' => __( 'Virgin Islands (US)', 'arraypress' ),
			'WF' => __( 'Wallis and Futuna', 'arraypress' ),
			'EH' => __( 'Western Sahara', 'arraypress' ),
			'WS' => __( 'Samoa', 'arraypress' ),
			'YE' => __( 'Yemen', 'arraypress' ),
			'ZM' => __( 'Zambia', 'arraypress' ),
			'ZW' => __( 'Zimbabwe', 'arraypress' )
		];

		if ( $translate ) {
			foreach ( $countries as $code => $name ) {
				$countries[ $code ] = __( $name, 'arraypress' );
			}
		}

		/**
		 * Filter the countries list
		 *
		 * @param array $countries Array of country code => name pairs
		 * @param bool  $translate Whether names are translated
		 *
		 * @since 1.0.0
		 */
		return apply_filters( 'arraypress_countries_list', $countries, $translate );
	}

	/**
	 * Get raw untranslated country names
	 *
	 * @return array Array of country code => country name pairs
	 * @since 1.0.0
	 */
	public static function raw(): array {
		return self::all( false );
	}

	/**
	 * Get countries formatted for select/dropdown options
	 *
	 * @param string $format        Format type: 'value_label' or 'key_value'
	 * @param bool   $include_empty Whether to include empty option
	 * @param string $empty_label   Label for empty option
	 * @param bool   $translate     Whether to translate names
	 *
	 * @return array Array of options
	 * @since 1.0.0
	 */
	public static function get_options( string $format = 'value_label', bool $include_empty = false, string $empty_label = '— Select —', bool $translate = true ): array {
		$options = [];

		if ( $include_empty ) {
			if ( $format === 'key_value' ) {
				$options[''] = $translate ? __( $empty_label, 'arraypress' ) : $empty_label;
			} else {
				$options[] = [
					'value' => '',
					'label' => $translate ? __( $empty_label, 'arraypress' ) : $empty_label
				];
			}
		}

		foreach ( self::all( $translate ) as $code => $name ) {
			if ( $format === 'key_value' ) {
				$options[ $code ] = $name;
			} else {
				$options[] = [
					'value' => $code,
					'label' => $name
				];
			}
		}

		return $options;
	}

	/**
	 * Get countries in key/value format
	 *
	 * @param bool   $include_empty Whether to include empty option
	 * @param string $empty_label   Label for empty option
	 * @param bool   $translate     Whether to translate names
	 *
	 * @return array Array of country code => name pairs
	 * @since 1.0.0
	 */
	public static function get_key_value_options( bool $include_empty = false, string $empty_label = '— Select —', bool $translate = true ): array {
		return self::get_options( 'key_value', $include_empty, $empty_label, $translate );
	}

	/**
	 * Get countries in value/label format (Gutenberg/React compatible)
	 *
	 * @param bool   $include_empty Whether to include empty option
	 * @param string $empty_label   Label for empty option
	 * @param bool   $translate     Whether to translate names
	 *
	 * @return array Array of options with value/label keys
	 * @since 1.0.0
	 */
	public static function get_value_label_options( bool $include_empty = false, string $empty_label = '— Select —', bool $translate = true ): array {
		return self::get_options( 'value_label', $include_empty, $empty_label, $translate );
	}

	/**
	 * Get country name by code
	 *
	 * @param string $code      Country code (case-insensitive)
	 * @param bool   $translate Whether to return translated name
	 *
	 * @return string Country name or original code if not found
	 * @since 1.0.0
	 */
	public static function get_name( string $code, bool $translate = true ): string {
		$code      = strtoupper( $code );
		$countries = self::all( $translate );

		return $countries[ $code ] ?? $code;
	}

	/**
	 * Check if country code exists
	 *
	 * @param string $code Country code to check
	 *
	 * @return bool True if valid country code
	 * @since 1.0.0
	 */
	public static function exists( string $code ): bool {
		$code      = strtoupper( $code );
		$countries = self::raw();

		return isset( $countries[ $code ] );
	}

	/**
	 * Get country code by name (case-insensitive search)
	 *
	 * @param string $name      Country name to search for
	 * @param bool   $translate Whether to search translated names
	 *
	 * @return string|null Country code or null if not found
	 * @since 1.0.0
	 */
	public static function get_code( string $name, bool $translate = true ): ?string {
		$name = strtolower( trim( $name ) );

		foreach ( self::all( $translate ) as $code => $country_name ) {
			if ( strtolower( $country_name ) === $name ) {
				return $code;
			}
		}

		return null;
	}

	/**
	 * Search countries by partial name match
	 *
	 * @param string $search    Search term
	 * @param int    $limit     Maximum results to return (0 = unlimited)
	 * @param bool   $translate Whether to search translated names
	 *
	 * @return array Array of matching country code => name pairs
	 * @since 1.0.0
	 */
	public static function search( string $search, int $limit = 0, bool $translate = true ): array {
		$search = strtolower( trim( $search ) );
		if ( empty( $search ) ) {
			return [];
		}

		$matches = [];

		foreach ( self::all( $translate ) as $code => $name ) {
			if ( stripos( $name, $search ) !== false || stripos( $code, $search ) !== false ) {
				$matches[ $code ] = $name;

				if ( $limit > 0 && count( $matches ) >= $limit ) {
					break;
				}
			}
		}

		return $matches;
	}

	/**
	 * Get countries grouped by first letter
	 *
	 * Useful for alphabetical navigation/display
	 *
	 * @param bool $translate Whether to use translated names
	 *
	 * @return array Array with letters as keys and countries as values
	 * @since 1.0.0
	 */
	public static function get_grouped( bool $translate = true ): array {
		$grouped = [];

		foreach ( self::all( $translate ) as $code => $name ) {
			$first_letter                      = strtoupper( substr( $name, 0, 1 ) );
			$grouped[ $first_letter ][ $code ] = $name;
		}

		ksort( $grouped );

		return $grouped;
	}

	/**
	 * Get popular/common countries
	 *
	 * Returns a subset of commonly selected countries for quick access
	 *
	 * @param array $codes     Optional custom list of country codes
	 * @param bool  $translate Whether to translate names
	 *
	 * @return array Array of country code => name pairs
	 * @since 1.0.0
	 */
	public static function get_popular( array $codes = [], bool $translate = true ): array {
		$default_popular = [ 'US', 'GB', 'CA', 'AU', 'DE', 'FR', 'ES', 'IT', 'NL', 'JP' ];

		/**
		 * Filter the default popular countries
		 *
		 * @param array $default_popular Default popular country codes
		 *
		 * @since 1.0.0
		 */
		$default_popular = apply_filters( 'arraypress_countries_popular', $default_popular );

		$codes = ! empty( $codes ) ? $codes : $default_popular;

		$countries = self::all( $translate );
		$popular   = [];

		foreach ( $codes as $code ) {
			$code = strtoupper( $code );
			if ( isset( $countries[ $code ] ) ) {
				$popular[ $code ] = $countries[ $code ];
			}
		}

		return $popular;
	}

	/**
	 * Format country for display with optional flag
	 *
	 * @param string $code         Country code
	 * @param bool   $include_flag Include emoji flag
	 * @param bool   $include_code Include code in parentheses
	 * @param bool   $translate    Whether to translate name
	 *
	 * @return string Formatted country string
	 * @since 1.0.0
	 */
	public static function format( string $code, bool $include_flag = false, bool $include_code = false, bool $translate = true ): string {
		$code = strtoupper( $code );
		$name = self::get_name( $code, $translate );

		if ( $name === $code ) {
			return $code; // Country not found
		}

		$formatted = '';

		if ( $include_flag ) {
			$flag = self::get_flag( $code );
			if ( $flag ) {
				$formatted .= $flag . ' ';
			}
		}

		$formatted .= $name;

		if ( $include_code ) {
			$formatted .= ' (' . $code . ')';
		}

		return $formatted;
	}

	/**
	 * Get emoji flag for country
	 *
	 * @param string $code Country code
	 *
	 * @return string Emoji flag or empty string
	 * @since 1.0.0
	 */
	public static function get_flag( string $code ): string {
		$code = strtoupper( $code );

		if ( strlen( $code ) !== 2 ) {
			return '';
		}

		// Convert country code to emoji flag
		$flag        = '';
		$code_points = [];

		for ( $i = 0; $i < 2; $i ++ ) {
			$code_points[] = 127397 + ord( $code[ $i ] );
		}

		foreach ( $code_points as $code_point ) {
			$flag .= mb_convert_encoding( '&#' . $code_point . ';', 'UTF-8', 'HTML-ENTITIES' );
		}

		return $flag;
	}

	/**
	 * Get countries for use in HTML select element
	 *
	 * @param string $selected      Selected country code
	 * @param bool   $include_empty Include empty option
	 * @param bool   $translate     Whether to translate names
	 *
	 * @return string HTML option elements
	 * @since 1.0.0
	 */
	public static function get_select_options( string $selected = '', bool $include_empty = true, bool $translate = true ): string {
		$html = '';

		if ( $include_empty ) {
			$label = $translate ? __( '— Select Country —', 'arraypress' ) : '— Select Country —';
			$html  .= '<option value="">' . esc_html( $label ) . '</option>';
		}

		foreach ( self::all( $translate ) as $code => $name ) {
			$html .= sprintf(
				'<option value="%s"%s>%s</option>',
				esc_attr( $code ),
				selected( $selected, $code, false ),
				esc_html( $name )
			);
		}

		return $html;
	}

	/**
	 * Validate and sanitize country code
	 *
	 * @param string $code Country code to validate
	 *
	 * @return string|null Sanitized country code or null if invalid
	 * @since 1.0.0
	 */
	public static function sanitize( string $code ): ?string {
		$code = strtoupper( trim( $code ) );

		if ( self::exists( $code ) ) {
			return $code;
		}

		return null;
	}

	/**
	 * Check if country is in European Union
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if country is in EU
	 * @since 1.0.0
	 */
	public static function is_eu( string $code ): bool {
		$eu_countries = [
			'AT',
			'BE',
			'BG',
			'HR',
			'CY',
			'CZ',
			'DK',
			'EE',
			'FI',
			'FR',
			'DE',
			'GR',
			'HU',
			'IE',
			'IT',
			'LV',
			'LT',
			'LU',
			'MT',
			'NL',
			'PL',
			'PT',
			'RO',
			'SK',
			'SI',
			'ES',
			'SE'
		];

		return in_array( strtoupper( $code ), $eu_countries, true );
	}

	/**
	 * Check if country is in North America
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if country is in North America
	 * @since 1.0.0
	 */
	public static function is_north_america( string $code ): bool {
		$countries = [ 'US', 'CA', 'MX' ];

		return in_array( strtoupper( $code ), $countries, true );
	}

	/**
	 * Check if country is in Asia
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if country is in Asia
	 * @since 1.0.0
	 */
	public static function is_asia( string $code ): bool {
		$countries = [
			'CN',
			'IN',
			'ID',
			'PK',
			'BD',
			'JP',
			'PH',
			'VN',
			'TH',
			'MM',
			'KR',
			'AF',
			'SA',
			'UZ',
			'MY',
			'IQ',
			'NP',
			'KP',
			'LK',
			'AE',
			'TW',
			'SY',
			'KH',
			'JO',
			'AZ',
			'TJ',
			'IL',
			'HK',
			'LA',
			'LB',
			'SG',
			'PS',
			'OM',
			'KW',
			'GE',
			'MN',
			'AM',
			'QA',
			'BH',
			'TL',
			'CY',
			'BT',
			'MO',
			'BN',
			'MV'
		];

		return in_array( strtoupper( $code ), $countries, true );
	}

	/**
	 * Check if country is English-speaking (major)
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if major English-speaking country
	 * @since 1.0.0
	 */
	public static function is_english_speaking( string $code ): bool {
		$countries = [
			'US',
			'GB',
			'CA',
			'AU',
			'NZ',
			'IE',
			'ZA',
			'JM',
			'TT',
			'BB',
			'BS',
			'GY',
			'BZ',
			'AG',
			'DM',
			'GD',
			'KN',
			'LC',
			'VC'
		];

		return in_array( strtoupper( $code ), $countries, true );
	}

	/**
	 * Check if country is in Africa
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if country is in Africa
	 * @since 1.0.0
	 */
	public static function is_africa( string $code ): bool {
		$countries = [
			'NG',
			'ET',
			'EG',
			'CD',
			'ZA',
			'TZ',
			'KE',
			'UG',
			'DZ',
			'SD',
			'MA',
			'AO',
			'GH',
			'MZ',
			'MG',
			'CM',
			'CI',
			'NE',
			'BF',
			'ML',
			'MW',
			'ZM',
			'SN',
			'SO',
			'TD',
			'ZW',
			'GN',
			'RW',
			'BJ',
			'TN',
			'BI',
			'SS',
			'LY',
			'SL',
			'TG',
			'ER',
			'CF',
			'LR',
			'MR',
			'NA',
			'BW',
			'GM',
			'GA',
			'LS',
			'GW',
			'GQ',
			'MU',
			'SZ',
			'DJ',
			'RE',
			'KM',
			'CV',
			'YT',
			'ST',
			'SC'
		];

		return in_array( strtoupper( $code ), $countries, true );
	}

	/**
	 * Check if country is in South America
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if country is in South America
	 * @since 1.0.0
	 */
	public static function is_south_america( string $code ): bool {
		$countries = [
			'BR',
			'AR',
			'PE',
			'CO',
			'VE',
			'CL',
			'EC',
			'BO',
			'PY',
			'UY',
			'GY',
			'SR',
			'GF',
			'FK'
		];

		return in_array( strtoupper( $code ), $countries, true );
	}

	/**
	 * Check if country is in Oceania
	 *
	 * @param string $code Country code
	 *
	 * @return bool True if country is in Oceania
	 * @since 1.0.0
	 */
	public static function is_oceania( string $code ): bool {
		$countries = [
			'AU',
			'PG',
			'NZ',
			'FJ',
			'SB',
			'NC',
			'PF',
			'VU',
			'WS',
			'KI',
			'TO',
			'FM',
			'PW',
			'MH',
			'CK',
			'TV',
			'NR',
			'NU',
			'TK',
			'NF',
			'PN',
			'TL',
			'GU',
			'MP',
			'AS'
		];

		return in_array( strtoupper( $code ), $countries, true );
	}

	/**
	 * Get continent for country
	 *
	 * @param string $code Country code
	 *
	 * @return string|null Continent name or null if not found
	 * @since 1.0.0
	 */
	public static function get_continent( string $code ): ?string {
		$code = strtoupper( $code );

		if ( self::is_africa( $code ) ) {
			return 'Africa';
		} elseif ( self::is_asia( $code ) ) {
			return 'Asia';
		} elseif ( self::is_eu( $code ) || in_array( $code, [
				'NO',
				'CH',
				'IS',
				'GB',
				'AL',
				'ME',
				'MK',
				'RS',
				'BA',
				'UA',
				'BY',
				'RU',
				'MD'
			], true ) ) {
			return 'Europe';
		} elseif ( self::is_north_america( $code ) ) {
			return 'North America';
		} elseif ( self::is_south_america( $code ) ) {
			return 'South America';
		} elseif ( self::is_oceania( $code ) ) {
			return 'Oceania';
		}

		return null;
	}

}