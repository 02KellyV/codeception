# Welcome to 'Cool Testing Stuff'

Hi WP! Let's edit **README files** of our github in: *https://stackedit.io*


# Testing Example

- Quick Started: 
Clone or download https://github.com/kvilla2/codeception.git

	> cd folderpath in the **Synchronize** sub-menu.

- cd you folder path
- c:\users\pathx\codeception> *composer install:*
- edit file **.env:** 

>Copy 'n paste:

    WP_ROOT_FOLDER="C:/xampp/htdocs" 
    WP_ADMIN_PATH="/wp-admin"
    DB_NAME="wordpress"
    DB_HOST="localhost"
    DB_USER="conferencia"
    DB_PASSWORD="wordpress"
    TABLE_PREFIX="wp_"
    TEST_DB_NAME="wp_test"
    TEST_DB_HOST="localhost"
    TEST_DB_USER="conferencia"
    TEST_DB_PASSWORD="wordpress"
    TEST_TABLE_PREFIX="wp_"
    WP_URL="http://localhost:8000"
    WP_DOMAIN="localhost"
    ADMIN_EMAIL="admin@wp.localhost"
    ADMIN_USERNAME="admin"
    ADMIN_PASSWORD="password" 
    
- Folders empty: *unit, wpunit* 

- **codecept run wpunit** 
c:\users\pathx\codeception> *php vendor\codeception\codeception\codecept run wpunit*

    > Codeception PHP Testing Framework v2.4.1 Powered by PHPUnit 7.1.5 by
    > Sebastian Bergmann and contributors.
    > 
    > Wpunit Tests (0) -----------------------
    > No tests executed!

- *codecept run* 
or
- *codecept run --steps* 

> OK (5 tests, 5 assertions)

- Any number of tests

