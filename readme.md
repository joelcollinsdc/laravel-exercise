## Example laravel app

* user registration is disabled, a single admin user is created with u/padmin@example.com/example

## Issues

* Having issues with sessions on my dev environment... couldn't get things like csrf token to validate.  Temporarily disabled to work around this.
* Image / Media field requirement: I missed the boat on this and basically just added an image field to the petition table.  It's clearly an underwhelming approach but I wanted to demonstrate at least basic file handling.

## Further work needed

There are a lot of thigns that wouldn't be aceeptable for a production application

* mail queueing
* admin section pagination, search, etc
* preventing multiple signatures / spam prevention
* admin user registration