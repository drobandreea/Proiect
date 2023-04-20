<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
 public function index()
 {
 $products = Product::all();
 return view('products', compact('products'));
 }
 public function cart()
 {
 return view('cart');
 }
 public function addToCart($id)
 {
 $product = Product::find($id);
 if(!$product) { abort(404); }
 $cart = session()->get('cart');
 // daca cart este gol se pune primul product
 if(!$cart) {
 $cart = [
 $id => [
 "nume" => $product->nume,
 "cantitate" => 1,
 "pret" => $product->pret,
 "imagine" => $product->imagine
 ]
 ];
 session()->put('cart', $cart);
 return redirect()->back()->with('success', 'Produs adaugat cu succes in cos!');
 }
 // daca cart nu este gol at verificam daca produsul exista pt a incrementa cantitate
 if(isset($cart[$id])) {
 $cart[$id]['cantitate']++;
 session()->put('cart', $cart);
 return redirect()->back()->with('success', 'Produs adaugat cu succes in cos!');
 }
 // daca item nu exista in cos atunci adaugam la cos cu cantitate = 1
 $cart[$id] = [
 "nume" => $product->nume,
 "cantitate" => 1,
 "pret" => $product->pret,
 "imagine" => $product->imagine
 ];
 session()->put('cart', $cart);
 return redirect()->back()->with('success', 'Produs adaugat cu succes in cos!');
 }
public function update(Request $request)
 {
 if($request->id and $request->cantitate)
 {
 $cart = session()->get('cart');
 $cart[$request->id]["cantitate"] = $request->cantitate;
 session()->put('cart', $cart);
 session()->flash('success', 'Cos modificat cu succes');
 }
 }
 public function remove(Request $request)
 {
 if($request->id) {
 $cart = session()->get('cart');
 if(isset($cart[$request->id])) {
 unset($cart[$request->id]);
 session()->put('cart', $cart);
 }
 session()->flash('success', 'Produs sters cu succes!');
 }
 }
}