<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-light">

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-8 col-lg-7">

            <a href="<?= base_url('clientes') ?>"
               class="btn btn-outline-secondary btn-sm mb-4">

                <i class="fa-solid fa-arrow-left"></i>
                Volver

            </a>

            <div class="card border-0 shadow-sm">

                <div class="card-header bg-warning py-3">

                    <h4 class="mb-0">
                        <i class="fa-solid fa-user-pen"></i>
                        Modificar cliente
                    </h4>

                </div>

                <div class="card-body p-4">

                    <form action="<?= base_url('clientes/actualizar/'.$cliente['cliente_id']) ?>"
                          method="POST">

                        <?= csrf_field() ?>

                        <div class="mb-3">

                            <label class="form-label">Nombre</label>

                            <input type="text"
                                   name="nombre"
                                   class="form-control"
                                   value="<?= esc($cliente['nombre']) ?>"
                                   maxlength="100"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Apellido</label>

                            <input type="text"
                                   name="apellido"
                                   class="form-control"
                                   value="<?= esc($cliente['apellido']) ?>"
                                   maxlength="100"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Fecha de nacimiento</label>

                            <input type="date"
                                   name="fecha_nacimiento"
                                   class="form-control"
                                   value="<?= esc($cliente['fecha_nacimiento']) ?>"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Fecha de suscripción</label>

                            <input type="date"
                                   name="fecha_suscripcion"
                                   class="form-control"
                                   value="<?= esc($cliente['fecha_suscripcion']) ?>"
                                   required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">Correo electrónico</label>

                            <input type="email"
                                   name="correo_electronico"
                                   class="form-control"
                                   value="<?= esc($cliente['correo_electronico']) ?>"
                                   maxlength="150"
                                   required>

                        </div>

                        <div class="mb-4">

                            <label class="form-label">Teléfono móvil</label>

                            <input type="tel"
                                   name="telefono_movil"
                                   class="form-control"
                                   value="<?= esc($cliente['telefono_movil']) ?>"
                                   maxlength="20"
                                   required>

                        </div>

                        <div class="d-flex justify-content-end gap-2">

                            <a href="<?= base_url('clientes') ?>"
                               class="btn btn-secondary">

                                Cancelar

                            </a>

                            <button type="submit"
                                    class="btn btn-warning">

                                <i class="fa-solid fa-floppy-disk"></i>
                                Actualizar cliente

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>
