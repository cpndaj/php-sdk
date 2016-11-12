# Tradenity

Welcome to Tradenity PHP SDK !



## Installation

Installation instructions provided for composer, but the sdk is not dependent on composer,
you can install using any other tool.

Add this line to your application's `composer.json` file:

```json
require:{
 'tradenity/php-sdk': "0.1.0"
 }
```

And then execute:

    $ composer install

Or install it yourself as:

    $ composer install tradenity

## Usage

### Initialise the library with your store api key and your framework 's SessionIdAccessor:

`TradenityClient::$key = 'sk_1234567'`
`TradenityClient::$sessionIdAccessor = ....` // framework dependent (check documentation)

### Invoke the required method, for example to get a list of all the categories for that store:

`Category->find_all()`


Detailed documentation can be found on our [knowledge base site](http://docs.tradenity.com/kb/sdk/php/).




## Contributing

1. Fork it ( https://github.com/tradenity/php-sdk/fork )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request
