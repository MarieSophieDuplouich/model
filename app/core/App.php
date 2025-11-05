<?php
// class App{
//     public static function start(){
//         echo "App";
//     }
// }
require_once(__DIR__."/../models/ProductModel.php");


class App{
    public static function start(){
        $productModel = new ProductModel();

        //poursavoir si mon crud fonctionne
        //    $productModel->add(name:"brosse",price:80,image:"http://unsplash.it/100/200");
                //    $productModel->del(id:8);
           $product =  $productModel->get(id:1);
           console($product);

    //            $productModel->edit(id:3,name:"Tommy Hilfinger",
    // price:120,image:"http://unsplash/100/110"); 

        $products = $productModel->getAll();
        


        // $productModel->edit(id:1,price:39);
        foreach($products as $product){
            // Product est du type ProductEntity
            console($product->getName());
            // attention à bien ajouter des lignes dans la table Produit
        }
    }
}