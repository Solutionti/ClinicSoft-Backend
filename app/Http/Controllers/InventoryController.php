<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller{
    
    public function __construct(request $request) {
      $this->Product = new Product(); 
    }

    // MODULO DE PRODUCTOS  
    public function getProducts() {
      return  $this->Product->getProducts();
    }

    public function createProduct() {
      
    }

    public function updateProduct() {

    }

    // INVENTARIOS

    public function getInventories() {

    }

    public function pdfInventory() {

    }

    //MODULO DE KARDEX
    public function getKardex() {

    }

    public function pdfKardex() {

    }

    public function Creatstart() {

    }

    public function createEnd() {
        
    }
}
