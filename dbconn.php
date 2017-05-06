<?php 

class InfoSystem
{
    //private bConnection = null;

   public function getConn()
   {
       $bConnection = new mysqli('localhost', 'domestic_usrvat', '5y5t3m45', 'domestic_vat');
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

$objIS = new InfoSystem();
$objIS->getConn();
$objIS->setMessage('mensaje desde oop');


        
?>
