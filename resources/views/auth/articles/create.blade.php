<x-auth-layout>
    <x-slot name="title">Dashboard | {{ Auth::user()->name }}</x-slot>
 <div class="container-fluid px-4">
    <h2 class="mt-4">Nuovo Articolo</h2>
    <!--livewire component-->
    
    <livewire:article-create-form/>
 </div>

</x-auth-layout>