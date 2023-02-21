<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\car
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property int|null $age
 * @property string $mobile
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|car newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|car newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|car query()
 * @method static \Illuminate\Database\Eloquent\Builder|car whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|car whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class car extends Model
{
    use HasFactory;
}
