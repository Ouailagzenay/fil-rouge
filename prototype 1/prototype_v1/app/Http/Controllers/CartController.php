<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Materail;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    //return cart items
    public function index()
    {
        return view('cart.index')->with([
            'items' => Cart::Content(),
            
        ]);
    }
    //add item to cart 
    public function addProdactToCart(Request $request , Materail $prodact)
    {
        $prodact = Materail::select('*')->From('materails')->join('categories','materails.categorie_id','=','categories.id')->first();
        Cart::add([
            'id' => $prodact->slug,
            'name' => $prodact->title,
            'qty' => $request->qty,
            'price' => $prodact->price,
            'weight' => 1,
            'options' => [
            'image' => $prodact->image1 ,
            'image2' =>$prodact->image2 ,
            'nom_material' => $prodact->nom_materail
            ]]);
        return redirect()->route('cart.index');
    }
    //update item on cart 
    public function updateProdactOnCart(Request $request , Tables $prodact)
    {
        // \Cart::update($prodact->id, array(
        //     'quantity' => array(
        //         'relative' => false,
        //         'value' => $request->qty
        //     ),
        //   ));
        return redirect()->route('cart.index');
    }
    //remove item form cart 
    public function removeProdactFormCart(Request $request , Tables $prodact)
    {
        // \Cart::remove($prodact->id);
        return redirect()->route('cart.index');
    }
}
