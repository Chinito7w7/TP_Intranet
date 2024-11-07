<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INTRANET DEL COLEGIO TÉCNICO No6 - CHACABUCO</title>
    <link rel="stylesheet" href="./estilos/style.css">
</head>
<body>
    <header>
        <img src="./imagenes/escuela1.png" alt="Entrada del Colegio">
    </header>
    <main>
        <h1>INTRANET DEL COLEGIO TÉCNICO No6 - CHACABUCO</h1>
        
        <div class="login-form">
            <?php
            // Incluir el archivo de conexión a la base de datos
            include './BaseDeDatos/dbCon.php';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $documentType = $_POST['documentType'];
                $documentNumber = $_POST['documentNumber'];
                $password = $_POST['password'];

                // Consulta para validar al usuario
                $sql = "SELECT * FROM usuarios WHERE documentType = ? AND documentNumber = ? AND password = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sss", $documentType, $documentNumber, $password);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    // Redirigir al usuario a la página Materia
                    header("Location: ./Paginas/Materia.php");
                    exit();
                } else {
                    echo "<p style='color:red;'>Datos incorrectos</p>";
                }

                $stmt->close();
            }

            $conn->close();
            ?>

            <form method="POST" action="index.php">
                <label for="documentType">Tipo de Documento:</label>
                <select id="documentType" name="documentType" required>
                    <option value="DNI">DNI</option>
                    <option value="LC">LC</option>
                    <option value="LE">LE</option>
                </select>

                <label for="documentNumber">Número de Documento:</label>
                <input type="text" id="documentNumber" name="documentNumber" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>

                <div class="button-container">
                    <button type="submit">Ingresar</button>
                    <button type="reset">Borrar datos</button>
                </div>
            </form>

            <a href="./Paginas/FormularioDeInscripcion.php" target="_blank">Si todavía no está registrado haga clic Aquí</a>
        </div>
    </main>

    <footer>
        <hr>
        <p>E.E.S.T N°6 CHACABUCO MORÓN (7o 4o año 202X)</p>
        <p>Proyecto de implementación de sitios web dinámicos</p>
        <p>Autores: Todos los apellidos de los alumnos del curso</p>
    </footer>
</body>
</html>
