<?php

// URL de la API (cambiar por la URL de tu servidor)
$api_url = "http://127.0.0.1:8000//api/posts";

// Inicializar cURL
$ch = curl_init();

// Configurar cURL para realizar la solicitud GET
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

// Ejecutar la solicitud cURL
$response = curl_exec($ch);

// Verificar si hubo algún error en la solicitud
if(curl_errno($ch)) {
    echo 'Error en cURL: ' . curl_error($ch);
}

// Cerrar la conexión cURL
curl_close($ch);

// Decodificar la respuesta JSON a un arreglo asociativo de PHP
$data = json_decode($response, true);

// Verificar si la respuesta contiene datos
if (isset($data['data']) && is_array($data['data'])) {
    // Mostrar los posts en una tabla HTML
    echo "<h1>Entradas del Blog</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 100%;'>";
    echo "<thead><tr><th>ID</th><th>Título</th><th>Tipo</th><th>Slug</th><th>Acción</th></tr></thead>";
    echo "<tbody>";

    // Recorrer los posts y mostrarlos en filas de la tabla
    foreach ($data['data'] as $post) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($post['id']) . "</td>";
        echo "<td>" . htmlspecialchars($post['title']) . "</td>";
        echo "<td>" . htmlspecialchars($post['type']) . "</td>";
        echo "<td>" . htmlspecialchars($post['slug']) . "</td>";
        echo "<td><a href='/posts/" . urlencode($post['slug']) . "'>Ver</a></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>No se encontraron entradas o hubo un error en la solicitud.</p>";
}
?>
