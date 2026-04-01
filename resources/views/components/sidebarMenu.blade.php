
<div class=" fixed top-0 left-0 bg-green-900 w-45 h-screen shadow-xl">
    
    <div class="pt-5 flex">
    <svg class="ml-2.5 mt-1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" width="31" height="31" viewBox="0 0 16 16" style="color: rgb(255, 255, 255);"><path fill="currentColor" fill-rule="evenodd" d="M4 2a.5.5 0 0 0-.447.276l-1.5 3A.5.5 0 0 0 2 5.5v2a.5.5 0 0 0 .5.5H3v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V8h.5a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 0-.053-.224l-1.5-3A.5.5 0 0 0 12 2zm9 3.618V7h-2V6h-1v1H8.5V6h-1v1H6V6H5v1H3V5.618L4.309 3h7.382zM6.5 10h1V9h-1zm2 0h1V9h-1zm-1 1.5h-1v-1h1zm1 0h1v-1h-1z" clip-rule="evenodd"></path></svg>
    <h1 class="text-[25px] font-bold ml-2.5 text-blue-100">UsMart</h1>
    </div>

    <div class="mt-15 ml-2.5 grid grid-cols-1 gap-2 text-2xl  text-amber-50 text-[15px] ">
            
        {{-- DASHBOARD --}}
            <a href="{{ route('admin.dashboard') }}"class= "flex items-center gap-3 p-2 hover:bg-gray-950 rounded w-40" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
            </svg>
                <span>Dashboard</span>
            </a>
            
            {{-- CUSTOMER --}}
            <a href="{{ route('admin.customers') }}" class= "flex items-center gap-3 p-2 hover:bg-gray-950 rounded w-40" > 
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><title>Baseline-people SVG Icon</title><path fill="currentColor" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3m-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3m0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5m8 0c-.29 0-.62.02-.97.05c1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5"/></svg>
                <span>Customer</span>
            </a>

            {{-- PRODUCTS --}}
    
                <a href="{{ route('admin.products') }}" class= "flex items-center gap-3 p-2 hover:bg-gray-950 rounded w-40">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
             <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
        </svg>
                    <span>Products</span>
                </a>
            
        {{-- Tranasaksi --}}
            <a href="{{ route('admin.transaction') }}" class= "flex items-center gap-3 p-2 hover:bg-gray-950 rounded w-40" >
           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 48 48"><title>Transaction-order SVG Icon</title><defs><mask id="ipSTransactionOrder0"><g fill="none" stroke-linejoin="round" stroke-width="4"><rect width="30" height="36" x="9" y="8" fill="#fff" stroke="#fff" rx="2"/><path stroke="#fff" stroke-linecap="round" d="M18 4v6m12-6v6"/><path stroke="#000" stroke-linecap="round" d="M16 19h16m-16 8h12m-12 8h8"/></g></mask></defs><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#ipSTransactionOrder0)"/></svg>
                <span>Transaction</span>
            </a>
      
            
        {{-- Setting --}}
        <a href="{{ route('admin.settings') }}" class= "flex items-center gap-3 p-2 hover:bg-gray-950 rounded w-40" >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
                <span>Settings</span>
        </a>

        {{-- Logout --}}
        <a href="{{ route('admin.settings') }}" class= "flex items-center gap-3 p-2 mt-25 hover:bg-red-600 rounded w-40" >
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
        </svg>
                <span>Logout</span>
        </a>
    </div>
</div>