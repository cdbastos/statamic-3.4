<?php
namespace App\Contracts;

use Illuminate\Contracts\Support\Renderable;

interface Step {
    public function prevStep(): void;
    public function nextStep(): void;
    public function submit(): void;
    public function render(): Renderable;
}
