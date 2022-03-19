<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'createdDate' => $this->created_at,
            'subComment' => self::collection($this->childComments)
        ];
    }
}
