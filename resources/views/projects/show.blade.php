<x-layouts.app>

    <div class="grid grid-cols-3 gap-6">

        <livewire:projects.show :project="$projects"/>

        <livewire:projects.proposals :project="$projects"/>
    </div>

</x-layouts.app>
