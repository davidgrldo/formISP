<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Customer\CustomerRequest;
use App\Http\Requests\Customer\CustomerUpdateRequest;
use App\Models\MsCustomer;
use DB;
use DataTables;
use Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.customer.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request)
    {
        try {
            DB::beginTransaction();

            MsCustomer::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'address' => $request->address,
                'company_name' => $request->company_name,
                'role' => $request->role,
                'nationallity' => $request->nationallity,
                'password' => \bcrypt($request->password)
            ]);

            DB::commit();
            return response()->json(['message' => 'Customer successfully added.'], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
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
        // $data = MsCustomer::findOrFail($id);
        // return view('pages.customer.create_edit', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MsCustomer::findOrFail($id);
        return view('pages.customer.create_edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerUpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = MsCustomer::findOrFail($id);

            $data->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'role' => $request->role,
                'address' => $request->address,
                'company_name' => $request->company_name,
                'nationallity' => $request->nationallity,
            ]);

            if (!empty($request->password)) {
                $data->update(['password' => \bcrypt($request->password)]);
            }

            DB::commit();
            Session::flash('notification', trans('notification.itemmaster.created'));
            return response()->json(['message' => 'Customer has been updated'], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
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
        MsCustomer::whereIn('id', explode(',', $id))->delete();
        return response()->json(['message' => trans('lang.user_delete')], 200);
    }

    /**
     * Restore the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        MsCustomer::whereIn('id', explode(',', $id))->restore();
        return response()->json(['message' => trans('lang.user_delete')], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        MsCustomer::whereIn('id', explode(',', $id))->forceDelete();
        return response()->json(['message' => trans('lang.user_delete')], 200);
    }

    /**
     * Datatables User
     *
     * @return response
     * */
    public function data(Request $request)
    {
        $data = MsCustomer::all();

        return DataTables::of($data)
            ->addIndexColumn()
            ->editColumn('name', function ($item) {
                return '<a href="' . route('customer.edit', $item->id) . '">' . $item->name . '</a>';
            })
            ->editColumn('deleted_at', function ($item) {
                $green = "<span style='color: green'><i class='icon-checkmark'></i></span>";
                $red = "<span style='color: red'><i class='icon-x'></i></span>";
                return is_null($item->deleted_at) ? $green : $red;
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function showProfile(Request $request)
    {
        $data = MsCustomer::findOrFail(auth('customer')->user()->id);
        return view('pages.customer.profil', compact('data'));
    }

    public function updateProfile(CustomerUpdateRequest $request, $id)
    {
        try {
            DB::beginTransaction();
            $data = MsCustomer::findOrFail($id);

            $data->update([
                'phone' => $request->phone,
                'email' => $request->email,
                'role' => $request->role,
                'address' => $request->address,
                'company_name' => $request->company_name,
                'nationallity' => $request->nationallity,
            ]);

            if (!empty($request->password)) {
                $data->update(['password' => \bcrypt($request->password)]);
            }

            DB::commit();
            Session::flash('notification', trans('notification.itemmaster.created'));
            return response()->json(['message' => 'Customer has been updated'], 200);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
