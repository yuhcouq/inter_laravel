<?php

namespace App\Http\Controllers;

use App\Repositories\PostEloquentRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * @var PostRepositoryInterface|\App\Repositoriesssss\Repository
     */
    protected $postRepository;
    public function __construct(PostEloquentRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
//    public function __construct(PostRepository $postRepository)
//    {
//        $this->postRepository = $postRepository;
//    }
    /**
     * Show all post
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postRepository->getAll();
        dd($posts);
        return view('home.posts', compact('posts'));
    }

    /**
     * Show single post
     *
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = $this->postRepository->find($id);

        return view('home.post', compact('post'));
    }

    /**
     * Create single post
     *
     * @param $request \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        //... Validation here

        $post = $this->postRepository->create($data);

        return view('home.post', compact('post'));
    }

    /**
     * Update single post
     *
     * @param $request \Illuminate\Http\Request
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        //... Validation here

        $post = $this->postRepository->update($id, $data);

        return view('home.post', compact('post'));
    }

    /**
     * Delete single post
     *
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->postRepository->delete($id);
        return view('home.post');
    }
}
