<?php

namespace App\Http\Controllers\HBL;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use App\Services\HBL\Api\Payment;
use App\Services\HBL\Api\Inquiry;
use App\Services\HBL\Api\VoidRequest;
use App\Services\HBL\Api\Settlement;
use App\Services\HBL\Api\Refund;
use Exception;

class PaymentController extends Controller
{
    public function index()
    {
        return view('hbl.payment.index');
    }

    public function checkout(Request $request)
    {
        try {
            $payment = new Payment();
            $joseResponse = $payment->ExecuteFormJose(
                $request->input('merchant_id'),
                $request->input('api_key'),
                $request->input('input_currency'),
                $request->input('input_amount'),
                $request->input('input_3d'),
                $request->input('success_url'),
                $request->input('fail_url'),
                $request->input('cancel_url'),
                $request->input('backend_url')
            );
            $response_obj = json_decode($joseResponse);
            header("Location: " . $response_obj->response->Data->paymentPage->paymentPageURL);
            exit();
        } catch (GuzzleException $e) {
            echo '\n Message: ' . $e->getMessage();
            echo '\n Trace: ' . $e->getTraceAsString();
        } catch (Exception $e) {
            echo '\n Message: ' . $e->getMessage();
            echo '\n Trace: ' . $e->getTraceAsString();
        }
    }

    public function store(Request $request)
    {
        return response()->json($request->all());
    }

    public function success(Request $request)
    {
        return response()->json($request->all());
    }

    public function failed(Request $request)
    {
        return response()->json($request->all());
    }

    public function cancel(Request $request)
    {
        return response()->json($request->all());
    }

    public function callback(Request $request)
    {
        return response()->json($request->all());
    }
}
