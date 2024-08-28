@extends('layouts.auth')

@section('content')
<title>Términos y Condiciones de Uso de Plataforma PVM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }
        ul {
            margin-bottom: 10px;
        }
        ul li {
            margin-bottom: 5px;
        }
    </style>
</head>


<form action="{{ route('terms-of-service') }}" method="POST" autocomplete="off">
    @csrf

    <body>
    <div class="container">
        <h1>TÉRMINOS Y CONDICIONES DE USO DE PLATAFORMA PVM</h1>
        <p><strong>(Provent Manager)</strong></p>
        
        <h2>1. Definiciones</h2>
        <p>Para facilitar la comprensión de estos términos y condiciones de uso de la plataforma PVM, se
        hace necesario aclarar el significado de las siguientes palabras:</p>
        <ul>
            <li><strong>Contenidos:</strong> Implican todas las formas de información o datos que se divulgan en la página
            web, entre los que se encuentran: textos, imágenes, fotos, logos, diseños, animaciones.</li>
            <li><strong>Derechos de Propiedad Intelectual:</strong> Hacen referencia a todos los derechos de propiedad
            de la información de la plataforma PVM o de cualquier persona que sea titular legítima,
            como: signos distintivos, marcas, lemas, enseñas, logos, nombres de dominio, derechos de
            autor, bases de datos, diseños, contenidos o cualquier otra obra o creación intelectual
            vinculada con el objeto, operación o desempeño de la plataforma PM.</li>
            <li><strong>Usuario:</strong> Es la persona que se registra en la plataforma PM para buscar o consultar
            información sobre inventarios y comprobantes de venta, gestionar su perfil, o para enviar
            una queja o sugerencia mediante el sistema de retroalimentación creado para este
            propósito.</li>
        </ul>
        
        <h2>2. Aceptación de términos</h2>
        <p>Se presume que cuando un usuario accede a la plataforma PM lo hace bajo su total
        responsabilidad y que, por tanto, acepta plenamente y sin reservas el contenido de los términos y
        condiciones de uso de la plataforma web. La plataforma PM se reserva el derecho de actualizar y
        modificar en cualquier momento y de cualquier forma, de manera unilateral y sin previo aviso, las
        presentes condiciones de uso y los contenidos de la plataforma.</p>
        
        <h2>3. Contenidos de la plataforma web</h2>
        <p>La plataforma web tiene como objetivo proporcionar información de manera oportuna, confiable
        y permanente relacionada con la gestión de inventarios y comprobantes de venta. A través de esta
        plataforma, los usuarios pueden acceder a funcionalidades como el registro de usuarios, clientes y
        proveedores, así como la gestión de sus datos y transacciones.</p>
        
        <h2>4. Información contenida en la Página</h2>
        <p>La plataforma PVM y su contenido son de propiedad de la entidad responsable de su gestión. Está
        prohibida su reproducción total o parcial, su traducción, inclusión, transmisión, almacenamiento o
        acceso a través de medios analógicos, digitales o de cualquier otro sistema o tecnología creada, sin
        autorización previa y escrita de la entidad.</p>
        
        <h2>5. Privacidad</h2>
        <p>Es interés de la plataforma PVM la salvaguardia de la privacidad de la información personal del
        usuario obtenida a través de la plataforma web. Se entiende por información personal aquella
        suministrada por el usuario para el registro, la cual incluye datos como nombre, identificación,
        edad, género, dirección, correo electrónico y teléfono. El usuario reconoce que el ingreso de
        información personal lo realiza de manera voluntaria y ante la solicitud de requerimientos
        específicos por la plataforma PVM.</p>
        
        <h2>6. Ley aplicable y jurisdicción</h2>
        <p>Estas condiciones serán gobernadas por las leyes de la República de Colombia. Para cualquier
        controversia que surja de su interpretación o aplicación, se someterá a los jueces de la República
        de Colombia.</p>
        
        <h2>7. Contáctenos</h2>
        <p>Si el usuario desea hacer sugerencias para mejorar los contenidos, la información y los servicios
        que ofrece en su plataforma web, puede escribir al siguiente correo electrónico:
            <a href="mailto:proventmanager99@gmail.com?subject=Consulta%20sobre%20PVM&body=Hola%2C%20tengo%20una%20consulta%20sobre%20la%20plataforma%20PVM.">proventmanager99@gmail.com</a>. Este texto modificado refleja un enfoque en la gestión de
        inventarios y comprobantes de venta, así como en el registro de usuarios, clientes y proveedores.</p>
    </div>
</body> 

    
</form>


@endsection
