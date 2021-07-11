<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function index(): Factory|View|Application
    {
        $data = Product::query()
            ->orderByDesc('id')
            ->limit(9)
            ->get();

        return view('index', ['products' => $data]);
    }

    //
    public function products(): Factory|View|Application
    {
        return view('products', [
            'products' => Product::query()->paginate(9)
        ]);
    }

    public function detail(int $id): Factory|View|Application
    {
        $product = Product::query()->find($id);
        return view('detail', [
            'product' => $product,
            'title' => $product['name'] ?? 'Product Not Found',
        ]);
    }

    public function search(Request $req): Factory|View|Application
    {
        return view('search', [
            'products' => Product::query()
                ->where('name', 'like', '%' . $req->input('query') . '%')
                ->get()
        ]);

    }

    public function addToCart(): Redirector|Application|RedirectResponse
    {
        if (Auth::check()) {
            $cart = new Cart;
            $cart->user_id = Auth::user()['id'];
            $cart->product_id = request()->post('product_id');
            $cart->save();
            return redirect('/');
        }

        return redirect('/login');
    }

    public static function cartItem(): int
    {
        $userId = session()->get('user')['id'];
        return Cart::query()
            ->where('user_id', $userId)
            ->count();
    }

    public function cartList(): Factory|View|Application
    {
        $userId = Auth::user()['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        return view('cartlist', ['products' => $products]);
    }

    public function removeCart(int $id): Redirector|Application|RedirectResponse
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    public function orderNow(): Factory|View|Application
    {
        $userId = session()->get('user')['id'];

        $total = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }

    public function orderPlace(Request $req): Redirector|Application|RedirectResponse
    {
        $userId = session()->get('user')['id'];
        $allCart = Cart::query()->where('user_id', $userId)->get();

        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->product_id = $cart['product_id'];
            $order->payment_method = request()->post('payment');
            $order->payment_status = "pending";
            $order->address = request()->post('address');
            $order->save();
            Cart::query()->where('user_id', $userId)->delete();
        }
        $req->input();

        return redirect('/');
    }

    public function myOrders(): Factory|View|Application
    {
        $userId = session()->get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $orders]);
    }
}
