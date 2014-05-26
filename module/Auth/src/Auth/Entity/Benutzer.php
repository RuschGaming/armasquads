<?php
namespace Auth\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benutzer
 * 
 * @ORM\Entity
 * @ORM\Table(name="BEN_Benutzer_91C48C")
 * @ORM\Entity(repositoryClass="Auth\Repository\Benutzer")
 */
class Benutzer {
	
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer", name="BEN_ID")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="integer", name="GRU_ID") 
	 */
	protected $gruppenID;
	
	/**
	 * @ORM\OneToOne(targetEntity="Role")
	 * @ORM\JoinColumn(name="GRU_ID", referencedColumnName="GRU_ID")
	 */
	protected $gruppe;

	/**
	 * @ORM\Column(type="string", name="BEN_Username")
	 */
	protected $username;

    /**
     * @ORM\Column(type="string", name="BEN_Password")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", name="BEN_Email")
     */
    protected $email;

    /**
	 * @ORM\Column(type="boolean", name="BEN_Disabled")
	 */
	protected $disabled;

    /**
     * @ORM\Column(type="string", name="BEN_LastLogin")
     */
    protected $lastLogin;

    /**
     * @ORM\Column(type="string", name="BEN_Register")
     */
    protected $registerDate;
	
	/**
	 * holds if the user is logged in
	 * @var bool
	 */
	protected $loggedIn = false;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Liefert den Letzten Login als DateTime
     * @return \DateTime
     */
    public function getLastLogin(){
        return new \DateTime( $this->lastLogin );
    }

    public function setLastLogin($lastLogin){
        $this->lastLogin = $lastLogin;
    }

    public function setRegisterDate($registerDate){
        $this->registerDate = $registerDate;
    }

    /**
     * Liefert das Reg Date
     * @return \DateTime
     */
    public function getRegisterDate(){
        return new \DateTime( $this->registerDate );
    }

    /**
     * @param mixed $disabled
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;
    }

    /**
     * @return mixed
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * @param mixed $gruppe
     */
    public function setGruppe($gruppe)
    {
        $this->gruppe = $gruppe;
    }

    /**
     * @return mixed
     */
    public function getGruppe()
    {
        return $this->gruppe;
    }

    /**
     * @param mixed $gruppenID
     */
    public function setGruppenID($gruppenID)
    {
        $this->gruppenID = $gruppenID;
    }

    /**
     * @return mixed
     */
    public function getGruppenID()
    {
        return $this->gruppenID;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $loggedIn
     */
    public function setLoggedIn($loggedIn)
    {
        $this->loggedIn = $loggedIn;
    }

    /**
     * @return mixed
     */
    public function getLoggedIn()
    {
        return $this->loggedIn;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
}