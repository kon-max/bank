<?php
class Db
{
    protected $conn = null;
	protected $query = null;
    
    public function __construct($driver = 'mysql', $host = 'localhost', $user = 'root', $pass = '', $name = 'bank', $charset = 'utf8')
	{
		$dsn = $driver . ':host=' . $host;
		if (!empty($name))
		{
			$dsn .= ';dbname=' . $name;
		}
		
		$dsn       .= ';charset=' . $charset;
		try
		{
			$this->conn = new \PDO(
				$dsn, $user, $pass, [
					\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
					\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC
				]
			                     );
		}
		catch (\PDOException $e)
		{
			error_log($e);
			return false;
		}
        return true;
    }
public function query($sql, $params = [])
    {
		$this->query = $this->conn->prepare($sql);
		if (empty($params))
		{
			$res = $this->query->execute();
		}
		else
		{
			$res = $this->query->execute($params);
		}
		if ($res !== false)
		{
			return $this->query->fetchAll();
		}
		return [];
    }
    
}
?>