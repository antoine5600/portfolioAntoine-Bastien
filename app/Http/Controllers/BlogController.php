<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Backend\BackendController;
use Illuminate\Http\Request; 
use App\Models\Blog\Blog;

class BlogController extends Controller{


	public function index()
	{
		$blog = Blog::all();
		$blog = $blog->sortByDesc('date');
		// dd($blog);
		return view ("blog.index",compact('blog'));
	}

	public function create(Request $request)
	{
		$blog = new Blog;
		return view("blog.create",compact('blog'));
	}

	public function store(Request $request, Blog $blog)
	{
		$blog->title = $request->title;
		$blog->description = $request->description;
		$blog->image = $request->image;
		$blog->date = $request->date;
		$blog->content = $request->content;
		$blog->save();

		return redirect('blog');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$blog = Blog::find($id);

		return view('blog.edit',compact('blog'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$blog = Blog::find($id);

		$blog->title = $request->title;
		$blog->description = $request->description;
		$blog->date = $request->date;
		$blog->content = $request->content;
		$blog->save();

		return redirect('blog');
	}

	public function show($id)
	{
		$blog = Blog::find($id);
		return view('blog.show',compact('blog'));
	}

	public function destroy($id, $confirm=false)
	{
		$blog = Blog::find($id);

		if ( $confirm ) {
			$blog->delete();
			// flash()->info('delete OK!');
			return redirect('blog');
		}

		
		return view('blog.destroy', compact('blog'));
	}
}