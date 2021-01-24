<?php
function getOrder($connection) {
    try {
        $query= $connection->prepare("SELECT ID FROM ORDERS WHERE CUSTOMER_ID=:CUSTOMER_ID AND FINISHED=0");        
        $query->bindValue(':CUSTOMER_ID', $_SESSION["ID"]);
        $query->execute();
        if ($query->rowCount()==1) {
            $order = $query->fetchAll(PDO::FETCH_ASSOC);
            return $order;
        } else {
            return createOrder($connection);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function createOrder($connection) {
    try {
        var_dump($_SESSION);
        $query = $connexio->prepare("INSERT INTO ORDERS (CUSTOMER_ID) VALUES (:CUSTOMER_ID)");
        $query->bindValue(':CUSTOMER_ID', $_SESSION["ID"]);
        $query->execute();

        return getOrder($connection);
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}

function getProducts($order, $connection) {
    try {
        $query= $connection->prepare("
            SELECT P.NAME, P.PRICE, COUNT(S.ID) as TOTAL
            FROM  ORDERS O, PRODUCTS P, SALES S
            WHERE O.ID = S.ORDER_ID
            and S.PRODUCT_ID = P.ID
            and O.ID = :order_id
            GROUP BY P.NAME
        ");        
        $query->bindValue(':order_id', $order["ID"]);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>