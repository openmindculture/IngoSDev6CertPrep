# Roadmap

* [x] make a "roadmap" for learning and coding
* [x] prepare for certification test
* [x] plan plugins to release in the official store
* [x] build a groundwork for any upcoming work
* [x] reuse concepts for other WordPress / WooCommerce plugins
* [ ] update setup and plugin code due to deprecations
* [ ] prepare for certification test
* [ ] reuse code and knowledge for other Shopware plugins

## Possible Assignment Requirements

Complete this demo plugin to recapitulate Shopware 6 developer tutorial before certification. Create a Shopware 6 plugin using a controller to create a new public API endpoint to display custom content in the storefront. Add some custom styles and consider that plugin reviewers might install your plugin in a subdomain using an non-default locale like Dutch or Turkish, e.g. https://shopware.example.com/pazar/tr_TR/

## Updates

This setup obsoletes earlier approaches based on [shopware/development](https://github.com/shopware/development) and the new official [nix](https://nixos.org)-based [devenv](https://developer.shopware.com/docs/guides/installation/devenv.html).

With a [dockware](https://dockware.io/)-based setup, we don't need no parent project container repository anymore! `custom/plugins` is now mounted to the project `src` directory as recommended in the [dockware example files on GitHub](https://github.com/dockware/examples).

## Deprecations

- since 6.5 there is no psh.phar anymore. You can find the replacements in the bin folder just ./bin/watch-administration.sh and so on (source: shyim in Shopware Slack)
- see my subjective selective changelog post [Shopware changes since the 6.0 dev training videos](https://dev.to/ingosteinke/shopware-changes-since-the-60-dev-training-videos-481o) for more changes since 6.0/6.1

### Learning Goals / TODO List

* [x] create a new Shopware installation locally
* [x] recapitulate goals, techniques
* [x] refine requirements
* [ ] (re)create plugin code
* [ ] check, compare with tutorial
* [ ] test plugin in new installation
* [ ] run static code checks (PhpStorm, phpstan, ...)
* [ ] write proper documentation and meta information
* [ ] validate and export plugin
* [ ] test in another demoshop
* [ ] make sure to know how to install a shop
* [ ] ensure in a shop with subfolder path and subdomain
* [ ] ensure in an uncommon language (e.g. Dutch or Turkish)
* [ ] prepare for upload in official store to get extra validation results

### Further Goals / Optional Features

These features are not required to pass a simple coding test, but they also seem essential for working with Shopware 6 and creating more plugins.  

* [ ] understand PhpStan, ensure it's actually working
* [ ] add unit tests (using PhpUnit)
* [ ] add an integration tests (using Cypress or Codeception)
* [ ] understand autoloading and use Symfony autowiring
* [ ] understand and use Bootstrap
* [ ] use SCSS for CSS compatibility
* [ ] use stylelint for CSS code quality
* [ ] understand and use Vue for admin coding
* [ ] use eslint for ECMAScript code quality
* [ ] use Babel for JavaScript compatibility
* [ ] use content snippets
* [ ] localize content

### Shopware 6 Project Repositories / Ideas

* [IngoSDev6CertPrep](https://github.com/openmindculture/IngoSDev6CertPrep)
* [IngoSCutePinkLightTheme](https://github.com/openmindculture/IngoSCutePinkLightTheme)
* [IngoSCarbonFootprintApi](https://github.com/openmindculture/IngoSCarbonFootprintApi)

#### Shopware Installations

* [localhost](http://localhost/) (dockware/dev)
