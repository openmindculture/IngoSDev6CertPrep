# Shopware 6 Theme Plugin Development Templates

How to develop themes plugins for Shopware 6 when the documentation is often incomplete or outdated and many certificied Shopware development agencies keep their experience and knowledge secret or they are just too busy to share? This repository obsoletes earlier versions that I created as container for learning and open-source development. I tried to collect and share publicly available information here, on Slack, and in my DEV blog series [Learning in Public](https://dev.to/ingosteinke/series/16707).

My notes and examples try to follow a pragmatic interpretation of the latest best practice for Shopware 6.5 community edition.

## Dockware Development Environment

Thanks to [dasistweb](https://www.dasistweb.de/), the Docker-based [dockware](https://docs.dockware.io/) containers provide a useful alternative to Shopware's nixOS/flex/[devenv-based approach](https://developer.shopware.com/docs/guides/installation/devenv.html). The setup is based on the lastest dev image. We don't need no parent project container repository anymore! `custom/plugins` is now mounted to the project `src` directory as recommended in the [dockware example files on GitHub](https://github.com/dockware/examples).

## Plugins

### IngoS\Dev6CertPrep

This theme plugin is based on a maximum example created by `bin/console plugin:create` and adding a preview image and additional frontend-specific asset resources like a favicon icon for localhost. Using a `theme.json` file is optional and its content might be redundant as long as the default locations for assets don't change.

## Commands

### Start the Shopware Development Container

- `docker-compose up -d`

### Open the Storefront or Administration in a Browser

- http://localhost/
- http://localhost/admin (default credentials: admin:shopware)

### Enter the Container Shell

- `docker exec -it shop bash`

You will start in the Shopware project root `/var/www/html` where you can type console commands like
`bin/console plugin:create foobar`
to create a new plugin structure.

### Shopware CLI Scripts

Shopware 6.5 removed `psh.phar`, but there is still `bin/console` and additional scripts in `/var/www/html/bin`:

- `bin/build-administration.sh`
- `bin/build-js.sh`
- `bin/build-storefront.sh`
- `bin/ci`
- `bin/console`
- `bin/functions.sh`
- `bin/watch-administration.sh`
- `bin/watch-storefront.sh`

#### Useful Console Commands

- `bin/console cache:clear`
- `bin/console theme:refresh`

#### Optional Verbose vs. Silent Switches

There is no verbose switch.
Scripts seem to output verbose warnings by default. Add `--no-debug` to suppress  noncritical warnings and deprecation messages, e.g.:

- `bin/console theme:compile --no-debug`

### Stop the Container

- `docker-compose stop`

### Remove the Container

- `docker-compose down -v` (-v will remove created volumes)

## Logfile Locations

### Shopware Logs in Dockware

- `/var/www/html/var/log`

#### System Logs in Dockware

- `/var/log`

## Shopware Platform Source Code in Dockware

- `/var/www/html/vendor/shopware`

- TODO: mounting this as a secondary volume broke the installation.

- Workaround to see the shop source in the IDE: check it out into another, gitignored, directory:

- `git clone https://github.com/shopware/shopware.git sw_platform_src`

## Learning and Sharing

### Possible Assignments, Requirements, Project Ideas

- Create and customize a Shopware 6 demo plugin to recapitulate Shopware 6 developer tutorial before taking the certification exam. Use a controller to create a new public API endpoint to display custom content in the storefront. Add some custom styles and consider that plugin reviewers might install your plugin in a subdomain using an non-default locale like Dutch or Turkish, e.g. https://shopware.example.com/pazar/tr_TR/ and use an arbitrary API version like `@Route("/api/v42/_action`...
- create a maximum boilerplate plugin for learning and as a reference
- create a minimal theme plugin to replicate the tutorial example.

### Ingo's Demo Theme: `IngoSDemoTogetherTheme`

This example theme is based on a minimal boilerplate create by the Shopware 6.5 theme creation script (see "Theme Creation and Installation Cookbook" below).

We can add useful examples missing in the tutorials and documentation like adding a theme preview screenshot and a default favicon icon image for browser bookmarks.

We can use `IngoSDemoTogetherTheme` to fork future themes like when migrating existing customer shops from WooCommerce or Shopify.

### Verify and Test

- add tests (see leichteckig's Cypress tutorials, NCA workshops)
  - end-to-end / frontend tests
  - unit tests
  - devOps QA:
- destroy and recreate the docker setup, repeat documented steps
- dto. in an alternative environment to ensure it runs on
  - Linux: tested on Ubuntu 22.04 Linux 6.5
  - Windows: test on Windows 10 (in my VirtualBox)
  - MacOS: test on Sierra (on my vintage MacBook)
- verify the theme on a shared web hosting server
  - using `bin/console` via `ssh`
  - using the admin web interface and upload a theme file!

## Theme Creation and Installation Cookbook

In the local development environment:

- `docker-compose up -d`
- `docker exec -it shop bash`
- `bin/console theme:create MyTheme`
- `bin/console plugin:refresh`
- `bin/console plugin:install --activate MyTheme`
- `bin/console theme:change`
- in the menu, choose `[1] MyTheme`
- choose to apply it to the `storefront` channel
- `bin/build-storefront.sh`
- `bin/console cache:clear`
- open http://localhost/admin
- verify that you see `MyTheme` installed and activated in My extensions -> Themes!

Now you can modify the theme and repeat these steps:

- `bin/console theme:compile`
- `bin/build-storefront.sh`
- `bin/console cache:clear`

Last but not least, you can build an exportable zip archive file to upload into a shop backend or Shopware's plugin marketplace.

TODO: 
- theme export best practice
- theme verification best practice

Should we still use FroshTools?

## Shopware 6 Deprecations

- since 6.5 there is no `psh.phar` anymore. You can find the replacements in the bin folder just `./bin/watch-administration.sh` and so on (source: shyim in Shopware Slack)
- see my subjective selective changelog post [Shopware changes since the 6.0 dev training videos](https://dev.to/ingosteinke/shopware-changes-since-the-60-dev-training-videos-481o) for more changes since 6.0/6.1
