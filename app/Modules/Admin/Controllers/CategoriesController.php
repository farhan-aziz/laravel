<?php namespace App\Modules\Admin\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Modules\Admin\Requests\CategoriesRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller {

    public function __construct()
    {
        $this->middleware('adminAuth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $categories = Category::latest()->get();
        return view('Admin::Categories.index',compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('Admin::Categories.create');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param $request
     * @return Response
     */
	public function store(CategoriesRequest $request)
	{
        $category = new Category($request->all());
        $category->save();
        flash()->success('Category Created Successfully!');
        return redirect('/admin/categories/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $category = Category::findorfail($id);
        return view('Admin::Categories.show', compact('category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Category::findorfail($id);
        return view('Admin::Categories.edit', compact('category'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param CategorieRequest|CategoriesRequest $request
     * @return Response
     */
	public function update($id,CategoriesRequest $request)
	{
		$category = Category::findorfail($id);
        $category->update($request->all());
        flash()->success('Category Updated Successfully!');
        return redirect('/admin/categories/');
    }

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $category = Category::findorfail($id);
        $category->delete($id);
        flash()->success('Category Removed Successfully!');
        return redirect('admin/categories');
	}

}
