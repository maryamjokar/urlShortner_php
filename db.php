<?php
    // class Database{
    //     private $host;
    //     private $dbname;
    //     private $user;
    //     private $pass;

    
    //     function __construct(string $host, string $dbname, string $user, string $pass){
    //         $this->host =$host;
    //         $this->dbname =$dbname;
    //         $this->user =$user;
    //         $this->pass =$pass;
    //     }

    //     public function connect(){
    //         $conn_str = "mysql:host". $this->host .":dbname".$this->dbname ;
        
    //         try{
    //             $conn =new PDO($conn_str,$this->user,$this->pass);
    //             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
    //             //echo "connected successfuly";
    //             return $conn;

    //         }catch (\Throwable $e){
    //                 echo "connection failed " . $e->getMessage();
    //         }
        
    //     }
    
        
    // }



$server ='localhost';
$UserName ='root';
$Password ='';
$database ='url_short';

try{
    $conn = new PDO ("mysql:host=$server;dbname=$database;",$UserName,$Password);

} catch(PDOException $e){
    die( "Connection failed:". $e->getMessage());

}







?>