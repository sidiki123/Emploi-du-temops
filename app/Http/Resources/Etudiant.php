<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Etudiant extends JsonResource
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
            'nom'=> "Nom de l'étudiant: " . $this->nom,
            'prenom'=> "Prenom de l'étudiant: " . $this->prenom,
            'email'=> "Email de l'étudiant: " . $this->email,
            'idniveau'=> "Niveau dde l'étudiant: " . $this->idniveau,
        ];
    }
}
