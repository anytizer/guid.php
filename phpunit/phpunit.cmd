@ECHO OFF
REM IF NOT EXIST phpunit.phar curl -L -o phpunit.phar https://phar.phpunit.de/phpunit.phar
REM @php ".\phpunit.phar" --bootsrap phpunit/bootstrap.php --c phpunit/phpunit.xml
REM @php ".\phpunit.phar"

phpunit
CALL MORE logs\testdox.txt
