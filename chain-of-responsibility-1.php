<?php declare(strict_types=1);

use Delvesoft\Auth\Handler\Exception\AuthenticationFailedException;
use Delvesoft\Auth\Handler\LdapHandler;
use Delvesoft\Auth\Handler\OtherHandler;
use Delvesoft\Auth\ValueObject\Login;
use Delvesoft\Auth\ValueObject\PlainTextPassword;
use Delvesoft\Auth\ValueObject\Url;

require 'vendor/autoload.php';

$ldapHost = 'https://test.ldap.com';

$positiveLdapHandler = new LdapHandler(
    Url::createFromString($ldapHost),
    true
);
$negativeLdapHandler = new LdapHandler(
    Url::createFromString($ldapHost),
    false
);

$positiveHandler = new OtherHandler(true);
$negativeHandler = new OtherHandler(false);

$login    = Login::createFromString('testLogin');
$password = PlainTextPassword::createFromString('123456');
//@todo use case 1
echo 'UC 1:', "\n";
try {
    $positiveLdapHandler->authenticate($login, $password);
    echo "Authentication successful via LDAP\n";
} catch (AuthenticationFailedException $e) {
    echo "Auth failed\n";
}
try {
    $negativeHandler->authenticate($login, $password);
    echo "Authentication successful via Other handler\n";
} catch (AuthenticationFailedException $e) {
    echo "Auth failed\n";
}
echo "--------------------\n";

echo 'UC 2:', "\n";
try {
    $negativeLdapHandler->authenticate($login, $password);
    echo "Authentication successful via LDAP\n";
} catch (AuthenticationFailedException $e) {
    echo "Auth failed\n";
}
try {
    $positiveHandler->authenticate($login, $password);
    echo "Authentication successful via Other handler\n";
} catch (AuthenticationFailedException $e) {
    echo "Auth failed\n";
}
echo "--------------------\n";

echo 'UC 3:', "\n";
try {
    $negativeLdapHandler->authenticate($login, $password);
    echo "Authentication successful via LDAP\n";
} catch (AuthenticationFailedException $e) {
    echo "Auth failed\n";
}
try {
    $negativeHandler->authenticate($login, $password);
    echo "Authentication successful via Other handler\n";
} catch (AuthenticationFailedException $e) {
    echo "Auth failed\n";
}
echo "--------------------\n";
