<?php

App::uses('AppModel', 'Model');

class User extends AppModel {
  public $validate = array(
    'username' => array(
      'required' => array( 
        'rule' => 'notEmpty',
        'message' => 'A username is required'
      ) 
      'alphaNumeric' => array(
        'rule' => 'alphaNumeric'
        'message' => 'Username must contain letters or numbers only'
      )
    ),
    'password' => array(
      'required' => array(
        'rule' => 'notEmpty',
        'message' => 'A password is required'
      )
      'length' => array(
        'rule' => array('lengthBetween', 8, 20),
        'message' => 'Password must be between 8 and 20 characters'
      )
    ),
    'email' => array(
      'required' => array(
        'rule' => 'notEmpty',
        'message' => 'An email address is required'
      )
      'valid' => array(
        'rule' => email,
        'message' => 'Please enter a valid email address'
      )
    )
    'role' => array(
      'valid' => array(
        'rule' => array('inList', array('admin', 'author')),
        'message' => 'Please enter a valid role',
        'allowEmpty' => false
      )
    )
  );
}