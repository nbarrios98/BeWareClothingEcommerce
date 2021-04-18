<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Darryldecode\Cart\Cart;
use App\Models\Product;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('checkout');
    }
   
    public function postCheckout(Request$request) {
        // \Cart::postCheckout($request->id);
        /* ${{ \Cart::getTotal() }} */
        $cartCollection = \Cart::getContent($request->id);
         /* $stripe = new \Stripe\StripeClient(
             'sk_test_51IQoHyJ5y2Dh7xkg9zLM72NSKeaP6NiW1yRf9NlIEFmUdUYLSQKrTwwp9pVPXVa4XNK5SYDrciRqC1346pYWhsZX00leCNvFIF'
         ); */
         Stripe::setApiKey('sk_test_51IQoHyJ5y2Dh7xkg9zLM72NSKeaP6NiW1yRf9NlIEFmUdUYLSQKrTwwp9pVPXVa4XNK5SYDrciRqC1346pYWhsZX00leCNvFIF');
         try{
               /* $stripe->charges->create([ */
               Charge::create(array(
                 'amount' => \Cart::getTotal()*100,
                 'currency' => 'usd',
                 'source' => $request->input('stripeToken'),
                 'description' => 'Test Charge',
               ));
         }catch (\Exception $e){
             return redirect()->route('checkout.index')->with('error',  $e->getMessage());
         }
 // $request->session()->forget('cart');
 $request->session()->flush();
         return redirect()->route('cart.index')->with('success_msg', 'Successfully purchased products!');
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
