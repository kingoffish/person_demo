<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class TestController extends Controller{

    /**
     * 使用redis
     * @param \Predis\Client $redis
     */

    public function redis(\Predis\Client $redis)
    {
        $redis->set('userName','6666');
        $name = $redis->get('userName');
        echo $name;

        redis::set('username',7777);
        $name = redis::get('username');
        echo $name;
    }

    /**
     * 使用dataBase
     */

    public function usedatabase()
    {
       $res =  DB::table('users')
            ->whereColumn('created_at', 'updated_at')
            ->toSql();

        var_dump($res);
    }




}