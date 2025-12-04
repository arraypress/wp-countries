# WordPress Countries

A lightweight PHP library for working with country data in WordPress. Simple, static methods for country codes, names,
continents, and utilities.

## Features

- 🌍 Complete ISO 3166-1 alpha-2 country list (250+ countries)
- 🗺️ Continent mapping and EU membership detection
- 🎯 Simple static API - no instantiation needed
- 📝 Multiple output formats for dropdowns
- 🔍 Search and validation utilities
- 🏳️ Emoji flag support
- 🎨 Gutenberg/React compatible formats

## Installation

```bash
composer require arraypress/countries
```

## Basic Usage

```php
use ArrayPress\Countries\Countries;

// Get all countries
$countries = Countries::all();
// Returns: ['AF' => 'Afghanistan', 'AL' => 'Albania', ...]

// Get country name
$name = Countries::get_name( 'US' ); // "United States"

// Get country code by name
$code = Countries::get_code( 'Germany' ); // "DE"

// Check if country exists
if ( Countries::exists( 'US' ) ) {
    // Valid country code
}

// Validate and sanitize user input
$country = Countries::sanitize( $_POST['country'] ); // "US" or null
```

## Dropdown Options

```php
// Gutenberg/React format (value/label)
$options = Countries::get_value_label_options();
// Returns: [['value' => 'US', 'label' => 'United States'], ...]

// Key/value format
$options = Countries::get_key_value_options();
// Returns: ['US' => 'United States', ...]

// With empty option
$options = Countries::get_value_label_options( true, '— Select Country —' );
```

## Formatting & Flags

```php
// Get emoji flag
echo Countries::get_flag( 'US' ); // "🇺🇸"

// Format with flag
echo Countries::format( 'US', true ); // "🇺🇸 United States"

// Format with code
echo Countries::format( 'US', false, true ); // "United States (US)"

// Format with both
echo Countries::format( 'US', true, true ); // "🇺🇸 United States (US)"
```

## Geographic Regions

```php
// Get continent
$continent = Countries::get_continent( 'US' ); // "North America"
$continent = Countries::get_continent( 'DE' ); // "Europe"

// Check continent
if ( Countries::is_continent( 'JP', 'Asia' ) ) {
    // Japan is in Asia
}

// Get all countries in a continent
$european = Countries::get_by_continent( 'Europe' );

// EU membership
if ( Countries::is_eu( 'DE') ) {
    // Germany is in EU
}

// Get all EU countries
$eu_countries = Countries::get_eu_countries();
```

## Search

```php
// Search by name or code
$results = Countries::search( 'united' );
// Returns: ['AE' => 'United Arab Emirates', 'GB' => 'United Kingdom', 'US' => 'United States']

// Limit results
$results = Countries::search( 'island', 5 );
```

## Helper Functions

Global functions are available for convenience:

```php
// Get country name
$name = get_country_name( 'US' ); // "United States"

// Get country code
$code = get_country_code( 'Germany' ); // "DE"

// Get emoji flag
$flag = get_country_flag( 'US' ); // "🇺🇸"

// Get dropdown options
$options = get_country_options();

// Get continent
$continent = get_country_continent( 'US'); // "North America"

// Validate country code
if ( is_valid_country( 'US' ) ) {
    // Valid
}

// Format for display
$display = format_country( 'US', true, true ); // "🇺🇸 United States (US)"

// Sanitize user input
$code = sanitize_country_code( $_POST['country'] );
```

## API Reference

| Method                                    | Description            | Return    |
|-------------------------------------------|------------------------|-----------|
| `all()`                                   | Get all countries      | `array`   |
| `get_name($code)`                         | Get country name       | `string`  |
| `get_code($name)`                         | Get code by name       | `?string` |
| `exists($code)`                           | Check if exists        | `bool`    |
| `sanitize($code)`                         | Validate/sanitize      | `?string` |
| `search($term, $limit)`                   | Search countries       | `array`   |
| `get_options($format, $empty, $label)`    | Get dropdown options   | `array`   |
| `get_key_value_options($empty, $label)`   | Key/value format       | `array`   |
| `get_value_label_options($empty, $label)` | Value/label format     | `array`   |
| `get_flag($code)`                         | Get emoji flag         | `string`  |
| `format($code, $flag, $code)`             | Format display         | `string`  |
| `get_continent($code)`                    | Get continent          | `?string` |
| `is_continent($code, $continent)`         | Check continent        | `bool`    |
| `get_by_continent($continent)`            | Countries in continent | `array`   |
| `is_eu($code)`                            | Check EU membership    | `bool`    |
| `get_eu_countries()`                      | Get EU countries       | `array`   |

## Requirements

- PHP 7.4 or higher
- WordPress 6.0 or higher

## License

GPL-2.0-or-later