<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * 站点控制器
     */
    
    /**
     * 站点清单查看修改
     * @param string $value [description]
     */
    public function index()
    {
    	return view('site.index');
    }

    /**
     * 站点清单上传
     * @param string $value [description]
     */
    public function import()
    {
    	return view('site.import');
    }

    /**
     * 站点操作记录
     * @param string $value [description]
     */
    public function record()
    {
    	return view('site.record');
    }

    /**
     * 站点列表管理
     * @param string $value [description]
     */
    public function manage()
    {
    	return view('admin.site.manage');
    }
}
