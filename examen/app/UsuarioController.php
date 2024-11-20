<?php
class UsuarioController
{
    private $apiUrl = "https://crud.jonathansoto.mx/api/users";
    private $token = '1649|s6uuE6GJv0GuEp5RF4fMvUatQzfsbEZDCtg1Japp';

    public function createUser($name, $lastname, $email, $phone_number, $password, $role, $profile_photo)
    {
        $curl = curl_init();

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
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
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
            header("Location:../tpm/application/lista_usuarios.php");
            exit;
        } elseif ($httpCode === 404 && isset($responseArray['message']) && $responseArray['message'] === 'Registro duplicado') {
            echo "Error: El usuario ya existe con el correo proporcionado.";
        } else {
            echo "Error al crear el usuario. Código: $httpCode<br>";
            echo "Respuesta: $response";
            return false;
        }
    }

    public function obtenerUsuarios()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
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

    public function obtenerDetalleUsuario($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl . '/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
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

        if ($httpCode === 200) {
            return json_decode($response, true);
        } else {
            echo "Error al obtener detalles del usuario. Código: $httpCode<br>";
            echo "Respuesta: $response";
            return false;
        }
    }

    public function eliminarUsuario($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl . '/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
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

        return $httpCode === 200;
    }
}

if (isset($_GET['action'])) {
    $usuarioController = new UsuarioController();

    switch ($_GET['action']) {
        case 'delete':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                if ($usuarioController->eliminarUsuario($id)) {
                    header("Location: ../tpm/application/lista_usuarios.php");
                } else {
                    echo "Error al eliminar el usuario.";
                }
            } else {
                echo "ID del usuario no especificado.";
            }
            break;

        default:
            echo "Acción no válida.";
            break;
    }
    
}?>