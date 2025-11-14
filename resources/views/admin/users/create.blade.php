<x-admin-layout :breadcrumbs="[
    [
        'name'=>'Dashboard',
        'href'=> route('admin.dashboard'),
    ],
    [
        'name' => 'Roles',
        'href'=> route('admin.users.index'),
    ],
    ['name'=>'Nuevo'],
]">


<div class="flex justify-end mt-4">
 <x-wire-button type="submit" bllue>Guardar</x-wire-button>
</div>

</form> 

</x-wire-card>


</x-admin-layout>