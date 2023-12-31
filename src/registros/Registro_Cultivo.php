<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Nuevo Cultivo</title>
    <link
      rel="stylesheet" href="../assets/css/modulos.css" type="text/css"
    />
</head>
<body class="cultivo">
    <header class="headerinicio">
        <div>
            <img class="logo" src="../assets/img/SRA-logo.png">
            <nav>
                <ul>
                    <li>
                        <a href="../../Menu_Sistema_Riego.php">
                            <img class="iniciologo" src="../assets/img/logos/inicio.png"/>
                        </a>
                        <a>Inicio</a>
                      </li>
                      <li>
                        <a href="../../Menu_Sistema_Riego.php">
                            <img class="cerrarlogo" src="../assets/img/logos/cerrar.png">
                        </a>
                        <a>Cerrar</a>
                      </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <div class="contregicultivo">
        <div class="regiscultivo">
            <div class="imagen">
                <img src="../assets/img/SRA-logo.png" alt="" />
            </div>
            <h3>Ingresar Datos</h3>
            <form action="#" method="post">
            
                    <label for="nombre">Nombre del Cultivo:</label>
                    <input class="nombrec" type="text" id="nombre" name="nombre" required>
         
                
                    <label for="tipoRiego">Tipo de Riego:</label>
                    <select class="selectc" id="tipoRiego" name="tipoRiego">
                        <option value="riego1">Riego 1</option>
                        <option value="riego2">Riego 2</option>
                        <option value="riego3">Riego 3</option>
                    </select>
            
        
                    <label for="fechaInicio">Fecha de Inicio:</label>
                    <input class="fechac" type="date" id="fechaInicio" name="fechaInicio" required>
          
           
                    <label for="fechaFin">Fecha de Estimada de Fin:</label>
                    <input class="fechac" type="date" id="fechaFin" name="fechaFin" required>
          
              
                    <label for="tipo">Tipo:</label>
                    <input class="tipoc" type="text" id="tipo" name="tipo" required>
                
                <input class="enviar" type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>