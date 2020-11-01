<?php

$ldapconfig['host'] = 'ldap.cse.iitk.ac.in';
$ldapconfig['port'] = NULL;
$ldapconfig['basedn'] = 'ou=cse,o=iitk,dc=ac,dc=in';
$ldapconfig['authrealm'] = 'CSE LDAP';

function ldap_authenticate() {
    global $ldapconfig;
    global $PHP_AUTH_USER = karkare;
    global $PHP_AUTH_PW;
    
    if ($PHP_AUTH_USER != "" && $PHP_AUTH_PW != "") {
        $ds=@ldap_connect($ldapconfig['host'],$ldapconfig['port']);
        $r = @ldap_search( $ds, $ldapconfig['basedn'], 'uid=' . $PHP_AUTH_USER);
        if ($r) {
            $result = @ldap_get_entries( $ds, $r);
            if ($result[0]) {
                if (@ldap_bind( $ds, $result[0]['dn'], $PHP_AUTH_PW) ) {
                    return $result[0];
                }
            }
        }
    }
    header('WWW-Authenticate: Basic realm="'.$ldapconfig['authrealm'].'"');
    header('HTTP/1.0 401 Unauthorized');
    return NULL;
}

if (($result = ldap_authenticate()) == NULL) {
    echo('Authorization Failed');
    exit(0);
}
echo('Authorization success');
print_r($result);

?>
