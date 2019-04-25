<?php

  namespace App\Http\Controllers;

  use App\Product;
  use Illuminate\Http\Request;

  class ProductController extends Controller
  {
      // public function __construct()
      // {
      //     $this->middleware('auth');
      // }

      public function index()
      {
          return response()->json(Product::all(),200);
      }

      public function store(Request $request)
      {
          $product = Product::create([
              'name' => $request->name,
              'description' => $request->description,
              'units' => $request->units,
              'price' => $request->price,
              'avatar' => $request->avatar

          ]);

          return response()->json([
              'status' => (bool) $product,
              'data'   => $product,
              'message' => $product ? 'Product Created!' : 'Error Creating Product'
          ]);
      }

      public function show(Product $product)
      {
          return response()->json($product,200);
      }

      public function uploadFile(Request $request)
      {
          if($request->hasFile('avatar')){
              $name = time()."_".$request->file('avatar')->getClientOriginalName();
              $request->file('avatar')->move(public_path('avatars'), $name);
          }
          return response()->json(asset("avatars/$name"),201);
      }

      public function update(Request $request, Product $product)
      {
          $status = $product->update(
              $request->only(['name', 'description', 'units', 'price', 'avatar'])
          );

          return response()->json([
              'status' => $status,
              'message' => $status ? 'Product Updated!' : 'Error Updating Product'
          ]);
      }

      public function updateUnits(Request $request, Product $product)
      {
          $product->units = $product->units + $request->get('units');

          $status = $product->save();

          return response()->json([
              'status' => $status,
              'message' => $status ? 'Units Added!' : 'Error Adding Product Units'
          ]);
      }

      public function destroy(Product $product)
      {
          $status = $product->delete();

          return response()->json([
              'status' => $status,
              'message' => $status ? 'Product Deleted!' : 'Error Deleting Product'
          ]);
      }

      // public function update_avatar(Request $request){
      //
      //      $request->validate([
      //          'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      //      ]);
      //
      //      $user = Auth::user();
      //      $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
      //      $request->avatar->storeAs('avatars', $avatarName);
      //      $user->avatar = $avatarName;
      //      $user->save();
      //      return back();
      //
      //
      //      }
  }
