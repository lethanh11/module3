<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;


class CustomerController extends Controller
{
    function index(){
        // $customer= DB::select('SELECT * FROM customer WHERE `id` = 1');
        // return view('modules.customer.index',['customer'=>$customer]);
        $customers = Customer::all();

        return view('modules.customer.index', compact('customers'));

    }
    function create(){
        return view('modules.customer.create');
    }

    protected function validatedData() {
        return request()->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email'
        ]);
    }

    function store(){
        // $customer= DB::insert('INSERT INTO `customer` (`name`,`phone`,`email`)
        // VALUES(?,?,?,?)', [$request->name,$request->phone,$request->email,$request->address]);
        // return redirect('/customer/index');
        Customer::create($this->validatedData());

        return redirect('modules.customer.index');
    }
    function show(Customer $customer){
        // $customer= DB::select('SELECT * FROM customer WHERE `id` = ?',[$id]);
        // return view('modules.customer.show',['customer'=>$customer]);
        return view('modules.customer.show', compact('customer'));
    }
    function edit(Customer $customer){
        // $customer= DB::select('SELECT * FROM customer WHERE `id` = ?',[$id]);
        // return view('modules.customer.edit',['customer'=>$customer[0]]);
        return view('modules.customer.edit', compact('customer'));
    }
    function update(Customer $customer){
        // $customer=DB::update('UPDATE `customer` SET
        // `name` = ?,`phone` = ?,`email` = ?
        // WHERE `id` = ?', [$request->name,$request->phone,$request->email,$request->address,$id]);
        // return redirect('/customer/index');
        $customer->update($this->validatedData());

        return redirect('/customer/index');
    }
    function destroy(Customer $customer){
        // DB::update('UPDATE `customer` SET
        // `is_delete` = 1
        // WHERE `id` = ?', [$id]);
        // return redirect('/customer/index');

        $customer->delete();

        return redirect('/customer/index');
    }
}
