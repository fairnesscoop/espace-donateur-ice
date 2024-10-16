# CMB2 Message Field
This plugin adds support for an informative message field to CMB2.  

## Usage
See the [CMB2](https://github.com/CMB2/CMB2/wiki) Wiki for information on how to use CMB2.  

This field supports HTML markup. By default, all output will be escaped using [`wp_kses`](https://developer.wordpress.org/reference/functions/wp_kses/) with the `'post'` context.  
You can specify a different context by passing a value to the `'kses'` key.  

The message data will be wrapped in a `<div>` tag. You can declare attributes for this wrapper by passing an associative array of key=>value pairs in the `'attributes'` key.  

```php
$metabox->add_field(
    [
        'id'         => 'my-message',
        'type'       => 'message',
        'message'    => sprintf( '<p>%s</p>', __( 'My Message', 'textdomain' ) ),
        'kses'       => 'post',
        'attributes' => [
            'class' => 'my-message-field',
        ],
    ]
);
```
