<?php
function getHistory($connection) {
    try {
        $query= $connection->prepare("SELECT * FROM ORDERS WHERE CUSTOMER_ID=:CUSTOMER_ID AND FINISHED=1");        
        $query->bindValue(':CUSTOMER_ID', $_SESSION["ID"]);
        $query->execute();
        $orders = $query->fetchAll(PDO::FETCH_ASSOC);
        return $orders;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function getOrder($connection) {
    try {
        $query= $connection->prepare("SELECT ID FROM ORDERS WHERE CUSTOMER_ID=:CUSTOMER_ID AND FINISHED=0");        
        $query->bindValue(':CUSTOMER_ID', $_SESSION["ID"]);
        $query->execute();
        if ($query->rowCount()==1) {
            $order = $query->fetchAll(PDO::FETCH_ASSOC);
            return $order[0];
        } else {
            return createOrder($connection);
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

function createOrder($connection) {
    try {
        $query = $connection->prepare("INSERT INTO ORDERS (CUSTOMER_ID) VALUES (:CUSTOMER_ID)");
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
            SELECT P.ID, P.NAME, P.PRICE, COUNT(S.ID) as TOTAL
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

function addProduct($product, $order, $connection) {
    try {
        $query = $connection->prepare("INSERT INTO SALES (PRODUCT_ID, ORDER_ID) VALUES (:PRODUCT_ID, :ORDER_ID)");
        $query->bindValue(':PRODUCT_ID', $product);
        $query->bindValue(':ORDER_ID', $order["ID"]);
        $query->execute();
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}

function emptyCart($order, $connection) {
    try {
        $query = $connection->prepare("
            DELETE FROM SALES 
            WHERE ORDER_ID=:ORDER_ID
        ");
        $query->bindValue(':ORDER_ID', $order["ID"]);
        $query->execute();
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}

function deleteItem($product, $order, $connection) {
    try {
        $query = $connection->prepare("
            DELETE FROM SALES 
            WHERE PRODUCT_ID=:PRODUCT_ID
            AND ORDER_ID=:ORDER_ID
        ");
        $query->bindValue(':PRODUCT_ID', $product);
        $query->bindValue(':ORDER_ID', $order["ID"]);
        $query->execute();
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}

function decreaseItem($product, $order, $connection) {
    try {
        $query = $connection->prepare("
            DELETE FROM SALES
            WHERE ORDER_ID=:ORDER_ID
            AND PRODUCT_ID=:PRODUCT_ID
            LIMIT 1
        ");
        $query->bindValue(':PRODUCT_ID', $product);
        $query->bindValue(':ORDER_ID', $order["ID"]);
        $query->execute();
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}

function buyCart($order, $connection) {
    try {
        $query = $connection->prepare("
            UPDATE ORDERS
            SET FINISHED=1, DATE=NOW()
            WHERE ID=:ORDER_ID
        ");
        $query->bindValue(':ORDER_ID', $order["ID"]);
        $query->execute();
    }catch(PDOException $e) {
        echo "Error:" .$e->getMessage();
    }
}
?>