<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = DB::table('products')->get();
        return view('fontend.product.list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('fontend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|max:255',
            'price'      => 'required|numeric',
            'content'    => 'required',
            'image_path' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('product/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $active = $request->has('active')? 1 : 0;
            $product_id = DB::table('products')->insertGetId([
                'name'       => $request->input('name'),
                'price'      => $request->input('price'),
                'content'    => $request->input('content'),
                'image_path' => $request->input('image_path'),
                'active'     => $active]
                );
            return redirect('product/create')
            ->with('message', 'Sản phẩm được tạo thành công với ID: ' . $product_id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = DB::table("products")->find($id);
        return view("fontend/product/update",compact("edit"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name'       => 'required|max:255',
            'price'      => 'required|numeric',
            'content'    => 'required',
            'image_path' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('product/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            // Lưu thông tin vào database, phần này sẽ giới thiệu ở bài về database
            $active = $request->has('active')? 1 : 0;
            $update = DB::table('products')->where("id",$id)->update([
                    'name'       => $request->input('name'),
                    'price'      => $request->input('price'),
                    'content'    => $request->input('content'),
                    'image_path' => $request->input('image_path'),
                    'active'     => $active,
                    'updated_at' => \Carbon\Carbon::now()]
            );
            return redirect('product')
                ->with('message', 'Sản phẩm được chinh sữa thành công với ID: ' .$id)
                ->withinput();
        //
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
