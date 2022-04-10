<?php 

//classs that handles all profduct activities
class Product
{
    function createProduct()
    {
        session_start();
        $current_userID = $_SESSION['user_id']; //get the seller id
        $product_Type = $_POST['product_Type']; //thics checks for the product type
        if($product_Type == 'digital')
        {
            //here, we generate a download link for the product here
        }else{
            //we proceed to store the product
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $name = $_POST['name'];
            $article_number = htmlspecialchars($_POST['article_number']);
            $prices = htmlspecialchars($_POST['pirces']);
            $pictures = htmlspecialchars($_POST['pictures']);
            $categoryId = htmlspecialchars($_POST['categoryId']);


            $product = new Product(); //creates product
            $this->assignProductToCategory($product->id, $categoryId); ///this performs the assignment of the category with the product
            $sellerId = $current_userID;

            $this->assignSellerToProduct($sellerId, $product->id);
            }
        }
    }

    function assignSellerToProduct($sellerId, $product)
    {
        //we have an adjoining table that creates a one-to-many relationhip between a seller ans products
    }

    function assignProductToCategory($productID, $categoryId)
    {
        return [$productID, $categoryId]; 

        //this attach the product to a category
    }

    function addProductToCart($id)
    {
        return $id; 
        //id being the index of the product being added to cart
    }

    function removePriductFromCart($id)
    {
        return $id;
        //id being the id of the product being removed from the card
    }


    function displayallProducts()
    {
        //this display all the product name, article number, quantity, price for quantity
    }

    function displayProductByCategory($categoryId)
    {
        //we fetch products based on the categoryID passed here
    }

}


class Category{

    function createCategory()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
        }
        
    }
}

class createUser{  //customer

    function createUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $name = htmlspecialchars($_POST['name']);
            $address = htmlspecialchars($_POST['address']);
            $email = htmlspecialchars($_POST['email']);
            //users are created here
        }
    }

    function userSubscribeToEvent($eventId, $userID)
    {
        ///this is where the user is subscribed to the selected event. Note that the event has a product attached 
        //...to it. The logic here updates the user by sending emails to him or her when a change is made to 
        //the product represented in the eventId
    }
}

class Event{

    function createProductEvent($productID)
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $name = htmlspecialchars($_POST['name']); //name of the event
        }
        //event is created here with respect to the ProductID sent

    }

}

class Seller{

    function createSeller()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            $name = htmlspecialchars($_POST['name']);
            $address = htmlspecialchars($_POST['address']);
            //seller created here
        }
    }


}
