# About
This example WP-CLI package supports my presentation,
[Modernizing Your Development Workflow Using Composer](https://2018.minneapolis.wordcamp.org/session/modernizing-your-development-workflow-using-composer/),
which will be presented at WordCamp Minneapolis-St. Paul on Saturday,
August 25, 2018.

## Installation
Assuming you already have WP-CLI installed, you should be able to
install this package by running the following command:
`wp package install https://github.com/jmichaelward/wcmsp-wpcli-package.git`

If successful, you should be able to run `wp` from the command line and
see the `wcmsp` command listed in the output.

## Troubleshooting
WP-CLI occasionally runs out of memory when trying to install custom
packages. The easiest way to resolve this issue is by increasing the
amount of memory available in your php.ini file. You can find documentation
on how to do that
[here](https://make.wordpress.org/cli/handbook/common-issues/#php-fatal-error-allowed-memory-size-of-999999-bytes-exhausted-tried-to-allocate-99-bytes).
