<?php

/**
 * dmProfile module configuration.
 *
 * @package    diem
 * @subpackage dmProfile
 * @author     Your name here
 * @version    SVN: $Id: form.php 12474 2008-10-31 10:41:27Z fabien $
 */
class DmProfileAdminForm extends BaseDmProfileForm
{

  public function configure()
  {
    $this->embedForm('User', $this->getUserForm($this->getObject()->User));
  }
  
  protected function getUserForm(sfGuardUser $user)
  {
    $userForm = new BasesfGuardUserAdminForm($user);
    
    $userForm->useFields(array('username', 'email', 'password', 'password_again', 'is_active'));
    
    return $userForm;
  }

}