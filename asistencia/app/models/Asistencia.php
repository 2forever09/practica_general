<?php
require_once __DIR__ . '/../../core/Model.php';

class Asistencia extends Model {

    public function obtenerTodas() {
        $stmt = $this->db->query("SELECT * FROM asistencias ORDER BY fecha DESC, hora DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function obtenerPorId($id) {
        $stmt = $this->db->prepare("SELECT * FROM asistencias WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function crear($estudiante, $fecha, $hora, $estado, $observaciones) {
        $sql = "INSERT INTO asistencias (estudiante, fecha, hora, estado, observaciones)
                VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$estudiante, $fecha, $hora, $estado, $observaciones]);
    }

    public function actualizar($id, $estudiante, $fecha, $hora, $estado, $observaciones) {
        $sql = "UPDATE asistencias 
                SET estudiante = ?, fecha = ?, hora = ?, estado = ?, observaciones = ?
                WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$estudiante, $fecha, $hora, $estado, $observaciones, $id]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM asistencias WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
