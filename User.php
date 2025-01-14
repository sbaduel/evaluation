<?php
 
class User
{
    private $login;
    private $password;
	private $mail;
	private $dateCreation;
 
    public function __construct($login, $password, $mail, $dateCreation)
    {
        $this->login = $login;
        $this->password = $password;
        $this->mail = $mail;
        $this->dateCreation = $dateCreation;
    }
 
    public function setLogin($login)
    {
        $this->login = $login;
    }
	
	public function getLogin()
    {
        return $this->login;
    }
	
    public function setPassword($password)
    {
        $this->password = $password;
    }
	
	public function getPassword()
    {
        return $this->password;
    }

    public function setMail($mail)
    {
        $this->mail = $mail;
    }
	
	public function getMail()
    {
        return $this->mail;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }
	
	public function getDateCreation()
    {
        return $this->dateCreation;
    }

	public function __toString()
    {
        try 
        {
            return $this->login." (".$this->mail.") créé le ".$this->dateCreation;
        } 
        catch (Exception $exception) 
        {
            return '';
        }
    }
}
?>