# CMB2 Password Field
This plugin adds support for a masked password-style field to CMB2.

## Usage
See the [CMB2](https://github.com/CMB2/CMB2/wiki) Wiki for information on how to use CMB2.  

This field behaves just like CMB2's [text](https://github.com/CMB2/CMB2/wiki/Field-Types#text) field type.  

```php
$metabox->add_field(
    [
        'name'    => 'My API Key',
        'desc'    => 'API key for some service',
        'default' => '',
        'id'      => 'my-api-key',
        'type'    => 'password',
    ]
);
```
