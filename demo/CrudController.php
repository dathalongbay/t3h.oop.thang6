<?php
include_once 'Dao.php';

class CrudController
{

    /* Fetch All */
    public function readData()
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT * FROM `photo` ORDER BY photo_id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Fetch Single Record by Id */
    public function readSingle($id)
    {
        try {
            
            $dao = new Dao();
            
            $conn = $dao->openConnection();
            
            $sql = "SELECT * FROM `photo` WHERE photo_id=" . (int) $id . " ORDER BY photo_id DESC";
            
            $resource = $conn->query($sql);
            
            $result = $resource->fetchAll(PDO::FETCH_ASSOC);
            
            $dao->closeConnection();
        } catch (PDOException $e) {
            
            echo "There is some problem in connection: " . $e->getMessage();
        }
        if (! empty($result)) {
            return $result;
        }
    }

    /* Add New Record */
    public function add($formArray)
    {
        $photo_name = $formArray['photo_name'];
        $photo_desc = $formArray['photo_desc'];
        $photo_image = $formArray['photo_image'];
        $photo_created = time();
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "INSERT INTO `photo`(`photo_name`, `photo_desc`, `photo_image`, `photo_created`) 
VALUES ('" . $photo_name . "','" . $photo_desc . "','" . $photo_image . "'," . $photo_created . ")";
        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Edit a Record */
    public function edit($formArray)
    {
        $id = $_POST['id'];
        $photo_name = $formArray['photo_name'];
        $photo_desc = $formArray['photo_desc'];
        $photo_image = $formArray['photo_image'];
        
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "UPDATE `photo` SET photo_name = '" . $photo_name . "' , photo_desc='" . $photo_desc . "', photo_image='" . $photo_image . "' WHERE photo_id=" . (int)$id;

        $conn->query($sql);
        $dao->closeConnection();
    }

    /* Delete a Record */
    public function delete($id)
    {
        $dao = new Dao();
        
        $conn = $dao->openConnection();
        
        $sql = "DELETE FROM `photo` where photo_id='$id'";
        
        $conn->query($sql);
        $dao->closeConnection();
    }
}

?>