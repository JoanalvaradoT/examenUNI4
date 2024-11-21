<?php
class CategoriaController
{
    private $apiUrl = "https://crud.jonathansoto.mx/api/categories";
    private $token = '1921|Wq3Ktb3l4iz1ZPCLjuZ5ufzcpek6h5F7IMoX6fxN';

    public function obtenerCategorias()
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$this->token}",
                "Accept: application/json",
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }

    public function crearCategoria($data)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$this->token}",
                "Accept: application/json",
                "Content-Type: application/x-www-form-urlencoded",
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        if (curl_errno($curl)) {
            echo 'Error de cURL: ' . curl_error($curl);
            curl_close($curl);
            return false;
        }
        
        curl_close($curl);
        
        // Verifica la respuesta del servidor
        echo '<pre>';
        print_r($response);
        echo '</pre>';
        
        return $response ? json_decode($response, true) : false;

    }
    public function eliminarCategoria($id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => "{$this->apiUrl}/{$id}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer {$this->token}",
                "Accept: application/json",
            ],
        ]);
        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }

    
}
?>
