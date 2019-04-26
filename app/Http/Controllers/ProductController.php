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
          echo asset('storage/file.txt');
           Storage::disk('local')->put('file.txt', 'Contents');
          return response()->json(Product::all(),200);

      }

      public function store(Request $request)
      {
          $product = Product::create([
              'name' => $request->name,
              'description' => $request->description,
              'units' => $request->units,
              'price' => $request->price,
              'image' => $request->image

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
          if($request->hasFile('image')){
              $name = time()."_".$request->file('image')->getClientOriginalName();
              $request->file('image')->move(public_path('images'), $name);
          }
          return response()->json(asset("images/$name"),201);
      }

      public function update(Request $request, Product $product)
      {
          $status = $product->update(
              $request->only(['name', 'description', 'units', 'price', 'image'])
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
