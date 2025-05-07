<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Post</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2 class="mb-4">Crear Nuevo Post</h2>
  <form action="save_post.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="title" class="form-label">Titular Del Nuevo Post</label>
      <input type="text" name="title" id="title" class="form-control" required>
    </div>
    <div class="mb-3">
      <label for="content" class="form-label">Contenidos Del Post</label>
      <textarea name="content" id="content" class="form-control" rows="5" required></textarea>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Imagen Relacionada</label>
      <input type="file" name="image" id="image" class="form-control" accept="image/*" title="Haz clic aquí para seleccionar una imagen">
      <div class="form-text">Haz clic en el botón "seleccionar Archivo" para seleccionar una imagen de tu computadora</div>
    </div>
    <button type="submit" class="btn btn-success">Guardar Post</button>
    <a href="index.html" class="btn btn-secondary">Volver al Inicio</a>
  </form>
</div>
</body>
</html>
