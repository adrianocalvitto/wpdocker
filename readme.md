# WpDocker

## What's Inside

This project is based on [docker-compose](https://docs.docker.com/compose/).
By default, the following containers are started: PHP-FPM, MySQL, nginx and WebGrind.
The `/app` directory is the html root which is mapped to the nginx container.

PHP and nginx configuration files can be edited directly in the repo as they
are mapped to correct locations within containers.

## Requirements

* [Docker](https://www.docker.com/)
* [docker-compose](https://docs.docker.com/compose/)

## Setup

1. `git clone https://github.com/adrianocalvitto/wp-docker.git <my-project-name>`
2. `cd <my-project-name>`
3. `docker-compose up -d`
4. Run setup to download WordPress and create a `wp-config.php` file.
	1. On Linux / Unix / OSX, run `sh bin/setup.sh`.
	2. On Windows, run `./bin/setup`.
5. Navigate to `http://localhost` in a browser to finish WordPress setup.

Default MySQL connection information can be found in `development.env`.

## WP-CLI

Add this alias to `~/.bash_profile` to easily run WP-CLI command.

```
alias wpdwp='docker-compose exec --user www-data phpfpm wp'
```

Instead of running `wp plugin install`, run `wpdwp plugin install` from anywhere inside the `<my-project-name>` directory.

There is also a script in the `/bin` directory that will allow you to execute WP CLI from the project directory directly: `./bin/wp plugin install`.

## SSH Access

You can easily access the WordPress/PHP container with `docker-compose exec`. 
Here's a simple alias to add to your `~/.bash_profile`:

```
alias wpdwp='docker-compose exec --user root phpfpm bash'
```

This alias lets you run `wpdwp` to SSH into the PHP/WordPress container.

Alternatively, there is a script in the `/bin` directory that allows you to SSH in to the environment from the project directory directly: `./bin/ssh`.

## Profiling

Profiles can be collected using [Xdebug](https://xdebug.org), allowing developers to find bottlenecks in PHP scripts and visualize those via [WebGrind](https://github.com/jokkedk/webgrind).

To start collecting profiles:

1. Hit the page to be profiled adding `XDEBUG_PROFILE` as a query param (E.g. `https://localhost?XDEBUG_PROFILE`)
2. Open `http://localhost:8080` in a new tab or window to use WebGrind.

## Credits

This project is based on the inspiring work by [10up](https://github.com/10up/)
