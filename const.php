<?php
if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['categorias']) && !empty($_POST['categorias'])) {
    // Definir la constante API_URL en función de la categoría seleccionada
    $category = $_POST['categorias'];
    define('API_URL', "https://potterapi-fedeperin.vercel.app/es/$category"); // Definir API_URL con la categoría seleccionada
    var_dump(API_URL);
} else {
    // Si no se ha enviado un formulario, usa un valor predeterminado
    define('API_URL', 'https://potterapi-fedeperin.vercel.app/es/characters');
}
