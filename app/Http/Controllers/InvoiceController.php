<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
class InvoiceController extends Controller
{
  public function publish(InvoiceRequest $req)
  {
    $inv = new Invoice();
    $inv->no = $req->no;
    $inv->create_date = $req->create_date;
    $inv->supply_date = $req->supply_date;
    $inv->comment = $req->comment;

    $inv->save();
    // return response()->json(Article::get());
    return json_encode(Invoice::get(), JSON_UNESCAPED_UNICODE);
  }
}
