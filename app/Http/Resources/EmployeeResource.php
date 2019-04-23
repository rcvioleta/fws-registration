<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array
   */
  public function toArray($request)
  {
    return [
      'emp_id' => $this->emp_id,
      'first_name' => $this->first_name,
      'last_name' => $this->last_name,
      'project' => $this->project
    ];
  }
}
