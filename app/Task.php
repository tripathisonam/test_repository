<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;
use Input;
use DB;

class Task extends Model {
protected $table = 'register_users';

	public static function insert($request) {
 		$user_id = 2;
 		$title  = Input::get('title');
        $short_desc = Input::get('short_desc');
        DB::insert('Insert Into task (user_id, title, short_desc,create_date) values(?, ? , ?, ?	)',[$user_id , $title, $short_desc, date("Y-m-d")]);
	}
	public static function show() {
 			$task = DB::select('select * from task');
         return $task;
	}

}