<?php

namespace App\Http\Controllers;
use App\Models\Farmer;
use App\Models\Product;
use App\Models\Municipality;
use App\Models\FarmersProduct;
use App\Http\Requests\FarmerRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FarmerController extends Controller
{

    public function index()
    {
        $farm = Farmer::with('farmer_product')->get();
        $farm->map(function($item){  
            $farmer_product = $item->farmer_product;
            $farmer_product->map(function($list){
                $product_data = Product::findOrFail($list->product_id);
                $list->product_name = $product_data->product_name;
                $list->description = $product_data->description;
                $list->categories = $product_data->categories;
                $list->quantity = $product_data->quantity;
                $list->price = $product_data->price;
                $list->date_harvest = $product_data->date_harvest;
                $municipality_data = Municipality::findorfail($list->municipal_id);
                $list->municipality = $municipality_data->municipality;
            });
        });

        $municipalities = Municipality::get();
        return view('admin.farmer.farmer-management',compact('municipalities','farm'));
    }

    public function create(FarmerRequest $request)
    {
        $validated = $request->validated();
        $_farmer = Farmer::create([
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'barangay' => $validated['barangay'],
        ]);

        $_product = Product::create([
            'product_name' => $validated['product'],
            'description' => $validated['description'],
            'categories' => $validated['category'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'date_harvest' => Carbon::parse($validated['date_harvest'])->format('Y-m-d\TH:i'),
        ]);

        $_farmer_product = FarmersProduct::create([
            'farmer_id' => $_farmer->id,
            'product_id' => $_product->id,
            'municipal_id' => $validated['municipality_id']
        ]);

       
        return redirect()->back()->with('message', 'Successfull Added!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $farm = Farmer::with('farmer_product')->where('id', $id)->get();
        $farm->map(function($item){  
            $farmer_product = $item->farmer_product;
            $farmer_product->map(function($list){
                $product_data = Product::findOrFail($list->product_id);
                $list->product_name = $product_data->product_name;
                $list->description = $product_data->description;
                $list->categories = $product_data->categories;
                $list->quantity = $product_data->quantity;
                $list->price = $product_data->price;
                $list->date_harvest = $product_data->date_harvest;
                $municipality_data = Municipality::findorfail($list->municipal_id);
                $list->municipality = $municipality_data->municipality;
            });
        });

        $municipalities = Municipality::get();
        return view('admin.farmer.edit-farmer-management',compact('municipalities','farm'));
    }

    public function update(Request $request, $farm_id, $product_id)
    {
        $_farmer = Farmer::where('id', $farm_id)->first();
        $_farmer->fname = $request->fname;
        $_farmer->lname = $request->lname;
        $_farmer->email = $request->email;
        $_farmer->phone = $request->phone;
        $_farmer->barangay = $request->barangay;
        $_farmer->update();

        $_product = Product::where('id', $product_id)->first();
        $_product->product_name = $request->product;
        $_product->description = $request->description;
        $_product->categories = $request->category;
        $_product->quantity = $request->quantity;
        $_product->date_harvest = Carbon::parse($request->date_harvest)->format('Y-m-d\TH:i');
        $_product->update();
       
        return redirect()->route('farmer.view')->with('message', 'Successfull Updated!');
    }

    public function destroy($id)
    {
        //
    }
}
