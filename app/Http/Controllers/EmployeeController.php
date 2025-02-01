<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    public function index() {
        return view('form');
    }

    public function store(Request $request) {
        $newEmployee = new Employee;
        $newEmployee->first_name = $request->input('name');
        $newEmployee->last_name = $request->input('surname');
        $newEmployee->age = $request->input('age');
        $newEmployee->salary = $request->input('salary');
        $newEmployee->role = $request->input('role');
        $newEmployee->job_tasks = $request->input('job_tasks');
        $newEmployee->last_modified_endpoint = $this->getPath($request);
        $newEmployee->last_modified_url = $this->getUrl($request);

        $addressObject = json_decode($request->input('address'), true);
        dump(gettype(json_decode($request->input('address'))));
        $address = $addressObject['address'];

        $address_pretty = "{$address['suite']}, {$address['street']}, {$address['city']}, {$address['zipcode']}";

        $newEmployee->address_json = $request->input('address');
        $newEmployee->address_pretty = $address_pretty;
        $newEmployee->save();
    }

    public function edit($id) {
        return view('form-update', ['id' => $id]);
    }

    public function update(Request $request, $id) {
        $newEmployee = Employee::find($id);
        $newEmployee->first_name = $request->input('name');
        $newEmployee->last_name = $request->input('surname');
        $newEmployee->age = $request->input('age');
        $newEmployee->salary = $request->input('salary');
        $newEmployee->role = $request->input('role');
        $newEmployee->job_tasks = $request->input('job_tasks');
        $newEmployee->last_modified_endpoint = $this->getPath($request);
        $newEmployee->last_modified_url = $this->getUrl($request);

        $addressObject = json_decode($request->input('address'), true);
        $address = $addressObject['address'];

        $address_pretty = "{$address['suite']}, {$address['street']}, {$address['city']}, {$address['zipcode']}";

        $newEmployee->address_json = $request->input('address');
        $newEmployee->address_pretty = $address_pretty;
        $newEmployee->save();
    }

    public function getPath(Request $request) {
        return $request->path();
    }

    public function getUrl(Request $request) {
        return $request->url();
    }
}


// {
//     "address": {
//     "suite": "1",
//     "street": "main street",
//     "city": "moscow",
//     "zipcode": "1000",
//     "geo": {
//     "lat": "-30.00",
//     "lng": "50.00"
//     }
//     }
//     }