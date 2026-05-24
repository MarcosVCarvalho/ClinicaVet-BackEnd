<?php

namespace App\Observers;

use App\Models\Agendamento;
use Illuminate\Support\Facades\Log;

class AgendamentoObserver
{
    /**
     * Handle the Agendamento "created" event.
     */
    public function created(Agendamento $agendamento): void
    {
        Log::info("Novo agendamento criado para o pet ID: {$agendamento->pet_id} no dia {$agendamento->data_horario}.");
    }

    /**
     * Handle the Agendamento "updated" event.
     */
    public function updated(Agendamento $agendamento): void
    {
        //
    }

    /**
     * Handle the Agendamento "deleted" event.
     */
    public function deleted(Agendamento $agendamento): void
    {
        //
    }

    /**
     * Handle the Agendamento "restored" event.
     */
    public function restored(Agendamento $agendamento): void
    {
        //
    }

    /**
     * Handle the Agendamento "force deleted" event.
     */
    public function forceDeleted(Agendamento $agendamento): void
    {
        //
    }
}
