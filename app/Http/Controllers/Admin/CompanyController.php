<?php

namespace App\Http\Controllers\Admin;

use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Scope;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use App\Http\Requests\CompanyRequest;

class CompanyController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Company $topic)
	{
		$company = $topic->getCompany(15);
		$side_bar = 'company/index';
		return view('admin.company.company',compact('company','side_bar'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
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
		$data     = Company::find($id);
		$scopes   = Scope::where('parent_id','0')->get();
		$side_bar = 'company/index';
		// return $data;
		return view('admin.company.edit',compact('data', 'scopes', 'side_bar'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(CompanyRequest $request, $id)
	{
		$company = Company::findOrFail($id);
		if (empty($company)) {
			return $this->errorBackTo("该公司不存在,请返回列表并选择其他公司");
		}

		$data = $request->except(['_token','scope']);
		try{
			$affectedRows = Company::where('com_id',$id)->update($data);
			if ($affectedRows) {
				return $this->successRoutTo("admin.company.index", "保存成功");
			}
		}
		catch (\Exception $e){
			// dump($e->getMessage());
			return $this->errorBackTo(['error' => $e->getMessage()]);
			// dump($error);
			// exit;
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
		try{
			if (Company::destroy($id)) {
				return $this->successRoutTo("admin.company.index", "删除操作成功");
			}
		}
		catch (\Exception $e){
			return $this->errorBackTo(['error' => $e->getMessage()]);
		}
	}
}
