<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CatatanResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'user_id' => $this->user_id,
            'jenis_sampah' => $this->jenisSampah->jenis,
            'harga_sampah' => $this->jenisSampah->harga_nasabah,
            'keterangan' => $this->keterangan,
            'berat' => $this->berat,
            'created_at' =>$this->created_at, 
            'updated_at' =>$this->updated_at, 
        ];

    }
}