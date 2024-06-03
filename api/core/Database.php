<?php

namespace Core;

use PDO;
use Exception;
use PDOStatement;
use Opencad\App\Helpers\Exceptions\DB\ExecutionFailedException;
use Opencad\App\Helpers\Exceptions\DB\FetchingResultFailedException;
use Opencad\App\Helpers\Exceptions\DB\InvalidDatabaseLoginException;
use Opencad\App\Helpers\Exceptions\DB\PrepareStatementErrorException;
use Opencad\App\Helpers\Exceptions\DB\InvalidDatabaseConfigurationException;

class Database
{
    /**
     * The PDO instance used to connect to the database.
     *
     * @var PDO
     */
    private $pdo;

    /**
     * The single instance of the class.
     *
     * @var Database
     */
    private static $instance;

    /**
     * Creates a new database instance.
     *
     * @param string $dsn The data source name for the database connection.
     * @param string $username The username for the database connection.
     * @param string $password The password for the database connection.
     * @throws \PDOException
     */
    private function __construct(string $dsn, string $username, string $password)
    {
        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            // Log the error or perform other error handling as needed
            error_log($e->getMessage());
            throw $e;
        }
    }

    /**
     * Prevents the class from being cloned.
     */
    private function __clone()
    {
    }

    /**
     * Gets the single instance of the class.
     *
     * @param string $dsn The data source name for the database connection.
     * @param string $username The username for the database connection.
     * @param string $password The password for the database connection.
     * @return Database
     */
    public static function getInstance()
    {
        try {
            $config = require __DIR__ . "/../config/database.php";

            $host = $config['host'] ?? null;
            $dbname = $config['dbname'] ?? null;

            if ($host === null || $dbname === null) {
                throw new InvalidDatabaseConfigurationException('Invalid database configuration');
            }

            $dsn = "mysql:host={$host};dbname={$dbname}";
            $username = $config['username'] ?? '';
            $password = $config['password'] ?? '';

            if (!self::$instance) {
                self::$instance = new self($dsn, $username, $password);
            }
            return self::$instance;
        } catch (\PDOException $e) {
            // Log the error message to the console
            error_log($e->getMessage());
            throw new InvalidDatabaseLoginException('Database connection error');
        }
    }

    /**
     * Prepares a SQL statement for execution.
     *
     * @param string $sql The SQL statement to prepare.
     * @return PDOStatement
     * @throws PrepareStatementErrorException
     */
    public function prepare(string $sql)
    {
        try {
            return $this->pdo->prepare($sql);
        } catch (PrepareStatementErrorException $e) {
            // Log the error or perform other error handling as needed
            error_log($e->getMessage());
            throw $e;
        }
    }

    /**
     * Executes a prepared statement.
     *
     * @param PDOStatement $stmt The prepared statement to execute.
     * @return bool
     */
    public function executeStatement(PDOStatement $stmt)
    {
        try {
            $result = $stmt->execute();
            if ($result === false) {
                throw new ExecutionFailedException('Query execution failed');
            }
            return $result;
        } catch (ExecutionFailedException $e) {
            // Log the error or perform other error handling as needed
            error_log($e->getMessage());
            return false;
        }
    }

    /**
     * Fetches the results of a prepared statement as an array of associative arrays.
     *
     * @param PDOStatement $stmt The prepared statement to fetch results from.
     * @return array|bool
     */
    public function resultSet(PDOStatement $stmt)
    {
        try {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if ($results === false) {
                throw new FetchingResultFailedException('Fetching results failed');
            }
            return $results;
        } catch (FetchingResultFailedException $e) {
            // Log the error or perform other error handling as needed
            error_log($e->getMessage());
            return false;
        }
    }

    /**
     * Gets the last inserted ID.
     *
     * @return string
     */
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
}
