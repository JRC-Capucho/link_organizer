<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property-read int $id
 * @property int $order
 * @property string $title
 * @property string $platform_name
 * @property string $url
 */
class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    protected $guards = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function moveDown()
    {
        $this->move(+1);
    }

    public function moveUp()
    {
        $this->move(-1);
    }

    /**
     * @param  int  $to
     */
    private function move($to)
    {

        $order = $this->order;

        $newOrder = $this->order + $to;

        /** @var Link $swapWith */
        $swapWith = $this->user->links()->where('order', $newOrder)->first();

        $this->fill(['order' => $newOrder])->save();

        $swapWith->fill(['order' => $order])->save();
    }
}
