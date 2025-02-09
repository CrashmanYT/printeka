<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Actions;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = OrderResource::class;
    public function form(Form $form): Form
    {
        return parent::form($form)
            ->schema([
            Wizard::make($this->getSteps())
                ->startOnStep($this->getStartStep())
                ->cancelAction($this->getCancelFormAction())
                ->submitAction($this->getSubmitFormAction())
                ->skippable($this->hasSkippableSteps())
                ->contained(false),
        ])->columns(null);
    }

    public function getSteps(): array
    {
        return [
            Wizard\Step::make('Order Details')
                ->schema([
                Section::make()->schema(OrderResource::getDetailsFormsSchema())->columns()
            ]),

            Wizard\Step::make('Order Items')
                ->schema([
                    Section::make()->schema([
                        OrderResource::getItemsRepeater()
                    ])
                ])
        ];
    }
}
