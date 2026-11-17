<?php

namespace App\Controllers;

use App\Models\ClienteModel;

class Clientes extends BaseController
{
    protected $clienteModel;

    public function __construct()
    {
        $this->clienteModel = new ClienteModel();
    }

    // Mostrar todos los clientes
    public function index()
    {
        $datos['clientes'] = $this->clienteModel->findAll();

        return view('clientes/index', $datos);
    }

    // Mostrar formulario de registro
    public function crear()
    {
        return view('clientes/crear');
    }

    
    public function guardar()
    {
        $this->clienteModel->insert([
            'nombre'              => $this->request->getPost('nombre'),
            'apellido'            => $this->request->getPost('apellido'),
            'fecha_nacimiento'    => $this->request->getPost('fecha_nacimiento'),
            'fecha_suscripcion'  => $this->request->getPost('fecha_suscripcion'),
            'correo_electronico'  => $this->request->getPost('correo_electronico'),
            'telefono_movil'      => $this->request->getPost('telefono_movil')
        ]);

        return redirect()->to('/clientes')
                         ->with('mensaje', 'Cliente registrado correctamente.');
    }

    public function editar($id)
    {
        $datos['cliente'] = $this->clienteModel->find($id);

        if (!$datos['cliente']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('clientes/editar', $datos);
    }

    public function actualizar($id)
    {
        $this->clienteModel->update($id, [
            'nombre'              => $this->request->getPost('nombre'),
            'apellido'            => $this->request->getPost('apellido'),
            'fecha_nacimiento'    => $this->request->getPost('fecha_nacimiento'),
            'fecha_suscripcion'  => $this->request->getPost('fecha_suscripcion'),
            'correo_electronico'  => $this->request->getPost('correo_electronico'),
            'telefono_movil'      => $this->request->getPost('telefono_movil')
        ]);

        return redirect()->to('/clientes')
                         ->with('mensaje', 'Cliente actualizado correctamente.');
    }

    
    public function eliminar($id)
    {
        $cliente = $this->clienteModel->find($id);

        if (!$cliente) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $this->clienteModel->delete($id);

        return redirect()->to('/clientes')
                         ->with('mensaje', 'Cliente eliminado correctamente.');
    }


}
