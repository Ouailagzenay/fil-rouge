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
        Cart::add([
            'id' => $prodact->slug,
            'name' => $prodact->nom_materail,
            'qty' => $request->qty,
            'price' => $prodact->price,
            'weight' => 1,
            ]);
        return redirect()->route('cart.index');
    }
    //update item on cart 
    public function updateProdactOnCart(Request $request ,$prodact)
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
    public function removeProdactFormCart(Request $request ,  $prodact)
    {
        // \Cart::remove($prodact->id);
        return redirect()->route('cart.index');
    }
}
