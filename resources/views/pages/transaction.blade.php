@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex flex-row">   
    {{-- @include('components.sidebarMenu')  --}}
    
    @include('layout.admin')   

    <div>
        <x-header title="Transaction" />
    </div>
    
</div>


