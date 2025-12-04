<?php
/**
 * WordPress Countries Library
 *
 * A simple, lightweight library for country data and utilities in WordPress.
 *
 * @package     ArrayPress\Countries
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
	 * ISO 3166-1 alpha-2 country codes and names.
	 */
	private const COUNTRIES = [
		'AF' => 'Afghanistan',
		'AX' => 'Åland Islands',
		'AL' => 'Albania',
		'DZ' => 'Algeria',
		'AS' => 'American Samoa',
		'AD' => 'Andorra',
		'AO' => 'Angola',
		'AI' => 'Anguilla',
		'AQ' => 'Antarctica',
		'AG' => 'Antigua and Barbuda',
		'AR' => 'Argentina',
		'AM' => 'Armenia',
		'AW' => 'Aruba',
		'AU' => 'Australia',
		'AT' => 'Austria',
		'AZ' => 'Azerbaijan',
		'BS' => 'Bahamas',
		'BH' => 'Bahrain',
		'BD' => 'Bangladesh',
		'BB' => 'Barbados',
		'BY' => 'Belarus',
		'BE' => 'Belgium',
		'PW' => 'Belau',
		'BZ' => 'Belize',
		'BJ' => 'Benin',
		'BM' => 'Bermuda',
		'BT' => 'Bhutan',
		'BO' => 'Bolivia',
		'BQ' => 'Bonaire, Saint Eustatius and Saba',
		'BA' => 'Bosnia and Herzegovina',
		'BW' => 'Botswana',
		'BV' => 'Bouvet Island',
		'BR' => 'Brazil',
		'IO' => 'British Indian Ocean Territory',
		'BN' => 'Brunei',
		'BG' => 'Bulgaria',
		'BF' => 'Burkina Faso',
		'BI' => 'Burundi',
		'KH' => 'Cambodia',
		'CM' => 'Cameroon',
		'CA' => 'Canada',
		'CV' => 'Cape Verde',
		'KY' => 'Cayman Islands',
		'CF' => 'Central African Republic',
		'TD' => 'Chad',
		'CL' => 'Chile',
		'CN' => 'China',
		'CX' => 'Christmas Island',
		'CC' => 'Cocos (Keeling) Islands',
		'CO' => 'Colombia',
		'KM' => 'Comoros',
		'CG' => 'Congo (Brazzaville)',
		'CD' => 'Congo (Kinshasa)',
		'CK' => 'Cook Islands',
		'CR' => 'Costa Rica',
		'HR' => 'Croatia',
		'CU' => 'Cuba',
		'CW' => 'Curaçao',
		'CY' => 'Cyprus',
		'CZ' => 'Czech Republic',
		'DK' => 'Denmark',
		'DJ' => 'Djibouti',
		'DM' => 'Dominica',
		'DO' => 'Dominican Republic',
		'EC' => 'Ecuador',
		'EG' => 'Egypt',
		'SV' => 'El Salvador',
		'GQ' => 'Equatorial Guinea',
		'ER' => 'Eritrea',
		'EE' => 'Estonia',
		'ET' => 'Ethiopia',
		'FK' => 'Falkland Islands',
		'FO' => 'Faroe Islands',
		'FJ' => 'Fiji',
		'FI' => 'Finland',
		'FR' => 'France',
		'GF' => 'French Guiana',
		'PF' => 'French Polynesia',
		'TF' => 'French Southern Territories',
		'GA' => 'Gabon',
		'GM' => 'Gambia',
		'GE' => 'Georgia',
		'DE' => 'Germany',
		'GH' => 'Ghana',
		'GI' => 'Gibraltar',
		'GR' => 'Greece',
		'GL' => 'Greenland',
		'GD' => 'Grenada',
		'GP' => 'Guadeloupe',
		'GU' => 'Guam',
		'GT' => 'Guatemala',
		'GG' => 'Guernsey',
		'GN' => 'Guinea',
		'GW' => 'Guinea-Bissau',
		'GY' => 'Guyana',
		'HT' => 'Haiti',
		'HM' => 'Heard Island and McDonald Islands',
		'HN' => 'Honduras',
		'HK' => 'Hong Kong',
		'HU' => 'Hungary',
		'IS' => 'Iceland',
		'IN' => 'India',
		'ID' => 'Indonesia',
		'IR' => 'Iran',
		'IQ' => 'Iraq',
		'IE' => 'Ireland',
		'IM' => 'Isle of Man',
		'IL' => 'Israel',
		'IT' => 'Italy',
		'CI' => 'Ivory Coast',
		'JM' => 'Jamaica',
		'JP' => 'Japan',
		'JE' => 'Jersey',
		'JO' => 'Jordan',
		'KZ' => 'Kazakhstan',
		'KE' => 'Kenya',
		'KI' => 'Kiribati',
		'KW' => 'Kuwait',
		'KG' => 'Kyrgyzstan',
		'LA' => 'Laos',
		'LV' => 'Latvia',
		'LB' => 'Lebanon',
		'LS' => 'Lesotho',
		'LR' => 'Liberia',
		'LY' => 'Libya',
		'LI' => 'Liechtenstein',
		'LT' => 'Lithuania',
		'LU' => 'Luxembourg',
		'MO' => 'Macao',
		'MK' => 'North Macedonia',
		'MG' => 'Madagascar',
		'MW' => 'Malawi',
		'MY' => 'Malaysia',
		'MV' => 'Maldives',
		'ML' => 'Mali',
		'MT' => 'Malta',
		'MH' => 'Marshall Islands',
		'MQ' => 'Martinique',
		'MR' => 'Mauritania',
		'MU' => 'Mauritius',
		'YT' => 'Mayotte',
		'MX' => 'Mexico',
		'FM' => 'Micronesia',
		'MD' => 'Moldova',
		'MC' => 'Monaco',
		'MN' => 'Mongolia',
		'ME' => 'Montenegro',
		'MS' => 'Montserrat',
		'MA' => 'Morocco',
		'MZ' => 'Mozambique',
		'MM' => 'Myanmar',
		'NA' => 'Namibia',
		'NR' => 'Nauru',
		'NP' => 'Nepal',
		'NL' => 'Netherlands',
		'NC' => 'New Caledonia',
		'NZ' => 'New Zealand',
		'NI' => 'Nicaragua',
		'NE' => 'Niger',
		'NG' => 'Nigeria',
		'NU' => 'Niue',
		'NF' => 'Norfolk Island',
		'MP' => 'Northern Mariana Islands',
		'KP' => 'North Korea',
		'NO' => 'Norway',
		'OM' => 'Oman',
		'PK' => 'Pakistan',
		'PS' => 'Palestinian Territory',
		'PA' => 'Panama',
		'PG' => 'Papua New Guinea',
		'PY' => 'Paraguay',
		'PE' => 'Peru',
		'PH' => 'Philippines',
		'PN' => 'Pitcairn',
		'PL' => 'Poland',
		'PT' => 'Portugal',
		'PR' => 'Puerto Rico',
		'QA' => 'Qatar',
		'RE' => 'Reunion',
		'RO' => 'Romania',
		'RU' => 'Russia',
		'RW' => 'Rwanda',
		'BL' => 'Saint Barthélemy',
		'SH' => 'Saint Helena',
		'KN' => 'Saint Kitts and Nevis',
		'LC' => 'Saint Lucia',
		'MF' => 'Saint Martin (French part)',
		'SX' => 'Saint Martin (Dutch part)',
		'PM' => 'Saint Pierre and Miquelon',
		'VC' => 'Saint Vincent and the Grenadines',
		'SM' => 'San Marino',
		'ST' => 'São Tomé and Príncipe',
		'SA' => 'Saudi Arabia',
		'SN' => 'Senegal',
		'RS' => 'Serbia',
		'SC' => 'Seychelles',
		'SL' => 'Sierra Leone',
		'SG' => 'Singapore',
		'SK' => 'Slovakia',
		'SI' => 'Slovenia',
		'SB' => 'Solomon Islands',
		'SO' => 'Somalia',
		'ZA' => 'South Africa',
		'GS' => 'South Georgia/Sandwich Islands',
		'KR' => 'South Korea',
		'SS' => 'South Sudan',
		'ES' => 'Spain',
		'LK' => 'Sri Lanka',
		'SD' => 'Sudan',
		'SR' => 'Suriname',
		'SJ' => 'Svalbard and Jan Mayen',
		'SZ' => 'Eswatini',
		'SE' => 'Sweden',
		'CH' => 'Switzerland',
		'SY' => 'Syria',
		'TW' => 'Taiwan',
		'TJ' => 'Tajikistan',
		'TZ' => 'Tanzania',
		'TH' => 'Thailand',
		'TL' => 'Timor-Leste',
		'TG' => 'Togo',
		'TK' => 'Tokelau',
		'TO' => 'Tonga',
		'TT' => 'Trinidad and Tobago',
		'TN' => 'Tunisia',
		'TR' => 'Turkey',
		'TM' => 'Turkmenistan',
		'TC' => 'Turks and Caicos Islands',
		'TV' => 'Tuvalu',
		'UG' => 'Uganda',
		'UA' => 'Ukraine',
		'AE' => 'United Arab Emirates',
		'GB' => 'United Kingdom',
		'US' => 'United States',
		'UM' => 'United States Minor Outlying Islands',
		'UY' => 'Uruguay',
		'UZ' => 'Uzbekistan',
		'VU' => 'Vanuatu',
		'VA' => 'Vatican',
		'VE' => 'Venezuela',
		'VN' => 'Vietnam',
		'VG' => 'Virgin Islands (British)',
		'VI' => 'Virgin Islands (US)',
		'WF' => 'Wallis and Futuna',
		'EH' => 'Western Sahara',
		'WS' => 'Samoa',
		'XK' => 'Kosovo',
		'YE' => 'Yemen',
		'ZM' => 'Zambia',
		'ZW' => 'Zimbabwe',
	];

	/**
	 * Country to continent mapping.
	 */
	private const CONTINENTS = [
		// Africa
		'DZ' => 'Africa',
		'AO' => 'Africa',
		'BJ' => 'Africa',
		'BW' => 'Africa',
		'BF' => 'Africa',
		'BI' => 'Africa',
		'CV' => 'Africa',
		'CM' => 'Africa',
		'CF' => 'Africa',
		'TD' => 'Africa',
		'KM' => 'Africa',
		'CG' => 'Africa',
		'CD' => 'Africa',
		'CI' => 'Africa',
		'DJ' => 'Africa',
		'EG' => 'Africa',
		'GQ' => 'Africa',
		'ER' => 'Africa',
		'SZ' => 'Africa',
		'ET' => 'Africa',
		'GA' => 'Africa',
		'GM' => 'Africa',
		'GH' => 'Africa',
		'GN' => 'Africa',
		'GW' => 'Africa',
		'KE' => 'Africa',
		'LS' => 'Africa',
		'LR' => 'Africa',
		'LY' => 'Africa',
		'MG' => 'Africa',
		'MW' => 'Africa',
		'ML' => 'Africa',
		'MR' => 'Africa',
		'MU' => 'Africa',
		'YT' => 'Africa',
		'MA' => 'Africa',
		'MZ' => 'Africa',
		'NA' => 'Africa',
		'NE' => 'Africa',
		'NG' => 'Africa',
		'RE' => 'Africa',
		'RW' => 'Africa',
		'SH' => 'Africa',
		'ST' => 'Africa',
		'SN' => 'Africa',
		'SC' => 'Africa',
		'SL' => 'Africa',
		'SO' => 'Africa',
		'ZA' => 'Africa',
		'SS' => 'Africa',
		'SD' => 'Africa',
		'TZ' => 'Africa',
		'TG' => 'Africa',
		'TN' => 'Africa',
		'UG' => 'Africa',
		'EH' => 'Africa',
		'ZM' => 'Africa',
		'ZW' => 'Africa',

		// Asia
		'AF' => 'Asia',
		'AM' => 'Asia',
		'AZ' => 'Asia',
		'BH' => 'Asia',
		'BD' => 'Asia',
		'BT' => 'Asia',
		'BN' => 'Asia',
		'KH' => 'Asia',
		'CN' => 'Asia',
		'CY' => 'Asia',
		'GE' => 'Asia',
		'HK' => 'Asia',
		'IN' => 'Asia',
		'ID' => 'Asia',
		'IR' => 'Asia',
		'IQ' => 'Asia',
		'IL' => 'Asia',
		'JP' => 'Asia',
		'JO' => 'Asia',
		'KZ' => 'Asia',
		'KW' => 'Asia',
		'KG' => 'Asia',
		'LA' => 'Asia',
		'LB' => 'Asia',
		'MO' => 'Asia',
		'MY' => 'Asia',
		'MV' => 'Asia',
		'MN' => 'Asia',
		'MM' => 'Asia',
		'NP' => 'Asia',
		'KP' => 'Asia',
		'OM' => 'Asia',
		'PK' => 'Asia',
		'PS' => 'Asia',
		'PH' => 'Asia',
		'QA' => 'Asia',
		'SA' => 'Asia',
		'SG' => 'Asia',
		'KR' => 'Asia',
		'LK' => 'Asia',
		'SY' => 'Asia',
		'TW' => 'Asia',
		'TJ' => 'Asia',
		'TH' => 'Asia',
		'TL' => 'Asia',
		'TR' => 'Asia',
		'TM' => 'Asia',
		'AE' => 'Asia',
		'UZ' => 'Asia',
		'VN' => 'Asia',
		'YE' => 'Asia',

		// Europe
		'AX' => 'Europe',
		'AL' => 'Europe',
		'AD' => 'Europe',
		'AT' => 'Europe',
		'BY' => 'Europe',
		'BE' => 'Europe',
		'BA' => 'Europe',
		'BG' => 'Europe',
		'HR' => 'Europe',
		'CZ' => 'Europe',
		'DK' => 'Europe',
		'EE' => 'Europe',
		'FO' => 'Europe',
		'FI' => 'Europe',
		'FR' => 'Europe',
		'DE' => 'Europe',
		'GI' => 'Europe',
		'GR' => 'Europe',
		'GG' => 'Europe',
		'HU' => 'Europe',
		'IS' => 'Europe',
		'IE' => 'Europe',
		'IM' => 'Europe',
		'IT' => 'Europe',
		'JE' => 'Europe',
		'XK' => 'Europe',
		'LV' => 'Europe',
		'LI' => 'Europe',
		'LT' => 'Europe',
		'LU' => 'Europe',
		'MT' => 'Europe',
		'MD' => 'Europe',
		'MC' => 'Europe',
		'ME' => 'Europe',
		'NL' => 'Europe',
		'MK' => 'Europe',
		'NO' => 'Europe',
		'PL' => 'Europe',
		'PT' => 'Europe',
		'RO' => 'Europe',
		'RU' => 'Europe',
		'SM' => 'Europe',
		'RS' => 'Europe',
		'SK' => 'Europe',
		'SI' => 'Europe',
		'ES' => 'Europe',
		'SJ' => 'Europe',
		'SE' => 'Europe',
		'CH' => 'Europe',
		'UA' => 'Europe',
		'GB' => 'Europe',
		'VA' => 'Europe',

		// North America
		'AI' => 'North America',
		'AG' => 'North America',
		'AW' => 'North America',
		'BS' => 'North America',
		'BB' => 'North America',
		'BZ' => 'North America',
		'BM' => 'North America',
		'BQ' => 'North America',
		'VG' => 'North America',
		'CA' => 'North America',
		'KY' => 'North America',
		'CR' => 'North America',
		'CU' => 'North America',
		'CW' => 'North America',
		'DM' => 'North America',
		'DO' => 'North America',
		'SV' => 'North America',
		'GL' => 'North America',
		'GD' => 'North America',
		'GP' => 'North America',
		'GT' => 'North America',
		'HT' => 'North America',
		'HN' => 'North America',
		'JM' => 'North America',
		'MQ' => 'North America',
		'MX' => 'North America',
		'MS' => 'North America',
		'NI' => 'North America',
		'PA' => 'North America',
		'PR' => 'North America',
		'BL' => 'North America',
		'KN' => 'North America',
		'LC' => 'North America',
		'MF' => 'North America',
		'PM' => 'North America',
		'VC' => 'North America',
		'SX' => 'North America',
		'TT' => 'North America',
		'TC' => 'North America',
		'US' => 'North America',
		'VI' => 'North America',

		// South America
		'AR' => 'South America',
		'BO' => 'South America',
		'BR' => 'South America',
		'CL' => 'South America',
		'CO' => 'South America',
		'EC' => 'South America',
		'FK' => 'South America',
		'GF' => 'South America',
		'GY' => 'South America',
		'PY' => 'South America',
		'PE' => 'South America',
		'SR' => 'South America',
		'UY' => 'South America',
		'VE' => 'South America',

		// Oceania
		'AS' => 'Oceania',
		'AU' => 'Oceania',
		'CK' => 'Oceania',
		'FJ' => 'Oceania',
		'PF' => 'Oceania',
		'GU' => 'Oceania',
		'KI' => 'Oceania',
		'MH' => 'Oceania',
		'FM' => 'Oceania',
		'NR' => 'Oceania',
		'NC' => 'Oceania',
		'NZ' => 'Oceania',
		'NU' => 'Oceania',
		'NF' => 'Oceania',
		'MP' => 'Oceania',
		'PW' => 'Oceania',
		'PG' => 'Oceania',
		'PN' => 'Oceania',
		'WS' => 'Oceania',
		'SB' => 'Oceania',
		'TK' => 'Oceania',
		'TO' => 'Oceania',
		'TV' => 'Oceania',
		'VU' => 'Oceania',
		'WF' => 'Oceania',

		// Antarctica
		'AQ' => 'Antarctica',
		'BV' => 'Antarctica',
		'TF' => 'Antarctica',
		'HM' => 'Antarctica',
		'GS' => 'Antarctica',
	];

	/**
	 * European Union member countries.
	 */
	private const EU_COUNTRIES = [
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
		'SE',
	];

	/** Country Data ******************************************************/

	/**
	 * Get all countries.
	 *
	 * @return array Array of country code => country name pairs.
	 */
	public static function all(): array {
		return self::COUNTRIES;
	}

	/**
	 * Get country name by code.
	 *
	 * @param string $code Country code (case-insensitive).
	 *
	 * @return string Country name or original code if not found.
	 */
	public static function get_name( string $code ): string {
		return self::COUNTRIES[ strtoupper( $code ) ] ?? $code;
	}

	/**
	 * Check if country code exists.
	 *
	 * @param string $code Country code to check.
	 *
	 * @return bool True if valid country code.
	 */
	public static function exists( string $code ): bool {
		return isset( self::COUNTRIES[ strtoupper( $code ) ] );
	}

	/**
	 * Get country code by name (case-insensitive search).
	 *
	 * @param string $name Country name to search for.
	 *
	 * @return string|null Country code or null if not found.
	 */
	public static function get_code( string $name ): ?string {
		$name = strtolower( trim( $name ) );

		foreach ( self::COUNTRIES as $code => $country_name ) {
			if ( strtolower( $country_name ) === $name ) {
				return $code;
			}
		}

		return null;
	}

	/**
	 * Search countries by partial name match.
	 *
	 * @param string $search Search term.
	 * @param int    $limit  Maximum results to return (0 = unlimited).
	 *
	 * @return array Array of matching country code => name pairs.
	 */
	public static function search( string $search, int $limit = 0 ): array {
		$search = strtolower( trim( $search ) );
		if ( empty( $search ) ) {
			return [];
		}

		$matches = [];

		foreach ( self::COUNTRIES as $code => $name ) {
			if ( str_contains( strtolower( $name ), $search ) || str_contains( strtolower( $code ), $search ) ) {
				$matches[ $code ] = $name;

				if ( $limit > 0 && count( $matches ) >= $limit ) {
					break;
				}
			}
		}

		return $matches;
	}

	/**
	 * Validate and sanitize country code.
	 *
	 * @param string $code Country code to validate.
	 *
	 * @return string|null Sanitized country code or null if invalid.
	 */
	public static function sanitize( string $code ): ?string {
		$code = strtoupper( trim( $code ) );

		return self::exists( $code ) ? $code : null;
	}

	/** Options ***********************************************************/

	/**
	 * Get countries formatted for select/dropdown options.
	 *
	 * @param string $format        Format type: 'value_label' or 'key_value'.
	 * @param bool   $include_empty Whether to include empty option.
	 * @param string $empty_label   Label for empty option.
	 *
	 * @return array Array of options.
	 */
	public static function get_options( string $format = 'value_label', bool $include_empty = false, string $empty_label = '— Select —' ): array {
		$options = [];

		if ( $include_empty ) {
			if ( $format === 'key_value' ) {
				$options[''] = $empty_label;
			} else {
				$options[] = [
					'value' => '',
					'label' => $empty_label,
				];
			}
		}

		foreach ( self::COUNTRIES as $code => $name ) {
			if ( $format === 'key_value' ) {
				$options[ $code ] = $name;
			} else {
				$options[] = [
					'value' => $code,
					'label' => $name,
				];
			}
		}

		return $options;
	}

	/**
	 * Get countries in key/value format.
	 *
	 * @param bool   $include_empty Whether to include empty option.
	 * @param string $empty_label   Label for empty option.
	 *
	 * @return array Array of country code => name pairs.
	 */
	public static function get_key_value_options( bool $include_empty = false, string $empty_label = '— Select —' ): array {
		return self::get_options( 'key_value', $include_empty, $empty_label );
	}

	/**
	 * Get countries in value/label format (Gutenberg/React compatible).
	 *
	 * @param bool   $include_empty Whether to include empty option.
	 * @param string $empty_label   Label for empty option.
	 *
	 * @return array Array of options with value/label keys.
	 */
	public static function get_value_label_options( bool $include_empty = false, string $empty_label = '— Select —' ): array {
		return self::get_options( 'value_label', $include_empty, $empty_label );
	}

	/** Formatting ********************************************************/

	/**
	 * Format country for display with optional flag.
	 *
	 * @param string $code         Country code.
	 * @param bool   $include_flag Include emoji flag.
	 * @param bool   $include_code Include code in parentheses.
	 *
	 * @return string Formatted country string.
	 */
	public static function format( string $code, bool $include_flag = false, bool $include_code = false ): string {
		$code = strtoupper( $code );
		$name = self::get_name( $code );

		if ( $name === $code && ! self::exists( $code ) ) {
			return $code;
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
	 * Get emoji flag for country.
	 *
	 * @param string $code Country code.
	 *
	 * @return string Emoji flag or empty string.
	 */
	public static function get_flag( string $code ): string {
		$code = strtoupper( $code );

		if ( strlen( $code ) !== 2 ) {
			return '';
		}

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

	/** Geographic Regions ************************************************/

	/**
	 * Get continent for country.
	 *
	 * @param string $code Country code.
	 *
	 * @return string|null Continent name or null if not found.
	 */
	public static function get_continent( string $code ): ?string {
		return self::CONTINENTS[ strtoupper( $code ) ] ?? null;
	}

	/**
	 * Check if country is in a specific continent.
	 *
	 * @param string $code      Country code.
	 * @param string $continent Continent name.
	 *
	 * @return bool True if country is in the specified continent.
	 */
	public static function is_continent( string $code, string $continent ): bool {
		return self::get_continent( $code ) === $continent;
	}

	/**
	 * Get all countries in a continent.
	 *
	 * @param string $continent Continent name.
	 *
	 * @return array Array of country code => name pairs.
	 */
	public static function get_by_continent( string $continent ): array {
		$countries = [];

		foreach ( self::CONTINENTS as $code => $cont ) {
			if ( $cont === $continent && isset( self::COUNTRIES[ $code ] ) ) {
				$countries[ $code ] = self::COUNTRIES[ $code ];
			}
		}

		return $countries;
	}

	/**
	 * Check if country is in European Union.
	 *
	 * @param string $code Country code.
	 *
	 * @return bool True if country is in EU.
	 */
	public static function is_eu( string $code ): bool {
		return in_array( strtoupper( $code ), self::EU_COUNTRIES, true );
	}

	/**
	 * Get all EU countries.
	 *
	 * @return array Array of country code => name pairs.
	 */
	public static function get_eu_countries(): array {
		$countries = [];

		foreach ( self::EU_COUNTRIES as $code ) {
			if ( isset( self::COUNTRIES[ $code ] ) ) {
				$countries[ $code ] = self::COUNTRIES[ $code ];
			}
		}

		return $countries;
	}

}