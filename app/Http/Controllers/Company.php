<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Companys;
use App\User;
use App\Services\CheckPhoneNumber;


class Company extends Controller
{
	protected $rules = [
		'name_company' => 'required',
		'address' => 'required',
		'phone' => 'required|phoneRequired'
	];
	protected $messager = [
	    'name_company.required' => 'Cần Phải nhập thông tin Company',
	    'address.required' => 'Cần Phải nhập thông tin Address',
	    'phone.required' => 'Cần Phải nhập thông tin Phone',
        'phone.phoneRequired' => 'không đúng định dạng'
    ];

    protected $not_is_deleted = 0;
    
    protected $is_deleted = 1;


    public function index( Request $request)
    {
    	$companyEdit = null;
    	if (!empty($request->get('id'))) {
    		$companyEdit = DB::table('company')
                ->where('id', $request->get('id'))
                ->first();
    	}
    	$data = db::table('company')->where('is_deleted', $this->not_is_deleted)->get();
    	return view('company/index', compact('data','companyEdit'));
    }

    public function show($id)
    {
        $data = DB::table('company')
            ->where('id', $id)
            ->first();
        if (empty($data)) {
            return abort(404);
        }
        return view('company/show', compact('data'));
    }

    public function add(Request $request){
    	$this->validate($request , $this->rules, $this->messager);
    	$data = new Companys;
    	$data->name_company = $request->get('name_company');
    	$data->address = $request->get('address');
    	$data->phone = $request->get('phone');
        $data->is_deleted = $this->not_is_deleted;
    	$data->save();
    	return redirect('index/company');
    }

    public function edit($id, Request $request)
    {
    	$this->validate($request , $this->rules);
    	$data = db::table('company')->where('id',$id);
    	if (!empty($data)) {
            $data->update([
            	'name_company' => $request->get('name_company'),
            	'address' => $request->get('address'),
            	'phone' => $request->get('phone')
            ]);
        }
        return redirect('index/company');
    }

    public function delete($id){
        $data = DB::table('company')->where('id', $id);
        if (!empty($data)) {
            $data->update([
                'is_deleted' => $this->is_deleted
            ]);
        }
        return redirect('index/company');
    }
}
