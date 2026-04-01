@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex flex-row">   
    {{-- @include('components.sidebarMenu')  --}}

    @include('layout.admin')
    <div>
        <x-header title="Products" />
    </div>
    
     <div class="ml-2.5 mr-2.5">
        {{-- Componen Tabel --}}
    </div>
    
</div>