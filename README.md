# Roadmap

* [x] make a "roadmap" for learning and coding
* [x] plan plugins to release in the official store
* [ ] prepare for certification test
* [ ] build a groundwork for any upcoming work
* [ ] reuse code and knowlege for other Shopware plugins
* [ ] reuse concepts for other WordPress / WooCommerce plugins

## Possible Assignment Requirements

Complete this demo plugin to recapitulate Shopware 6 developer tutorial before certification. Create a Shopware 6 plugin using a controller to create a new puplic API endpoint to display custom content in the storefront. Also apply custom styles.

## Updates

This setup obsoletes earlier approaches based on [shopware/development](https://github.com/shopware/development) and the new official [nix](https://nixos.org)-based [devenv](https://developer.shopware.com/docs/guides/installation/devenv.html).

With a [dockware](https://dockware.io/)-based setup, we don't need no parent project container repository anymore! `custom/plugins` is now mounted to the project `src` directory as recommended in the [dockware example files on GitHub](https://github.com/dockware/examples).

## Deprecations

- since 6.5 there is no psh.phar anymore. You can find the replacements in the bin folder just ./bin/watch-administration.sh and so on (source: shyim in Shopware Slack)
- see my subjective selective changelog post [Shopware changes since the 6.0 dev training videos](https://dev.to/ingosteinke/shopware-changes-since-the-60-dev-training-videos-481o) for more changes since 6.0/6.1

### Learning Goals / TODO List

* [ ] recapitulate goals, techniques
* [ ] refine requirements
* [ ] (re)create plugin code
* [ ] check, compare with tutorial
* [ ] create a new Shopware installation locally
* [ ] test plugin in new installation
* [ ] run static code checks (phpstan, ...)
* [ ] write proper documentation and meta information
* [ ] validate and export plugin
* [ ] test in another demoshop
* [ ] make sure to know how to install a shop
* [ ] ensure in a shop with subfolder path
* [ ] ensure in an uncommon language (e.g. Dutch)
* [ ] prepare for upload in official store to get extra validation results

### Further Goals / Optional Features

These features are not required to pass a simple coding test, but they also seem essential for working with Shopware 6 and creating more plugins.  

* [ ] understand PhpStan, ensure it's actually working
* [ ] add unit tests (using Codeception)
* [ ] add an integration tests (using Cypress)
* [ ] understand and use Symfony autowiring
* [ ] understand and use Bootstrap
* [ ] use SCSS for CSS compatibility
* [ ] use stylelint for CSS code quality
* [ ] understand and use Vue for admin coding
* [ ] use eslint for ECMAScript code quality
* [ ] use Babel for JavaScript compatibility
* [ ] use content snippets
* [ ] localize content

### Shopware 6 Repositories

* [fractal-shopware-demo](https://github.com/openmindculture/fractal-shopware-demo)
  * [development](https://github.com/shopware/development) (official repo)
    * custom (custom local content)
      * plugins
        * [IngoSFraktalistheme](https://github.com/openmindculture/IngoSFraktalistheme)
        * [IngoSDev6CertPrep](https://github.com/openmindculture/IngoSDev6CertPrep)
        * [IngoSCutePinkLightTheme](https://github.com/openmindculture/IngoSCutePinkLightTheme)
        * [IngoSCarbonFootprintApi](https://github.com/openmindculture/IngoSCarbonFootprintApi)
    * [platform](https://github.com/shopware/platform) (official repo)

#### Shopware Installations

* [localhost:8000](http://localhost:8000/) (fractal-shopware-demo)
* [shop.fraktalisman.de](https://shop.fraktalisman.de)
