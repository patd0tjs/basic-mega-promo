<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    use HasFactory;

    protected $fillable = ['note', 'user_id'];

    public function join()
    {
        $data = [
            'customer' => request()->post('customer'),
            'mobile'   => request()->post('mobile'),
            'email'    => request()->post('email'),
            'receipt'  => request()->post('receipt')
        ];

        DB::table('entries')->insert($data);
    }
}
