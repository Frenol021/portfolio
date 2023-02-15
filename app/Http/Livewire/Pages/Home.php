<?php

namespace App\Http\Livewire\Pages;
use App\Charts\SkillChart;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $chart = new SkillChart;

        $chart->labels(['php', 'laravel', 'python', 'django', 'javacript','postgresql', 'mysql']);
        $chart->dataset('skills', 'bar', [85, 80, 90, 70, 80, 70, 90])
        ->backgroundColor('#f0ad4e');

        return view('livewire.pages.home', compact('chart'))->layout('layout.pages');
    }
}
