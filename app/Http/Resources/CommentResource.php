<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CommentResource extends JsonResource
{
    /**
     * @param Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'writerName' => $this->writer_name,
            'comment' => $this->content,
            'createdDate' => Carbon::make($this->created_at)->isoFormat('DD-MM-YYYY HH:mm'),
            'subComment' => self::collection($this->childComments)
        ];
    }
}
