<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Envío de email con información importante	
        
        
        $nom = 'Nombre';
        $diaDado = '06/07/2023';
        $horaDada = '17:45';
        $cl = "12454291";
					
					$de = "isft38@cfg.com.ar";
					$a = 'franco_33.33@hotmail.com';
					$asunto = "Comprobante de turno para inscripción - ISFT N°38";
					$mensajeHTML = '
            <html>
				<head>
					<title>Comprobante de turno</title>
				</head>
				<body>
					<hr>
					<p>'.$nom.':</p>
					<p>Este documento es v&aacute;lido (impreso o en formato digital) como comprobante de tu preinscripci&oacute;n en el ISFT N&ordm;38 y del turno obtenido para entregar documentaci&oacute;n en Secretar&iacute;a.</p>
					<p>Tu turno en Secretar&iacute;a (presentate en la Biblioteca del ISFT N&ordm;38) es el '.date("d/m/Y", strtotime($diaDado)).' a las '.$horaDada.'. Tu clave para operaciones es '.$cl.'.</p>
					<p>Con la clave proporcionada, podr&aacute;s acceder a la p&aacute;gina de cancelaci&oacute;n de turno en caso de ser necesario: https://www.cfg.com.ar/turnos/cancelarTurno.php.
					<p>Cuando concurr&aacute;s a tu turno, no olvid&eacute;s llevar la siguiente documentaci&oacute;n:</p>
					<p>- Original y fotocopia de Certificado de Estudio Secundario Completo (Certificado Anal&iacute;tico) o de t&iacute;tulo en tr&aacute;mite.</p>
					<p>- Certificado de finalizaci&oacute;n y materias adeudadas, expedido por la Escuela Secundaria de la que egresaste.</p>
					<p>- Original y fotocopia del DNI.</p>
					<p>- Dos fotos tamaño 4 x 4 cm.</p>
					<p>- Fotocopia de Partida de Nacimiento.</p>
					<p>- Colaboraci&oacute;n Asociaci&oacute;n Cooperadora.</p>
					<p>IMPORTANTE!!! Si quer&eacute;s agilizar el tr&aacute;mite de inscripci&oacute;n, pod&eacute;s descargar, imprimir y completar la Solicitud de Inscripción para tu carrera en la página https://www.cfg.com.ar/turnos/descargar.html.</p>
					<p>Nuevamente te damos la bienvenida y te deseamos el mayor de los &eacute;xitos!</p>
					<hr>
				</body>
			</html>
			';
					$cabeceras = "MIME-Version: 1.0" . "\r\n";
					$cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
					$cabeceras .= "From:" . $de;
					mail($a,$asunto,$mensajeHTML,$cabeceras);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Agregar mensajes de error en vista y mostrar mensaje flash        
        $validatedData = $request->validate(
            [
                'nombre' => 'required',
                'email' => 'required',
                'carrera' => 'required'
            ]
        );

        
        $nombre = $request->input('nombre');
        $email = $request->input('email');
        $carrera = $request->input('carrera');
        

        //$mail = 'franco_33.33@hotmail.com';

        $asunto    = 'Comprobante de turno para inscripci&oacute;n - ISFT N°38';
        $de   = 'isft38@cfg.com.ar';

        $headers = "";
        $headers .= "From: I.S.F.T N&ordm; 38 <" . $de . ">\r\n";
        $headers .= "Reply-To: " . $nombre . " <" . ">\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

        $de = "isft38@cfg.com.ar";
        $a = $email;
        $asunto = "Comprobante de turno para inscripci&oacute;n - ISFT N°38";
        $mensajeHTML = '
            <html>
				<head>
					<title>Comprobante de turno</title>
				</head>
				<body>
					<hr>
					<p>'.$nombre.':</p>
					<p>Has sido agregado a la lista de espera para la inscripci&oacute;n a la carrera '.$carrera.'.</p>
					<p>En el momento de habilitarse un lugar en la misma, ser&aacute;s contactado por un representante del instituto a trav&eacute;s de los medios aportados.</p>
					<hr>
					<p>De ser convocado, deber&aacute;s presentar la siguiente documentaci&oacute;n:
					<p>- Original y fotocopia de Certificado de Estudio Secundario Completo (Certificado Anal&iacute;tico) o de t&iacute;tulo en tr&aacute;mite.</p>
					<p>- Certificado de finalizaci&oacute;n y materias adeudadas, expedido por la Escuela Secundaria de la que egresaste.</p>
					<p>- Original y fotocopia del DNI.</p>
					<p>- Dos fotos tamaño 4 x 4 cm.</p>
					<p>- Fotocopia de Partida de Nacimiento.</p>
					<p>- Colaboraci&oacute;n Asociaci&oacute;n Cooperadora.</p>
					<hr>
				</body>
			</html>
			';

        $resultado = mail($email, $asunto, $mensajeHTML, $headers);

        if ($resultado == true) {
            $request->session()->flash('status', 'Mensaje enviado');
        } else {
            $request->session()->flash('status', 'Error al enviar el mensaje');
        }
        return redirect()->route('backend.formulario.show', compact('mensajeHTML'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('backend.formulario.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
