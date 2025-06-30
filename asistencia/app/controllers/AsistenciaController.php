<?php
require_once __DIR__ . '/../models/Asistencia.php';

class AsistenciaController {
    private $model;

    public function __construct() {
        $this->model = new Asistencia();
    }

    public function index() {
        $asistencias = $this->model->obtenerTodas();
        require __DIR__ . '/../views/asistencia/index.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $estudiante = $_POST['estudiante'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $estado = $_POST['estado'] ?? 'PRESENTE';
            $observaciones = $_POST['observaciones'];
            $this->model->crear($estudiante, $fecha, $hora, $estado, $observaciones);
            header('Location: ?controller=asistencia&action=index');
            exit;
        }
        require __DIR__ . '/../views/asistencia/crear.php';
    }

    public function editar() {
        $id = $_GET['id'] ?? null;
        if (!$id) {
            header('Location: ?controller=asistencia&action=index');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $estudiante = $_POST['estudiante'];
            $fecha = $_POST['fecha'];
            $hora = $_POST['hora'];
            $estado = $_POST['estado'];
            $observaciones = $_POST['observaciones'];
            $this->model->actualizar($id, $estudiante, $fecha, $hora, $estado, $observaciones);
            header('Location: ?controller=asistencia&action=index');
            exit;
        }

        $asistencia = $this->model->obtenerPorId($id);
        require __DIR__ . '/../views/asistencia/editar.php';
    }

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        if ($id) {
            $this->model->eliminar($id);
        }
        header('Location: ?controller=asistencia&action=index');
        exit;
    }
}
