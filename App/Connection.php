<?php

namespace App;

class Connection
{

	public static function getDb()
	{
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=twitterclone;charset=utf8;unix_socket=/opt/lampp/var/mysql/mysql.sock",
				"root",
				""
			);

			return $conn;

		} catch (\PDOException $e) {
			echo "Erro na conexão: " . $e->getMessage();
		}
	}
}

?>