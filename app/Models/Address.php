<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Address
 *
 * @property int $id
 * @property string $address
 * @property int $customer_id
 * @property float|null $lat
 * @property float|null $lng
 * @property int|null $state
 * @property int|null $city
 * @property string $data
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Address newQuery()
 * @method static \Illuminate\Database\Query\Builder|Address onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Address withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Address withoutTrashed()
 * @mixin \Eloquent
 */
class Address extends Model
{
    use HasFactory, SoftDeletes;

    public static $cities = array(1 => array(1 => '臺北市', 2 => '新北市', 3 => '桃園市', 4 => '
    臺中市', 5 => '臺南市', 6 => '高雄市',),);
    public static $states = [
        1 => "臺灣",
        2 => "日本",
        3 => "韓國",
        // 4 => "اصفهان",
        // 5 => "البرز",
        // 6 => "ایلام",
        // 7 => "بوشهر",
        // 8 => "تهران",
        // 9 => "چهارمحال و بختیاری",
        // 10 => "خراسان جنوبی",
        // 11 => "خراسان رضوی",
        // 12 => "خراسان شمالی",
        // 13 => "خوزستان",
        // 14 => "زنجان",
        // 15 => "سمنان",
        // 16 => "سیستان و بلوچستان",
        // 17 => "فارس",
        // 18 => "قزوین",
        // 19 => "قم",
        // 20 => "کردستان",
        // 21 => "کرمان",
        // 22 => "کرمانشاه",
        // 23 => "کهگیلویه و بویراحمد",
        // 24 => "گلستان",
        // 25 => "لرستان",
        // 26 => "گیلان",
        // 27 => "مازندران",
        // 28 => "مرکزی",
        // 29 => "هرمزگان",
        // 30 => "همدان",
        // 31 => "یزد",
    ];
}
