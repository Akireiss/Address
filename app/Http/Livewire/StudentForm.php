<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use App\Models\Barangay;
use App\Models\Municipality;
class StudentForm extends Component
{
    public $selectedCity;
    public $selectedMunicipality;
    public $selectedBarangay;
    public $municipalities = []; // Initialize as empty array
    public $barangays = []; // Initialize as empty array

    public function render()
    {
        $cities = City::all();
        return view('livewire.student-form', compact('cities'))->extends('layouts.app');
    }

    public function updatedSelectedCity($cityId)
    {
        $this->municipalities = Municipality::where('city_id', $cityId)->get();
        $this->selectedMunicipality = null;
        $this->selectedBarangay = null;
        $this->barangays = [];
    }

    public function updatedSelectedMunicipality($municipalityId)
    {
        $this->barangays = Barangay::where('municipality_id', $municipalityId)->get();
        $this->selectedBarangay = null;
    }
}

