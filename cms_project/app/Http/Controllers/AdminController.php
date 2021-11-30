<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Service;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Cache\RedisStore;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $customer = Customer::all();
        return view('admin.home',compact('customer'));
    }
    public function add_customer()
    {
        $customer = Customer::all();
        return view('admin.customer.add_customer',compact('customer'));
    }
    public function customer_add(Request $request)
    {
        $customers = new Customer();
        $customers->name = $request->name ;
        $customers->contact_no = $request->contact_no ;
        $customers->email = $request->email; 
        $customers->address = $request->address ;
        $customers->company = $request->company ;
        $customers->start_date = $request->start_date ;
        $customers->no_days = $request->no_days ;
        $customers->save();
        session()->flash('message','Customer added Successfully');
        return redirect()->back();
    }
    public function all_customer()
    {
        $customers =  Customer::all();
        return view('admin.customer.all_customer',compact('customers'));
    }
    public function delete_customer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back();
    }
    public function update_customer($id)
    {
        $customer = Customer::find($id); 
        return view('admin.customer.update_customer',compact('customer'));
    }
    public function customer_update(Request $request,$id)
    {
        $customers = Customer::find($id);
        $customers->name = $request->name ;
        $customers->contact_no = $request->contact_no ;
        $customers->email = $request->email; ;
        $customers->services = $request->services; ;
        $customers->address = $request->address ;
        $customers->company = $request->company ;
        $customers->update();
        session()->flash('message','Customer added Successfully');
        return redirect()->back();
    }
    public function transaction()
    {
        $customers = Customer::all();
        $service = Service::all();
        return view('admin.transaction.transaction',compact('service','customers'));
    }
    public function transaction_add(Request $request)
    {
        $transaction = new Transaction();

        $transaction->date = Carbon::now();
        $transaction-> customer_id = $request->customer_id;
        $transaction-> service_id = $request->service_id ;
        $transaction-> amount = $request->amount ;
        $transaction->start_date = $request->start_date ;
        $transaction->end_date = $request->end_date ;
        $transaction->save();
        return redirect()->back();
    }
    public function service()
    {
        return view('admin.service.service');
    }
    public function add_service(Request $request)
    {
        $service = new Service();
        $service-> service_name = $request-> service_name ;
        $service-> price  = $request-> price ;
        $service-> description = $request-> description ;
        $service->save();
        return redirect()->back();
    }
    public function all_services()
    {
        $service = Service::all();
        return view('admin.service.all_services',compact('service'));
    }
    public function all_transaction()
    {
        $customer = Customer::all();
        return view('admin.transaction.all_transaction','customer');
    }
    public function dashboards()
    {
        $transaction = Transaction::all();
        return view('admin.dashboard',compact('transaction'));
    }
    public function sentSmS()
    {
        
    }
}
