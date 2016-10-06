## Anchor CMS

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6d47b69c-c54b-4875-8d88-4cec20ff676c/mini.png)](https://insight.sensiolabs.com/projects/6d47b69c-c54b-4875-8d88-4cec20ff676c) [![Latest Stable Version](https://poser.pugx.org/anchorcms/anchor-cms/v/stable)](https://packagist.org/packages/anchorcms/anchor-cms)

Anchor is a super-simple, lightweight blog system, made to let you just write. [Check out the site](http://anchorcms.com/).

### Requirements

- PHP 7
- A Database (Sqlite/MySQL/PostgreSQL)

### Install

    composer create-project anchorcms/anchor-cms anchor

### Updating

    composer update

### Testing

    php composer.phar update --dev
    php vendor/bin/phpspec run

### Development notes

**Todo list**
- Should anchor's core plugins be unremovable, or maybe just marked as core?
- Should there be a special plugin middleware to parse the body? Think translators etc.
- Should we use shortcodes like WP does to introduce custom plugin elements (like contact forms, videos etc.)
