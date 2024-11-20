<?php
class CuponesController
{
    private $apiUrl = "https://crud.jonathansoto.mx/api/coupons";
    private $token = '635|dpQ8rIYnu4zuYBZB71sBeAhBrEtTuTZe8M4SGYjQ';

    // Crear un cupón
    public function createCupon($data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $data,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
                "Accept: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }

    // Obtener todos los cupones
    public function obtenerCupones()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
                "Accept: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }

    // Obtener detalle de un cupón
    public function obtenerDetalleCupon($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl . '/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
                "Accept: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }

    // Editar un cupón
    public function editarCupon($id, $data)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
                "Content-Type: application/x-www-form-urlencoded",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }

    // Eliminar un cupón
    public function eliminarCupon($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl . '/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_HTTPHEADER => [
                "Authorization: Bearer $this->token",
                "Accept: application/json",
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        return $response ? json_decode($response, true) : false;
    }
}
?>
