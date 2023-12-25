<?php

namespace App\Livewire\Panel\Reports;

use Livewire\Component;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;

class Order extends Component
{
    public function render()
    {
        
        $columnChartModel = 
            LivewireCharts::ColumnChartModel()
            ->setTitle('Expenses by Type')
            ->addColumn('Food', 100, '#f6ad55')
            ->addColumn('Shopping', 200, '#fc8181')
            ->addColumn('Travel', 300, '#90cdf4')
        ;
    
        return view('livewire.panel.reports.order' , [
            'columnChartModel' => $columnChartModel,
        ]);
    }
}
