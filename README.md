# Shopware 6 Theme Plugin Development Templates

How to develop themes plugins for Shopware 6 when the documentation is often incomplete or outdated and many certificied Shopware development agencies keep their experience and knowledge secret or they are just too busy to share? This repository obsoletes earlier versions that I created as container for learning and open-source development. I tried to collect and share publicly available information here, on Slack, and in my DEV blog series [Learning in Public](https://dev.to/ingosteinke/series/16707).

My notes and examples try to follow a pragmatic interpretation of the latest best practice for Shopware 6.5 community edition and upcoming versions, focusing on frontend customization plus possible backend extensions like custom fields, custom entities, and new routes to additional page types.

A discontinued feature branch for certification preparation contains steps towards a maximalistic full-on example of what could be done using plugins, inspired by the original Shopware Academy training videos (see [tag 0.1.1](https://github.com/openmindculture/IngoSDev6CertPrep/releases/tag/0.1.1)).

Current development will focus on minimalism, pragmatism, and frontend optimization instead, like using animation, color, transparency, and interactivity with web performance (page speed) optimization, usability, cross-device compatibility, and accessibility in mind. Buzz words dropped, let's elaborate on some more specific development details below:

## Dockware Development Environment

Thanks to [dasistweb](https://www.dasistweb.de/), the Docker-based [dockware](https://docs.dockware.io/) containers provide a useful alternative to Shopware's nixOS/flex/[devenv-based approach](https://developer.shopware.com/docs/guides/installation/devenv.html). The setup is based on the lastest dev image. We don't need no parent project container repository anymore! `custom/plugins` is now mounted to the project `src` directory as recommended in the [dockware example files on GitHub](https://github.com/dockware/examples).

## Plugins

### IngoSDemoTogetherTheme

**Ingo's Demo Together Theme** is based on a late 2023 (Shopware 6.5) theme skeleton and inspired both by previous practice examples and by other customers' requirements and their current implementations using Shopify or WooCommerce. This theme tries to combine frontend customization and adding custom content, including a new entity (FAQ) and a new route (URL) to a simple static page.

Ingo's Demo Together Theme could also serve as a code base for actual projects and possible Shopware migrations in the future.

#### Namespace without seperating the vendor prefix

Note that this theme plugin does not separate the vendor prefix from the rest of the plugin name, in order to ensure consistency between the PHP namespace and the theme's directory structure.

#### Explicit service attributes and setTwig injection

As Shopware 6.5 does not use PHP autowiring by default, the code follows Shopware's documentation (and forum posts and issues) by explicitly defining services, subscribers, and injecting `setTwig` and `setContainer` in `src/Resources/config/services.xml`.

#### Testing

- Frontend/Storefront/End-to-end tests using Cypress
  - assert that http://localhost returns a 200 OK status code.
  - assert that http://localhost/simpleSeite returns a 200 OK status code.
  - assert that http://localhost/simpleSeite contains (heading) text "simpleSeite".
  - assert that http://localhost/faq returns a 200 OK status code.
  - assert that http://localhost/faq contains (heading) text "FAQ".
- Unit tests for backend components using Jest and/or PhpUnit (TODO)

See [Shopware developers documentation: Extensions: Testing](https://developer.shopware.com/docs/guides/plugins/plugins/testing/).

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
- (adjust file rights / ownerships so that the command line interface inside the docker container and the IDE user outside can both write to files and directories)

Now you can modify the theme and repeat these steps:

- `bin/console theme:compile`
- `bin/build-storefront.sh`
- `bin/console cache:clear`

### Theme Export and Verification

Last but not least, you can build an exportable zip archive file to upload into a shop backend or Shopware's plugin marketplace.

There is an optional Shopware CLI that is not included in Dockware. You can get it from 
[sw-cli.fos.gg](https://sw-cli.fos.gg) and use the `extension` command to build a theme file:

- `shopware-cli extension zip MyTheme`

## Shopware 6 Deprecations

- since 6.5 there is no `psh.phar` anymore. You can find the replacements in the bin folder just `./bin/watch-administration.sh` and so on (source: shyim in Shopware Slack)
- see my subjective selective changelog post [Shopware changes since the 6.0 dev training videos](https://dev.to/ingosteinke/shopware-changes-since-the-60-dev-training-videos-481o) for more changes since 6.0/6.1
