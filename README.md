# WordPress Countries

A lightweight PHP library for working with country data in WordPress. Simple, static methods for country codes, names, and utilities.

## Features

- 🌍 Complete ISO 3166-1 alpha-2 country list
- 🎯 Simple static API - no instantiation needed
- 📝 Multiple output formats (arrays, options, HTML)
- 🔍 Search and validation utilities
- 🏳️ Emoji flag support
- 🎨 Gutenberg/React compatible formats
- 🌐 Translation support via WordPress i18n
- 🔌 WordPress filter support

## Installation

```bash
composer require arraypress/wp-countries
```

## Basic Usage

```php
use ArrayPress\Countries\Countries;

// Get all countries (translated)
$countries = Countries::all();
// Returns: ['US' => 'United States', 'GB' => 'United Kingdom', ...]

// Get raw country names (English)
$countries = Countries::raw();

// Get country name
$name = Countries::get_name('US'); // "United States"

// Check if country exists
if (Countries::exists('US')) {
//    // Valid country code
}

// Get options for select/dropdown (Gutenberg format)
$options = Countries::get_options();
// Returns: [['value' => 'US', 'label' => 'United States'], ...]

// Search countries
$results = Countries::search('united'); 
// Returns: ['US' => 'United States', 'GB' => 'United Kingdom', ...]
```

## Advanced Usage

### HTML Select Options
```php
// Generate HTML option elements
$html = Countries::get_select_options('US');
echo '<select name="country">' . $html . '</select>';
```

### Country Formatting
```php
// With emoji flag
echo Countries::format('US', true); // "🇺🇸 United States"

// With code
echo Countries::format('US', false, true); // "United States (US)"

// With both
echo Countries::format('US', true, true); // "🇺🇸 United States (US)"
```

### Popular Countries
```php
// Get default popular countries
$popular = Countries::get_popular();

// Or specify your own
$popular = Countries::get_popular(['US', 'CA', 'MX']);
```

### Grouped Display
```php
// Group by first letter
$grouped = Countries::get_grouped();
/* Returns:
[
//    'A' => ['AF' => 'Afghanistan', 'AL' => 'Albania', ...],
//    'B' => ['BS' => 'Bahamas', 'BH' => 'Bahrain', ...],
//    ...
]
*/
```

### Translation Support
```php
// Get translated names (default)
$countries = Countries::all(true);

// Get untranslated English names
$countries = Countries::all(false);
// or
$countries = Countries::raw();

// Search returns translated results by default
$results = Countries::search('états', 10, true); // Searches translated names
```

## WordPress Integration

### Filters
```php
// Modify country list
add_filter('arraypress_countries_list', function($countries) {
//    // Add custom country
//    $countries['XX'] = 'Custom Country';
//    
//    // Remove a country
//    unset($countries['US']);
//    
//    return $countries;
});

// Modify popular countries
add_filter('arraypress_countries_popular', function($popular) {
//    // Set your own popular countries
//    return ['US', 'CA', 'GB', 'AU'];
});
```

### Form Integration
```php
// In your form
$selected = get_user_meta($user_id, 'country', true);
?>
<select name="country">
//    <?php echo Countries::get_select_options($selected); ?>
</select>
```

### Validation
```php
// Sanitize and validate user input
$country = Countries::sanitize($_POST['country']);
if ($country) {
//    update_user_meta($user_id, 'country', $country);
}
```

### Gutenberg Block
```javascript
import { SelectControl } from '@wordpress/components';

// In PHP, localize the countries
wp_localize_script('my-block', 'countryData', [
//    'countries' => Countries::get_options()
]);

// In JavaScript
<SelectControl
//    label="Country"
//    value={country}
//    options={countryData.countries}
//    onChange={setCountry}
/>
```

## API Reference

| Method | Description | Return Type |
|--------|-------------|-------------|
| `all($translate = true)` | Get all countries | `array` |
| `raw()` | Get untranslated country names | `array` |
| `get_options($empty, $label, $translate)` | Get Gutenberg-style options | `array` |
| `get_name($code, $translate)` | Get country name by code | `string` |
| `exists($code)` | Check if country exists | `bool` |
| `get_code($name)` | Get code by country name | `?string` |
| `search($term, $limit, $translate)` | Search countries | `array` |
| `get_grouped($translate)` | Get countries grouped by letter | `array` |
| `get_popular($codes, $translate)` | Get popular countries | `array` |
| `format($code, $flag, $code, $translate)` | Format country display | `string` |
| `get_flag($code)` | Get emoji flag | `string` |
| `get_select_options($selected, $empty, $translate)` | Get HTML options | `string` |
| `sanitize($code)` | Validate and sanitize code | `?string` |

## Requirements

- PHP 7.4 or higher
- WordPress 5.0 or higher

## License

GPL-2.0-or-later

## Support

- [Documentation](https://github.com/arraypress/wp-countries)
- [Issue Tracker](https://github.com/arraypress/wp-countries/issues)