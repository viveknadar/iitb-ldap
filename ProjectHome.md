## What the eff is iitb-ldap? ##
iitb-ldap is a ldap wrapper class for performing actions like **search**, **authentication** and **fetching** details from the ldap directory tree (of the ldap directory if IIT Bombay). Right now, this is still in the beginning stage and only few functions are available. Authentication and better search will be added subsequently.

### Usage ###

To use this class, simple include the file `class.ldap.php`


---

example code:

```
<?php
require('class.ldap.php');
$user = new ldap;
$user->username = 'epraveen'; // set the username here. Probably using a $_GET['username']
echo $user->name(); // prints the full name of the user
echo $user->roll(); // prints the roll number
echo $user->email(); // prints the email
echo $user->surname(); // prints the surname
```


---

### Demo ###
The DEMO implementation can be found at ~~http://home.iitb.ac.in/~epraveen/labs/ldap/~~

### NOTE ###
This is still under development.