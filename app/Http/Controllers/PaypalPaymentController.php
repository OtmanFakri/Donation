<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use HttpException;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use PayPal\Api\Item;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Payment;
use PayPal\Api\ItemList;
use PayPal\Api\WebProfile;
use PayPal\Api\InputFields;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;


class PaypalPaymentController extends Controller
{

    private $clientId = 'ASbO9zM8zl6KaosKfCXw-sYsKoHYSFl9P6bmvQBNcMCYjIc0kZa_V_AZV656USPNNw-rriLySSjGLxYH';
    private $clientSecret = 'EECRk3PgRuZRIET8rgPinrA2q8GZm2RxIJ7zMS5DRxvPa-N-13spUZVZwhFON12Vl3Mxm3RLZD6EIJhS';
    private $baseUrl = 'http://127.0.0.1:8000';

    function __construct()
    {
        $this->middleware('auth:api');
    }
    public function cretePayment(Request $request)
    {
        {
            $apiContext = new ApiContext(
                new OAuthTokenCredential($this->clientId, $this->clientSecret)
            );

            // Create a new Payer
            $payer = new Payer();
            $payer->setPaymentMethod('paypal');

            // Set the amount to 8 USD
            $amount = new Amount();
            $amount->setTotal('5.00');
            $amount->setCurrency('USD');

            // Create a new Transaction
            $transaction = new Transaction();
            $transaction->setAmount($amount);
            $transaction->setDescription('Payment for 8 USD');

            // Create a new Payment
            $payment = new Payment();
            $payment->setIntent('sale');
            $payment->setPayer($payer);
            $payment->setTransactions([$transaction]);

            // Set the Redirect URLs
            $redirectUrls = new RedirectUrls();
            $redirectUrls->setReturnUrl($this->baseUrl . '/api/payment/success');
            $redirectUrls->setCancelUrl($this->baseUrl . '/api/payment/cancel');

            $payment->setRedirectUrls($redirectUrls);

            try {
                $payment->create($apiContext);

            } catch (\Exception $e) {
                // Handle any exceptions that may occur during payment creation
                return response()->json(['error' => 'Payment creation failed.']);
            }

            $approvalUrl = $payment->getApprovalLink();

            // Redirect the user to PayPal to approve the payment
            return redirect()->away($approvalUrl);

        }
    }

    public function success(Request $request)
    {
        $user = Auth::user();

        // Get the payment ID from the query string
        $paymentId = $request->input('paymentId');

        // Create an API context using your PayPal API credentials
        $apiContext = new ApiContext(
            new OAuthTokenCredential($this->clientId, $this->clientSecret)
        );

        // Get the payment details from PayPal
        try {
            $payment = Payment::get($paymentId, $apiContext);
        } catch (\Exception $e) {
            // Handle any exceptions that may occur while fetching payment details
            return response()->json(['error' => 'Payment details retrieval failed.']);
        }

        // Process the payment success logic here
        // For example, update the order status in your database or trigger other actions

        $user->Coins = $user->Coins + 5;
        return response()->json(['success' => 'Payment completed successfully.']);
    }

    public function cancel()
    {
        // Handle payment cancellation logic here
        return response()->json(['error' => 'Payment was cancelled.']);
    }


}



