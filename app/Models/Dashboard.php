<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dashboard extends Model
{
    public static function getClientblog()
    {
        return DB::table('blogs')->count();
    }

    public static function getTotalInquiries()
    {
        return DB::table('inquiries')->count();
    }

    public static function getTotalCarrier()
    {
        return DB::table('careers')->count();
    }

    public static function getTotalGetquotes()
    {
        return DB::table('getquotes')->count();
    }

}
