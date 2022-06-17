<?php
    require_once "models/model.php";

    class CoffeeModel extends Model 
    {
        protected int $id;
        public function getID() { return $this->id; }
        protected string $name;
        public function getName() { return $this->name; }
        protected float $price;
        public function getPrice() { return $this->price; }
        protected string $description;
        public function getDescription() { return $this->description; }
        protected string $icon;
        public function getIcon() { return $this->icon; }

        function __construct()
        {
        }

        function setAll(int $_id, string $_name, float $_price, string $_description, string $_icon)
        {
            $this->id = $_id;
            $this->name = $_name;
            $this->price = $_price;
            $this->description = $_description;
            $this->icon = $_icon;
        }
        function list()
        {
            $conn = Connection::getConnection();
            if($conn != null)
            {
                $sql = 'SELECT * FROM coffee';
                $stm = $conn->query($sql);
                if(!$stm)
                {
                    echo "\nPDO ERROR";
                    print_r($conn->errorInfo());
                    return;
                }
                $rows = $stm->fetchAll();
                $result = array();

                foreach($rows as $row)
                {
                    $coffee = new CoffeeModel();
                    $coffee->setAll(
                        $row['id'],
                        $row['name'],
                        $row['price'],
                        $row['description'],
                        $row['icon'] == null ? " " : $row['icon'] 
                    );
                    array_push($result, $coffee);
                }
                // $conn->close();
                return $result;
            }
            // $conn->close();
            return null;
        }

        function get($id)
        {
            $conn = Connection::getConnection();
            if($conn != null)
            {
                $sql = 'SELECT * FROM coffee WHERE id='.$id;
                $stm = $conn->query($sql);
                if(!$stm)
                {
                    echo "\nPDO ERROR";
                    print_r($conn->errorInfo());
                    return;
                }

                $row = $stm->fetch();
                $coffee = new CoffeeModel();
                $coffee->setAll(
                    $row['id'],
                    $row['name'],
                    $row['price'],
                    $row['description'],
                    $row['icon'] == null ? " " : $row['icon'] 
                );

                // $conn->close();
                return $coffee;
            }
            // $conn->close();
            return null;
        }
    }
?>