<?php

require_once "validaciones.php";

function guardarUsuario($nombre, $apellido, $correo, $usuario, $password, $foto)
{
    // Validar!
    $errores = validarUsuario($nombre, $apellido, $correo, $usuario, $password);

    if (empty($errores)) {
        // No hubo errores
        $password = sha1($password);

        // Transformarlo a json
        $jsonUser = json_encode([
            'nombre'     => $nombre,
            'apellido'   => $apellido,
            'correo'     => $correo,
            'user'       => $usuario,
            'password'   => $password
        ]);

        if (escribirArchivoDeUsuario($jsonUser)) {
          subirFoto($foto);
        }

        return $resultado;

    } else {
        // Hubo errores
        return $errores;
    }
}

function escribirArchivoDeUsuario($usuarioJson)
{
  $fp = fopen("users.json", "a+");

  $resultado = fwrite($fp, $usuarioJson . PHP_EOL);

  return $resultado;
}

function validarUsuario($nombre, $apellido, $correo, $usuario, $password)
{
    $errores = [];

    if (! validarNombreOApellido($nombre, 1)) {
        $errores['nombre'] = "El nombre es invalido";
    }

    if (! validarNombreOApellido($apellido, 2)) {
        $errores['apellido'] = "El apellido no es valido";
    }

    if (! validarEmail($correo)) {
        $errores['correo'] = "El mail ingresado no es valido";
    }

    if (! validarNombreDeUsuario($usuario)) {
        $errores['username'] = "El username ingresado no es valido";
    }

    if (! validarPassword($password)) {
        $errores['contraseña'] = "El password ingresado no es valido";
    }

    return $errores;
}

function subirFoto($foto)
{
  if (count($foto)) {
      $avatarFileName = $foto['name'];
      $avatarFile = $foto['tmp_name'];
      $avatarExtension = pathinfo($avatarFileName, PATHINFO_EXTENSION);

      $resultado = move_uploaded_file($avatarFile, 'avatars/' . md5($foto['name']) . '.' . $avatarExtension);
  }

  return $resultado;
}

function buscarUsuario($username)
{
  $fp = fopen('users.json', 'r');
  while ($linea = fgets($fp)) {
    if (!empty($linea)) {
      $linea = json_decode($linea, true);
      if ($linea['user'] == $apellido) {
        return $linea;
      }
    }
  }

  return false;
}
