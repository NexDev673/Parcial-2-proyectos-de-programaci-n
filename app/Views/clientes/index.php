<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administración de Clientes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-light">
<header class="bg-warning text-dark py-3 shadow-sm">
    <div class="container">
        <h1 class="h3 mb-0 fw-bold">
            <i class="fa-solid fa-film me-2"></i>
            Cine Sensación
        </h1>
    </div>
</header>
<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">
                Administración de Clientes
            </h2>

            <p class="text-secondary">
                Sistema de gestión de clientes de cine
            </p>
        </div>

        <a href="<?= base_url('clientes/crear') ?>"
           class="btn btn-warning">

            <i class="fa-solid fa-plus"></i>
            Nuevo cliente

        </a>

    </div>

    <?php if (session()->getFlashdata('mensaje')): ?>

        <div class="alert alert-success alert-dismissible fade show">

            <?= esc(session()->getFlashdata('mensaje')) ?>

            <button type="button" class="btn-close"
                    data-bs-dismiss="alert"></button>

        </div>

    <?php endif; ?>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Fecha nacimiento</th>
                            <th>Fecha suscripción</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                            <th>Acciones</th>
                        </tr>

                    </thead>

                    <tbody>

                        <?php if (!empty($clientes)): ?>

                            <?php foreach ($clientes as $cliente): ?>

                                <tr>

                                    <td><?= esc($cliente['cliente_id']) ?></td>
                                    <td><?= esc($cliente['nombre']) ?></td>
                                    <td><?= esc($cliente['apellido']) ?></td>
                                    <td><?= esc($cliente['fecha_nacimiento']) ?></td>
                                    <td><?= esc($cliente['fecha_suscripcion']) ?></td>
                                    <td><?= esc($cliente['correo_electronico']) ?></td>
                                    <td><?= esc($cliente['telefono_movil']) ?></td>

                                    <td>

                                        <a href="<?= base_url('clientes/editar/'.$cliente['cliente_id']) ?>"
                                           class="btn btn-warning btn-sm">

                                            <i class="fa-solid fa-pen"></i>

                                        </a>

                                        
                                        <form action="<?= base_url('clientes/eliminar/'.$cliente['cliente_id']) ?>"
                                            method="POST"
                                            class="d-inline"
                                            onsubmit="return confirm('¿Estás seguro de eliminar este cliente?')">

                                            <?= csrf_field() ?>

                                            <button type="submit" class="btn btn-danger btn-sm">

                                            <i class="fa-solid fa-trash"></i>

                                            </button>

                                        </form>


                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php else: ?>

                            <tr>
                                <td colspan="8" class="text-center py-4">
                                    No hay clientes registrados.
                                </td>
                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
