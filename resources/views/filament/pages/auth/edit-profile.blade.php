<div class="container" style="max-width: 1000px;width: 100%;text-align: left">
    <header class="fi-header flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between mt-6 mb-6">
            <div>
                <h1 class="fi-header-heading text-2xl font-bold tracking-tight text-gray-950 dark:text-white sm:text-3xl">
                    Perfil do usuário
                </h1>
            </div>
    </header>
       <div class="mt-6">
           <x-filament-panels::form wire:submit="save">
               {{ $this->form }}

               <x-filament-panels::form.actions
                   :actions="$this->getCachedFormActions()"
                   :full-width="$this->hasFullWidthFormActions()"
               />
           </x-filament-panels::form>
       </div>


</div>
