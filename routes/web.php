<?php

use Illuminate\Support\Facades\Route;
use App\Models\Tableactivo; // Importa el modelo Tableactivo con el namespace correcto
use Dompdf\Dompdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::resource('tableactivos', App\Http\Controllers\TableactivoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Nueva ruta para generar el PDF
Route::get('/generate-pdf', function () {
    // Lógica para obtener los datos de la tabla (similar a la que usas en la vista index.blade.php)
    $tableactivos = Tableactivo::all();

    // Generar el contenido HTML del PDF usando una vista
    $pdfContent = view('tableactivo.pdf', compact('tableactivos'));

    // Crear una nueva instancia de Dompdf
    $dompdf = new Dompdf();

    // Cargar el contenido HTML al Dompdf
    $dompdf->loadHtml($pdfContent);

    // (Opcional) Puedes personalizar la apariencia del PDF ajustando el tamaño del papel, etc.
    $dompdf->setPaper('A4', 'landscape');

    // Renderizar el PDF
    $dompdf->render();

    // Descargar el PDF con un nombre específico
    return $dompdf->stream('tableactivos.pdf');
});
