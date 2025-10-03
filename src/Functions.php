<?php
/**
 * Global Country Helper Functions
 *
 * Provides convenient global functions for common country operations.
 * These functions are wrappers around the ArrayPress\Countries\Countries class.
 *
 * Functions included:
 * - get_country_name() - Get country name by code
 * - get_country_code() - Get country code by name
 * - get_country_options() - Get countries formatted for select/dropdown
 * - is_valid_country() - Check if country code is valid
 * - format_country() - Format country with optional flag and code
 * - sanitize_country_code() - Validate and sanitize country code
 *
 * @package ArrayPress\Countries
 * @since   1.0.0
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

use ArrayPress\Countries\Countries;

if ( ! function_exists( 'get_country_name' ) ) {
	/**
	 * Get country name by code.
	 *
	 * @param string $code Country code (case-insensitive).
	 *
	 * @return string Country name or original code if not found.
	 * @since 1.0.0
	 */
	function get_country_name( string $code ): string {
		return Countries::get_name( $code );
	}
}

if ( ! function_exists( 'get_country_code' ) ) {
	/**
	 * Get country code by name.
	 *
	 * @param string $name Country name to search for.
	 *
	 * @return string|null Country code or null if not found.
	 * @since 1.0.0
	 */
	function get_country_code( string $name ): ?string {
		return Countries::get_code( $name );
	}
}

if ( ! function_exists( 'get_country_options' ) ) {
	/**
	 * Get countries formatted for select/dropdown options.
	 *
	 * Returns array in format used by Gutenberg and React components:
	 * [ ['value' => 'US', 'label' => 'United States'], ... ]
	 *
	 * @param bool   $include_empty Whether to include empty option.
	 * @param string $empty_label   Label for empty option.
	 *
	 * @return array Array of options with value/label keys.
	 * @since 1.0.0
	 */
	function get_country_options( bool $include_empty = false, string $empty_label = '— Select —' ): array {
		return Countries::get_options( $include_empty, $empty_label );
	}
}

if ( ! function_exists( 'is_valid_country' ) ) {
	/**
	 * Check if country code is valid.
	 *
	 * @param string $code Country code to check.
	 *
	 * @return bool True if valid country code.
	 * @since 1.0.0
	 */
	function is_valid_country( string $code ): bool {
		return Countries::exists( $code );
	}
}

if ( ! function_exists( 'format_country' ) ) {
	/**
	 * Format country for display with optional flag and code.
	 *
	 * @param string $code         Country code.
	 * @param bool   $include_flag Include emoji flag.
	 * @param bool   $include_code Include code in parentheses.
	 *
	 * @return string Formatted country string.
	 * @since 1.0.0
	 */
	function format_country( string $code, bool $include_flag = false, bool $include_code = false ): string {
		return Countries::format( $code, $include_flag, $include_code );
	}
}

if ( ! function_exists( 'sanitize_country_code' ) ) {
	/**
	 * Validate and sanitize country code.
	 *
	 * @param string $code Country code to validate.
	 *
	 * @return string|null Sanitized country code or null if invalid.
	 * @since 1.0.0
	 */
	function sanitize_country_code( string $code ): ?string {
		return Countries::sanitize( $code );
	}
}

if ( ! function_exists( 'get_country_continent' ) ) {
	/**
	 * Get continent for country.
	 *
	 * @param string $code Country code.
	 *
	 * @return string|null Continent name or null.
	 * @since 1.0.0
	 */
	function get_country_continent( string $code ): ?string {
		return Countries::get_continent( $code );
	}
}

if ( ! function_exists( 'is_english_speaking_country' ) ) {
	/**
	 * Check if country is English-speaking.
	 *
	 * @param string $code Country code.
	 *
	 * @return bool True if English-speaking country.
	 * @since 1.0.0
	 */
	function is_english_speaking_country( string $code ): bool {
		return Countries::is_english_speaking( $code );
	}
}