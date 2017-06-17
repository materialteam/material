<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WarehouseController extends Controller
{
    /**
     * 仓库控制器
     */
    
    /**
     * 仓库物资库存列表
     * @return [type] [description]
     */
    public function index(){
    	return view('warehouse.index');
    }

    /**
     * 仓库物资清单列表页
     * @return [type] [description]
     */
    public function lists(){
    	return view('warehouse.lists');
    }

    /**
     * 仓库入库
     * @return [type] [description]
     */
    public function storage(){
    	return view('warehouse.storage');
    }

    /**
     * 仓库入库记录
     * @return [type] [description]
     */
    public function inRecord(){
    	return view('warehouse.inRecord');
    }

    /**
     * 仓库出库记录
     * @return [type] [description]
     */
    public function outRecord(){
        return view('warehouse.outRecord');
    }

}


