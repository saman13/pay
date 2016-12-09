# digital football club

Web application for DiGiFC.

## Installation

###composer config

1- composer global require "fxp/composer-asset-plugin:~1.1.1"

2- composer install

### Configuration

Copy `config/db-sample.php` to `config/db.php` and apply database configuration.

Copy `config/params-sample.php` to `config/params.php` and apply database configuration.


### Database Migration

Run this command for creating needed table and creating index for each table.
```bash
php yii migrate
```

Add superuser
```bash
php yii user/create [username] [password] [email]
```

### Permissions
This path should have read and write permission
```bash
web/assets
runtime
web/upload

```