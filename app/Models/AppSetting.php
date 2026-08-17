<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'setting_key',
        'setting_value',
        'setting_group',
    ];

    /**
     * Helper untuk mengambil nilai setting secara cepat.
     */
    public static function getVal(string $key, mixed $default = null): mixed
    {
        $setting = static::where('setting_key', $key)->first();

        return $setting ? $setting->setting_value : $default;
    }
}
