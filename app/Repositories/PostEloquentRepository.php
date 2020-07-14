<?php
namespace App\Repositories;
use App\Post;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Carbon;

class PostEloquentRepository extends EloquentRepository implements PostRepositoryInterface
{
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    /**
     * Get 5 posts hot in a month the last
     * @return mixed
     */
    public function getPostHost()
    {
        return $this->_model::where('created_at', '>=', Carbon::now()->subMonth())->orderBy('view', 'desc')->take(5)->get();
    }

}
