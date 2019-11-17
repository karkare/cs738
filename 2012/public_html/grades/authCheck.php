<?php

$ldapconfig['host'] = 'https://ldap.cse.iitk.ac.in';
$ldapconfig['port'] = NULL;
$ldapconfig['basedn'] = 'ou=People,ou=cse,o=iitk,dc=ac,dc=in';
// $ldapconfig['authrealm'] = 'CSE LDAP';

function ldap_authenticate() {
    global $ldapconfig;
    global $PHP_AUTH_USER;
    global $PHP_AUTH_PW;
    $student = $_POST['uid'];
  $passwd = stripslashes($_POST['password']);
    
    $PHP_AUTH_USER=$student;
    $PHP_AUTH_PW=$passwd;
    echo('Trying...');
    echo (' # x1: ' . $PHP_AUTH_USER);
    echo (' # y1: ' . $PHP_AUTH_PW);
    echo (' # x2: ' . $student);
    echo (' # y2: ' . $passwd);

    if ($PHP_AUTH_USER != "" && $PHP_AUTH_PW != "") {
    echo('Connect...');
        $ds=@ldap_connect($ldapconfig['host']); //,$ldapconfig['port']);
    echo('Search...');
        $r = @ldap_search( $ds, $ldapconfig['basedn'], 'uid=' . $PHP_AUTH_USER);
        if ($r) {
    echo('Get Entry...');
            $result = @ldap_get_entries( $ds, $r);
            if ($result[0]) {
    echo('Get Bind...');
                if (@ldap_bind( $ds, $result[0]['dn'], $PHP_AUTH_PW) ) {
                    return $result[0];
                }
            }
        }
    }
    echo('BAD ONE');
    //header('WWW-Authenticate: Basic realm="'.$ldapconfig['authrealm'].'"');
    //header('HTTP/1.0 401 Unauthorized');
    return NULL;
}

if (($result = ldap_authenticate()) == NULL) {
    echo('Authorization Failed');
    exit(0);
}
echo ('Authorization success');
print_r($result);

?>
