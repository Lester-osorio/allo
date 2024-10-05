<?php

require_once('Conexion.php');

class DashboardModel extends Conexion
{

	public function Ver_Moneda_Reporte()
	{

		$dbconec = Conexion::Conectar();

		try {
			$query = "CALL sp_view_money()";
			$stmt = $dbconec->prepare($query);
			$stmt->execute();
			$count = $stmt->rowCount();

			if ($count > 0) {
				return $stmt->fetchAll();
			}


			$dbconec = null;
		} catch (Exception $e) {

			echo "Error al cargar el listado";
		}
	}

	public function Datos_Paneles()
	{
		$dbconec = Conexion::Conectar();

		try {
			$query = "CALL sp_panel_dashboard();";
			$stmt = $dbconec->prepare($query);
			$stmt->execute();
			$count = $stmt->rowCount();

			if ($count > 0) {
				return $stmt->fetchAll();
			}


			$dbconec = null;
		} catch (Exception $e) {

			echo '<span class="label label-danger label-block">ERROR AL CARGAR LOS DATOS, PRESIONE F5</span>';
		}
	}

	public function Compras_Anuales()
	{
		$dbconec = Conexion::Conectar();

		try {
			$query = "CALL sp_compras_anual();";
			$stmt = $dbconec->prepare($query);
			$stmt->execute();
			$count = $stmt->rowCount();

			if ($count > 0) {
				return $stmt->fetchAll();
			}

			$dbconec = null;
		} catch (Exception $e) {
			//echo $e;
			echo '<span class="label label-danger label-block">ERROR AL CARGAR LOS DATOS, PRESIONE F5</span>';
		}
	}


	public function CalcularGananciaNetaTotal()
	{
		$dbconec = Conexion::Conectar();
		try {
			$query = "CALL sp_CalcularGananciaNetaTotal();";
			$stmt = $dbconec->prepare($query);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC); // Asumiendo que devuelves un solo valor en una sola fila
			$dbconec = null;
			return $result['Ganancia_Neta_Total']; // Asegúrate que 'Ganancia_Neta_Total' es el nombre de la columna devuelta por el SP
		} catch (Exception $e) {
			echo '<span class="label label-danger label-block">ERROR AL CARGAR LOS DATOS, PRESIONE F5</span>';
		}
	}


	public function CantidadProductosStockBajo()
	{
		$dbconec = Conexion::Conectar();
		try {
			$query = "CALL sp_CantidadProductosStockBajo();";
			$stmt = $dbconec->prepare($query);
			$stmt->execute();
			$result = $stmt->fetch(PDO::FETCH_ASSOC); // Asumiendo que devuelves un solo valor en una sola fila
			$dbconec = null;
			return $result['Cantidad_Productos_Stock_Bajo']; // Devuelve directamente el número
		} catch (Exception $e) {
			echo '<span class="label label-danger label-block">ERROR AL CARGAR LOS DATOS, PRESIONE F5</span>';
		}
	}



	public function Ventas_Anuales()
	{
		$dbconec = Conexion::Conectar();

		try {
			$query = "CALL sp_ventas_anual();";
			$stmt = $dbconec->prepare($query);
			$stmt->execute();
			$count = $stmt->rowCount();

			if ($count > 0) {
				return $stmt->fetchAll();
			}

			$dbconec = null;
		} catch (Exception $e) {
			//echo $e;
			echo '<span class="label label-danger label-block">ERROR AL CARGAR LOS DATOS, PRESIONE F5</span>';
		}
	}
}
