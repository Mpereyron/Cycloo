<?php

namespace Cycloo\DAO;

use Doctrine\DBAL\Connection;
use cycloo\Domain\Bike;

class BikeDAO
{
    
    private $db;

    
    public function __construct(Connection $db) {
        $this->db = $db;
    }

    
    public function findAll() {
        $sql = "select * from t_bike order by bike_id desc";
        $result = $this->db->fetchAll($sql);
        
        
        $bikes = array();
        foreach ($result as $row) {
            $bikeId = $row['bike_id'];
            $bikes[$bikeId] = $this->buildBike($row);
        }
        return $bikes;
    }

    
    private function buildBike(array $row) {
        $bike = new Bike();
        $bike->setId($row['bike_id']);
        $bike->setName($row['bike_name']);
        $bike->setDescription($row['bike_description']);
        return $bike;
    }
}