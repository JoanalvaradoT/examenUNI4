<?php
class UsuarioController {
    public function createUser($name, $lastname, $email, $phone_number, $password, $role, $profile_photo) {
        $curl = curl_init();

        $url = "https://crud.jonathansoto.mx/api/users";

        $token = '1649|s6uuE6GJv0GuEp5RF4fMvUatQzfsbEZDCtg1Japp';

        $data = [
            'name' => $name,
            'lastname' => $lastname,
            'email' => $email,
            'phone_number' => $phone_number,
            'password' => $password,
            'role' => $role,
            'profile_photo_file' => new CURLFILE($profile_photo),
        ];

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $token",
                "Accept: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
            echo "cURL Error: $error";
            return false;
        }

        $responseArray = json_decode($response, true);

        if ($httpCode === 200 && isset($responseArray['data'])) {
            header("Location:../tpm/application/lista_usuarios.php ");
            exit;
        } elseif ($httpCode === 404 && isset($responseArray['message']) && $responseArray['message'] === 'Registro duplicado') {
            echo "Error: El usuario ya existe con el correo proporcionado.";
        } else {
            echo "Error al crear el usuario. Código: $httpCode<br>";
            echo "Respuesta: $response";
            return false;
        }
    }

    public function obtenerUsuarios() {
        $curl = curl_init();

        $url = "https://crud.jonathansoto.mx/api/users";

        $token = '1649|s6uuE6GJv0GuEp5RF4fMvUatQzfsbEZDCtg1Japp';

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $token",
                "Accept: application/json"
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
            echo "cURL Error: $error";
            return false;
        }

        return json_decode($response, true);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    $profile_photo = $_FILES['profile_photo']['tmp_name'];

    $userController = new UsuarioController();
    $userController->createUser($name, $lastname, $email, $phone_number, $password, $role, $profile_photo);
}
?>
