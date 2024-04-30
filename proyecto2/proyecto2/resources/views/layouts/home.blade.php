<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Enlace a Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</head>
<body>

    @include('layouts.navigation')

    @include('registro.contenido')

    @include('registro.footer')

    <!-- Tus scripts y otros elementos aquí -->
</body>
</html>
