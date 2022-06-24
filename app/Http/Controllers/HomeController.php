<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;


class HomeController extends Controller
{
  public function redirect()
  {

    $usertype = Auth::user()->usertype;


    if ($usertype == '0') {
      return redirect('showproduct');

    } else {

      $data = product::paginate(6);

      $user = auth()->user();

      $count = cart::where('phone', $user->phone)->count();

      return view('user.home', compact('data', 'count'));
    }
  }

  public function about()
  {
    $user = auth()->user();
    if($user){
      $count = cart::where('phone', $user->phone)->count();
      return view('user.about', compact('count'));
    } else {
      return view('user.about');
    }
    
  }

  public function products()
  {
    $user = auth()->user();

    if ($user) {
      $count = cart::where('phone', $user->phone)->count();
      $data = product::paginate(6);
      return view('user.productView', compact('count', 'data'));
    } else {
      $count = 0;
      return view('auth.login', compact('count'));
    }
    
  }

  public function contact()
  {
    $user = auth()->user();
    if($user){
    $count = cart::where('phone', $user->phone)->count();
    return view('user.contact', compact('count'));
    } else {
      return view('user.contact');
    }
  }

  public function index()
  {
    if (Auth::id()) {
      return redirect('redirect');
    } else {

      $data = product::paginate(6);

      return view('user.home', compact('data'));
    }
  }

  public function search(Request $request)
  {
    $search = $request->search;
    $user = auth()->user();

    if($user){
    $count = cart::where('phone', $user->phone)->count();

      if ($search == '') {

        $data = product::paginate(6);

        return view('user.productView', compact('data', 'count'));
      }

      $data = product::where('title', 'like', '%' . $search . '%')->get();
      return view('user.productView', compact('data', 'count'));
      echo "search";
    } else {
        if ($search == '') {

          $data = product::paginate(6);

          return view('user.productView', compact('data'));
        }
        $data = product::where('title', 'like', '%' . $search . '%')->get();
        return view('user.productView', compact('data'));
    }
  }

  public function addcart(Request $request, $id)
  {
    if (Auth::id()) {
      $user = auth()->user();

      $product = product::find($id);

      $cart = new cart;

      $cart->name = $user->name;

      $cart->phone = $user->phone;

      $cart->address = $user->address;

      $cart->product_title = $product->title;

      $cart->price = $product->price;

      $cart->quantity = $request->quantity;

      $cart->save();



      return redirect()->back()->with('message', 'Product Added Successfully');
    } else {
      return redirect('login');
    }
  }

  public function showcart()
  {
    $user = auth()->user();

    $cart = cart::where('phone', $user->phone)->get();

    $count = cart::where('phone', $user->phone)->count();

    return view('user.showcart', compact('count', 'cart'));
  }

  public function deletecart($id)
  {
    $data = cart::find($id);

    $data->delete();

    return redirect()->back()->with('message', 'Product Deleted Successfully');
  }

  public function confirmorder(Request $request)
  {
    $user = auth()->user();

    $name = $user->name;
    $phone = $user->phone;
    $address = $user->address;

    foreach ($request->productname as $key => $productname) {

      $order = new order;

      $order->product_name = $request->productname[$key];

      $order->price = $request->price[$key];

      $order->quantity = $request->quantity[$key];

      $order->name = $name;

      $order->phone = $phone;

      $order->address = $address;

      $order->status = 'not delivered';

      $order->save();
    }
    DB::table('carts')->where('phone', $phone)->delete();

    return redirect()->back()->with('message', 'Product Ordered Successfully');
  }
}
