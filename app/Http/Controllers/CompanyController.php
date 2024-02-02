<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd ( $companies = Company::all());
        $companies = Company::paginate(10);
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.companies.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $validatedData = $request->validated();

        $company = new Company([
            'name' => $validatedData['name'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('company_images', 'public');
            $company->image = basename($imagePath);
        }

        $company->save();

        return redirect()->route('companies.index');
    }
    /**
     * Display the specified resource.
     */

    public function show($id)
    {
        $company = Company::find($id);
        return view('admin.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
        return view('admin.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, $id)
    {
        $validatedData = $request->validated();

        $company = Company::findOrFail($id);

        $company->name = $validatedData['name'];

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete('company_images/' . $company->image);

            // Upload the new image
            $imagePath = $request->file('image')->store('company_images', 'public');
            $company->image = basename($imagePath);
        }

        $company->save();

        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //  dd($company);
        // //
        if ($company->image) {
            Storage::disk('public')->delete('company_images/' . $company->image);
        }


        $company->delete();

        return redirect()->route('companies.index')->with('success', 'Company deleted successfully.');
    }
}
