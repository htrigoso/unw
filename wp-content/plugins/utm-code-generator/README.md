# UTM Code Generator

Automatically generates unique UTM codes for WordPress custom post types with ACF integration.

## Requirements

- WordPress 5.8 or higher
- PHP 7.4 or higher
- Advanced Custom Fields (ACF) plugin

## Installation

1. Upload the `utm-code-generator` folder to `/wp-content/plugins/`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Make sure ACF is installed and activated
4. Configure your ACF fields as described below

## ACF Field Configuration

Create a field group for your 'utms' post type with these fields:

### Field 1: Code Format

- Field Type: Select
- Field Name: `code_format`
- Choices:

```txt
  UNWP : PAUTA
  UNWO : ORGÁNICO
```

- Default Value: (leave empty)
- Required: Yes
- Allow Null: Yes

### Field 2: UTM Code

- Field Type: Text
- Field Name: `utm_code`
- Default Value: (leave empty)
- Required: Yes
- Instructions: "Este código se generará automáticamente"

## Usage

1. Create a new UTM post
2. Select a Code Format from the dropdown
3. The UTM Code will be generated automatically
4. Save the post

## Features

- ✅ Automatic code generation
- ✅ Sequential numbering with 5 digits
- ✅ Duplicate prevention
- ✅ Read-only code field
- ✅ AJAX-powered generation
- ✅ Security with nonces
- ✅ Internationalization ready

## Customization

To change the post type slug, edit line 33 in `utm-code-generator.php`:

```php
private $post_type = 'your-post-type-slug';
```

To add more code formats, edit the `$valid_formats` array in `includes/class-utm-ajax.php`.
