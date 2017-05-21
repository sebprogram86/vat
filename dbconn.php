<?php 
class InfoSystem
{
    //private bConnection = null;
    private $srv = null;
    private $usr = null;
    private $pwd = null;
    private $db = null;
    function __construct($strSrv, $strUsr, $strPwd, $strDb)
    {
        $this->srv = $strSrv;
        $this->usr = $strUsr;
        $this->pwd = $strPwd;
        $this->db = $strDb;
    }

    function __construct()
    {
        $this->srv = 'localhost';
        $this->usr = 'domestic_usrvat';
        $this->pwd = '5y5t3m45';
        $this->db = 'domestic_vat';
    }
   public function getConn()
   {
       $bConnection = new mysqli($this->srv, $this->usr ,  $this->pwd, $this->db);
		if ($bConnection->connect_errno) 
		{
			echo 'NOK: (Error: '.$mysqli->connect_errno.') '.$mysqli->connect_error;
		
		}
		else
		{
			echo 'OK '.$mysqli->host_info.'\n';
			
		}
        return $bConnection;
   }
   public function setMessage($strText)
   {
       echo ('<br> '.$strText);
   }

   public function setCatPersons($txtAddress,$txtCity,$txtFirstName,$txtLastName,$iPersonId){
    $resp="respuesta desde la BD estos son los datos".$txtAddress.",".$txtCity.",".$txtFirstName.",".$txtLastName.",".$iPersonId;
    return $resp;


   }
}
/*$objIS = new InfoSystem(,, , );
$objIS->getConn();
$objIS->setMessage('Hola soy Sebastián');*/
        
?>
