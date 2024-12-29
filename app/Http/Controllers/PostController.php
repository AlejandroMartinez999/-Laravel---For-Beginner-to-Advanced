<?php

namespace App\Http\Controllers;

use App\Models\categories1;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\posts1;
use Illuminate\Support\Facades\File; // Correct import for File

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = posts1::paginate(3);
        return view('index', compact('posts'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = categories1::all();
        // return $categories;
        return view('create', compact('categories'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => ['required', 'max:2080', 'image'],
            'title' => ['required', 'max:255'],
            'Category_id' => ['required', 'integer'],
            'description' => ['required'],
        ]);
        // dd('success');
        $fileName = time() . '_' . $request->image->getClientOriginalName();
        $filepatch = $request->image->storeAs('uploads', $fileName);
        $post = new posts1();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category1_id = $request->Category_id;
        $post->image = 'storage/' . $filepatch;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $post = posts1::findOrfail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = posts1::findOrfail($id);
        $categories = categories1::all();
        return view('edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        // !return $request->all();
        $post = posts1::findOrFail($id);
        $request->validate([
            // 'image'=>['required','max:2080','image'],
            'title' => ['required', 'max:255'],
            'category_id' => ['required', 'integer'],
            'description' => ['required'],
        ]);
        // dd('success');
        if ($request->hasFile('image')) {

            $request->validate([
                'image' => ['required', 'max:2080', 'image'],
            ]);

            File::delete(public_path($post->image)); // Correct usage of File::delete with public_path
            $fileName = time() . '_' . $request->image->getClientOriginalName();
            $filepatch = $request->image->storeAs('uploads', $fileName);
            $post->image = 'storage/' . $filepatch;
        }
        // $post = new posts1();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->category1_id = $request->category_id;
        $post->save();

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // return $id;
        $post = posts1::findOrFail($id);

        $post->delete();
        return redirect()->route('posts.index');
    }

    public function trash()
    {
        // return 'hello';

        $posts = posts1::onlyTrashed()->get();
        return view('trasehed', compact('posts'));
    }

    public function restore($id)
    {
        // return 'gagagafg'
        $post = posts1::onlyTrashed()->findOrFail($id);

        $post->restore();

        return redirect()->back();
    }
    public function forceDelete($id)
    {
        //   return 'hello';
        $post = posts1::onlyTrashed()->findOrFail($id);
        File::delete(public_path($post->image)); // Correct usage of File::delete with public_path

        $post->forceDelete();

        return redirect()->back();
    }
}
