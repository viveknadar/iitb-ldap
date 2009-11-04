<?php

/**
 * The ldap class for easier ldap access
 * @author praveen <apnerve@gmail.com>
 */

class ldap {
  private $server = 'ldap.iitb.ac.in';
  private $base_dn = 'dc=iitb,dc=ac,dc=in';
  private $ds;
  public $username;
  public $password;
  public $searchKey;

  function __construct() {
    $this->ds = ldap_connect($this->server) or die(ldap_error());
  }

  /**
   * returns the name of the ldap user
   * @return string
   */
  function name() {
    return ($this->search()) ? array_shift(ldap_get_values($this->ds,$this->search(),'cn')) : 'NOT FOUND';
  }

  /**
   * returns the surname of the ldap user
   * @return string
   */
  function surname() {
    return ($this->search()) ? array_shift(ldap_get_values($this->ds,$this->search(),'sn')) : 'NOT FOUND';  
  }

  /**
   * returns the roll number of the ldap user
   * @return string
   */
  function roll() {
    return ($this->search()) ? array_shift(ldap_get_values($this->ds,$this->search(),'employeenumber')) : 'NOT FOUND';
  }

  /**
   * returns the email of the ldap user
   * @return string
   */
  function email() {
    return ($this->search()) ? array_shift(ldap_get_values($this->ds,$this->search(),'mail')) : 'NOT FOUND';
  }
  
  function dept() {
    
  }
  
  function year() {
    
  }
  
  function degree() {
    
  }
  
  function homepage() {
    
  }
  
  function authenticate() {
    
  }
  
  private function dn() {
    return ldap_get_dn($this->ds,$this->search());
  }
  
  private function hasHomepage() {
    
  }
  
  private function search() {
    $filter = "(uid=$this->username)";
    $sr = ldap_search($this->ds,$this->base_dn,$filter,array(
      'mail',
      'cn',
      'employeenumber',
      'homedirectory',
      'sn'
      )
    );
    return ($sr) ? ldap_first_entry($this->ds,$sr) : FALSE;
  }
  
  function __destruct() {
    ldap_close($this->ds);
  }

}
