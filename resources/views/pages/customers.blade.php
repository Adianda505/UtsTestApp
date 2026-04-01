@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex min-h-screen">   
    {{-- @include('components.sidebarMenu')  --}}
    
    @include('layout.admin')
    
    <div class="flex-1 flex flex-col bg-gray-100 ">
        
        <div>
            <x-header title="Customer" />
        </div>
    
    <div class="ml-2.5 mr-2.5">
        {{-- Componen Tabel --}}
    </div>
    
    </div>
</div>

    
