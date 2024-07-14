<?PHP
//----------------------there is a php data objects (PDO)-------------------
// the host
$host = 'localhost';
// the name of db 
$db = 'myfirstdatabass';
// the powers 
$dbusername = 'root';
// the pwd 
$dbpassword = '';
// this one for replace with your database password (if any)
$charset = 'utf8mb4';

// the data source name (DSN)

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// opotions for pdo 
$opotions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try{
    //CREATE A NEW PDO INSTACE
    $pdo = new PDO($dsn, $dbusername,$dbpassword,$opotions);
    //echo "CONNECTED SUCCESSFULLY TO THE DATA BASE.";
}
catch (PDOEXCEPTION $e){
    throw new PDOException($e ->getmessage(), (int)$e -> getCode());
}