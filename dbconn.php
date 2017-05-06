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
}

$objIS = new InfoSystem('localhost','domestic_usrvat', '5y5t3m45', 'domestic_vat');
$objIS->getConn();
$objIS->setMessage('mensaje desde oop y con un constructor');


        
?>
