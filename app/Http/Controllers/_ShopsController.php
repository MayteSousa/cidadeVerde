<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#use App\Category;
#use App\Day;
use App\Http\Controllers\Controller;
#use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyShopRequest;
#use App\Http\Requests\StoreShopRequest;
#use App\Http\Requests\UpdateShopRequest;
use \App\Models\User;
use \App\Models\Shop;
use Illuminate\Support\Facades\Gate;
#use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShopsController extends Controller
{
    #use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('shop_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shops = Shop::all();

        return view('admin.shops.index', compact('shops'));
    }

    public function create()
    {
        abort_if(Gate::denies('shop_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$categories = Category::all()->pluck('name', 'id');
        

        return view('admin.shops.create', compact('categories', 'days'));
    }

    public function store(Request $request)
    {
        $shop = Shop::create($request->all());
      
        return redirect()->route('ecoponto.index','$shop');
    }

    public function edit(Shop $shop)
    {
        abort_if(Gate::denies('shop_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        #$categories = Category::all()->pluck('name', 'id');
        #$days = Day::all();

        $shop->load('categories', 'created_by', 'days');

        return view('shops.edit', compact('categories', 'shop', 'days'));
    }

    public function update(Request $request, Shop $shop)
    {
        if(!$request->active){
            $request->merge([
                'active' => 0
            ]);
        }
        $shop->update($request->all());


        return redirect()->route('shops.index');
    }

    public function show(Shop $shop)
    {
        abort_if(Gate::denies('shop_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

#        $days = Day::all();
 #       $shop->load('categories', 'created_by');

        return view('ecoponto.show');
    }

    public function destroy(Shop $shop)
    {
        abort_if(Gate::denies('shop_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $shop->delete();

        return back();
    }

    public function massDestroy(MassDestroyShopRequest $request)
    {
        Shop::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
