# WordPress Countries

A lightweight PHP library for working with country data in WordPress. Simple, static methods for country codes, names,
continents, and utilities.

## Features

- 🌍 Complete ISO 3166-1 alpha-2 country list (250+ countries)
- 🗺️ Continent mapping and EU membership detection
- 🎯 Simple static API - no instantiation needed
- 🔍 Search and validation utilities
- 🏳️ Emoji flag support
- ⚠️ Risk and sanctions categorization

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

## Formatting & Rendering

```php
// Get emoji flag
echo Countries::get_flag( 'US' ); // "🇺🇸"

// Format as plain string
echo Countries::format( 'US', true ); // "🇺🇸 United States"
echo Countries::format( 'US', false, true ); // "United States (US)"
echo Countries::format( 'US', true, true ); // "🇺🇸 United States (US)"

// Render as HTML (for admin tables, templates)
echo Countries::render( 'US' ); // "🇺🇸 United States" (escaped HTML)
echo Countries::render( 'US', true, false ); // "🇺🇸" (flag only)
echo Countries::render( 'US', false ); // "United States" (name only)

// Returns null for empty codes
$html = Countries::render( '' ); // null
```

## Geographic Regions

```php
// Get continent
$continent = Countries::get_continent( 'US' ); // "North America"
$continent = Countries::get_continent( 'DE' ); // "Europe"

// Get continent code
$code = Countries::get_country_continent_code( 'US' ); // "NA"

// Check continent
if ( Countries::is_continent( 'JP', 'Asia' ) ) {
    // Japan is in Asia
}

// Works with continent codes too
if ( Countries::is_continent( 'JP', 'AS' ) ) {
    // Also works
}

// Get all countries in a continent
$european = Countries::get_by_continent( 'Europe' );
$asian    = Countries::get_by_continent( 'AS' ); // Also accepts codes

// Get all continent codes
$continents = Countries::get_continent_codes();
// Returns: ['AF' => 'Africa', 'AN' => 'Antarctica', ...]
```

## European Union

```php
// EU membership
if ( Countries::is_eu( 'DE' ) ) {
    // Germany is in EU
}

// Get all EU countries
$eu_countries = Countries::get_eu_countries();
// Returns: ['AT' => 'Austria', 'BE' => 'Belgium', ...]
```

## Risk Categories

```php
// Check if country is high-risk
if ( Countries::is_high_risk( 'NG' ) ) {
    // Apply additional verification
}

// Get all high-risk countries
$high_risk = Countries::get_high_risk_countries();

// Check if country is under sanctions
if ( Countries::is_sanctioned( 'KP' ) ) {
    // Block transaction
}

// Get all sanctioned countries
$sanctioned = Countries::get_sanctioned_countries();
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

// Get emoji flag
$flag = get_country_flag( 'US' ); // "🇺🇸"

// Get all countries as code => name pairs
$options = get_country_options();

// Get continent
$continent = get_country_continent( 'US' ); // "North America"

// Render as HTML
$html = render_country( 'US' ); // "🇺🇸 United States"

// Sanitize user input
$code = sanitize_country_code( $_POST['country'] ); // "US" or null
```

## API Reference

| Method                              | Description               | Return    |
|-------------------------------------|---------------------------|-----------|
| `all()`                             | Get all countries         | `array`   |
| `get_name($code)`                   | Get country name          | `string`  |
| `get_code($name)`                   | Get code by name          | `?string` |
| `exists($code)`                     | Check if exists           | `bool`    |
| `sanitize($code)`                   | Validate/sanitize         | `?string` |
| `search($term, $limit)`             | Search countries          | `array`   |
| `format($code, $flag, $code)`       | Format as plain string    | `string`  |
| `render($code, $flag, $name)`       | Render as HTML            | `?string` |
| `get_flag($code)`                   | Get emoji flag            | `string`  |
| `get_continent($code)`              | Get continent name        | `?string` |
| `get_continent_codes()`             | Get all continent codes   | `array`   |
| `get_continent_code($name)`         | Continent name to code    | `?string` |
| `get_continent_name($code)`         | Continent code to name    | `?string` |
| `get_country_continent_code($code)` | Country to continent code | `?string` |
| `is_continent($code, $continent)`   | Check continent           | `bool`    |
| `get_by_continent($continent)`      | Countries in continent    | `array`   |
| `is_eu($code)`                      | Check EU membership       | `bool`    |
| `get_eu_countries()`                | Get EU countries          | `array`   |
| `is_high_risk($code)`               | Check high-risk status    | `bool`    |
| `get_high_risk_countries()`         | Get high-risk countries   | `array`   |
| `is_sanctioned($code)`              | Check sanctions status    | `bool`    |
| `get_sanctioned_countries()`        | Get sanctioned countries  | `array`   |

## Requirements

- PHP 7.4 or higher
- WordPress 6.0 or higher

## License

GPL-2.0-or-later