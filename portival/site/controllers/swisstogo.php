<?php
return function($site, $pages, $page) {
  $alert = null;
  if(get('submit')) {
    $data = array(
      'company'  => get('company'),
      'name'  => get('name'),
      'firstname'  => get('firstname'),
      'position'  => get('position'),
      'uid'  => get('uid'),
      'email' => get('email'),
      'webshop'  => get('webshop')
    );
    $rules = array(
      'company'  => array('required'),
      'name'  => array('required'),
      'firstname'  => array('required'),
      'position'  => array('required'),
      'uid'  => array('required'),
      'email'  => array('required', 'email'),
      'webshop' => array('required')
    );
    $messages = array(
      'company'  => 'Please enter...1',
      'name'  => 'Please enter...2',
      'firstname'  => 'Please enter...3',
      'position'  => 'Please enter...4',
      'uid'  => 'Please enter...5',
      'email' => 'Please enter...6',
      'webshop'  => 'Please enter...7'
    );
    // some of the data is invalid
    if($invalid = invalid($data, $rules, $messages)) {
      $alert = $invalid;
    // the data is fine, let's send the email
    } else {
      // create the body from a simple snippet
      $body  = snippet('contactmail', $data, true);
      // build the email
      $email = email(array(
        'to'      => 'fleix@gmx.ch',
        'from'    => 'welcome@woodandluxury.swiss',
        'subject' => 'Antrag Händleraccount von Swiss-To-Go.ch',
        'replyTo' => $data['email'],
        'body'    => $body
      ));
      // try to send it and redirect to the
      // thank you page if it worked
      if($email->send()) {
        go('/thank-you-reseller'); 
      // add the error to the alert list if it failed
      } else {
        $alert = array($email->error());
      }
    }
  }
  return compact('alert');
};

