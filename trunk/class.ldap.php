<?php

/**
 * The ldap class for easier ldap access
 * @author praveen <apnerve@gmail.com>
 */

class ldap {
  private $server = 'ldap.iitb.ac.in';
  private $base_dn = 'dc=iitb,dc=ac,dc=in';
  public $username;
  public $password;
  public $searchKey;

  function __construct() {

  }

  function name() {

  }

  function surname() {
    
  }

  function roll() {

  }

  function email() {

  }
  
  function dept() {
  
  }
  
  function year() {
    
  }
  
  function degree() {
    
  }
  
  function homepage() {
    
  }
  
  private function hasHomepage() {
    
  }
  
  private function resultEntry() {
    
  }
  
  function __destruct() {
    ldap_close();
  }

}
