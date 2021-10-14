<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Devinweb\LaravelHyperpay\Facades\LaravelHyperpay;
use App\Billing\HyperPayBilling;
use App\Models\User;
class PaymentController extends Controller
{
    public function prepareCheckout(Request $request)
    {
        $trackable_data = [
            'product_id'=> 'bc842310-371f-49d1-b479-ad4b387f6630',
            'product_type' => 't-shirt'
        ];
        $user = User::first();
        $amount = 10;
        $brand = $request->get('brand'); // MASTER OR MADA
        // LaravelHyperpay::addBilling(new HyperPayBilling())->checkout($trackable_data, $user, $amount, $brand, $request);
        return LaravelHyperpay::checkout($trackable_data, $user, $amount, $brand, $request);
    }
    public function form()
    {
       return view('form');
    }
    
    public function payment_status(Request $request)
    {
        $resourcePath = $request->get('resourcePath');
        $checkout_id = $request->get('id');
        return LaravelHyperpay::paymentStatus($resourcePath, $checkout_id);    }
}
