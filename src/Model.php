<?php

declare(strict_types=1);

/*

 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lifeids\Eloquent\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

abstract class Model extends Eloquent
{
    use Traits\ScopesTrait;

    /**
     * @var array
     */
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
