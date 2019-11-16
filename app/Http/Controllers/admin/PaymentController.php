<?php

namespace App\Http\Controllers\admin;

use App\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class PaymentController extends Controller
{
    public function execute()
    {
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzTagZH6l798lgEhAN-wG80TZDgYbc0SnN5NkxXr3pXtRwp6dGCambnzvJPNujJobtj1H8p6ZbQz9En',     // ClientID
                'EHocdCOGzPFnvtmik1tmvOaz8UlSB-VCAUe2ngI1LvvD8cXiaBS3BTtmaq1aDx8vJPlWfhGkiVy_GXf6'      // ClientSecret
            )
        );
    }
    public function createPayment()
    {

        $this->companyChangeStatusPayment();
        return redirect('company/dashboard');die;

        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                'AWzTagZH6l798lgEhAN-wG80TZDgYbc0SnN5NkxXr3pXtRwp6dGCambnzvJPNujJobtj1H8p6ZbQz9En',     // ClientID
                'EHocdCOGzPFnvtmik1tmvOaz8UlSB-VCAUe2ngI1LvvD8cXiaBS3BTtmaq1aDx8vJPlWfhGkiVy_GXf6'      // ClientSecret
            )
        );

        $payer = new Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new Item();
        $item1->setName('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku("123123") // Similar to `item_number` in Classic API
            ->setPrice(10.20);

        $itemList = new ItemList();
        $itemList->setItems(array($item1));


        $details = new Details();
        $details->setSubtotal(18.60);

        $amount = new Amount();
        $amount->setCurrency("USD")
            ->setTotal(25)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description ici ")
            ->setInvoiceNumber(uniqid());

        //$baseUrl = getBaseUrl();
        $baseUrl = "http://127.0.0.1:8000";
        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl("$baseUrl/admin/execute-payment")
            ->setCancelUrl("$baseUrl/cancel");

        $payment = new Payment();
        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));
//        $request = clone $payment;

        $payment->create($apiContext);

        return $payment->getApprovalLink();

    }

    private function companyChangeStatusPayment()
    {
        $userId = Auth::id();
        $affectedRows = Company::where('user_id', $userId)->update(['payment' => true]);

    }
    private function companyChangeStatusDelivred()
    {
        $userId = Auth::id();
        $affectedRows = Company::where('user_id', $userId)->update(['order_delivery' => true]);

    }
}
