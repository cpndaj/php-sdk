Welcome to PHP SDK for Tradenity ecommerce API
====================================================

This is the official PHP SDK for [Tradenity ecommerce API](https://www.tradenity.com).

## Prerequisites

To use the Tradenity SDK, you must have:

-  Working PHP development environment (currently versions > 5.5 are supported).
-  Active account in [Tradenity](http://www.tradenity.com)

## Installation

Installation instructions provided for composer, but the sdk is not dependent on composer,
you can install using any other tool.

Add this line to your application's `composer.json` file:

```json
require:{
 'tradenity/php-sdk': "1.0.0"
 }
```

And then execute:

    $ composer install

Or install it yourself as:

    $ composer install tradenity


## Create store and load sample data

- If you are not yet registered, create a new [Tradenity account](https://www.tradenity.com).
- After you login to your account, go to [Getting started](https://admin.tradenity.com/admin/getting_started) page and create new store. you may click "Create sample store" to create a new store and populate it with sample data
- From the administration side menu, choose "Developers" > "API Keys", you can use the default key or generate a new one.


## Setup your credentials

First of all, you have to get API keys for your store, you can find it in your store `Edit` page.
To get there navigate to the stores list page, click on the `Edit` button next to your store name, scroll down till you find the `API Keys` section.


## Usage

### Initialise the library with your store api key and your framework 's SessionIdAccessor:

`Tradenity\SDK\ApiClient::$ApiKey = 'sk_1234567'`

Add the framework dependent `SessionIdAccessor` (check documentation for details):

`Tradenity\SDK\ApiClient::$sessionIdAccessor =  = ....`

### Use in your code

Invoke the required method on a specific entity, for example to get a list of all the categories for that store:

`Category->find_all()`


Detailed documentation can be found on our [knowledge base site](http://docs.tradenity.com/kb/sdk/php/).


## Extensions for common PHP frameworks

These libraries eases the integration between Tradenity SDK and the corresponding framework:

[Laravel framework extension library](https://github.com/tradenity/php-sdk-laravel-ext).

[Symphony framework  extension library](https://github.com/tradenity/php-sdk-symfony-ext).


## Tutorials and sample applications

We provide 2 sample applications, actually it is the same application implemented using 2 frameworks: `Laravel`, and `Symphony`.
You can find live demo here:

[Camera store sample application live demo](http://camera-store-sample.tradenity.com/)

You can find the code at github:

[Camera store for laravel code](https://github.com/tradenity/camerastore-php-laravel-sample).

[Camera store for symphony code](https://github.com/tradenity/camerastore-php-symphony-sample).

We also provide a detailed explanation of the code of these sample applications in the form of a step by step tutorials:

[Camera store for laravel tutorial](http://docs.tradenity.com/kb/tutorials/php/laravel/).

[Camera store for symphony tutorial](http://docs.tradenity.com/kb/tutorials/php/symfony/).



## Contributing

1. Fork it ( https://github.com/tradenity/php-sdk/fork )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request
