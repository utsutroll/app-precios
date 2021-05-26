<x-app-layout>
    @livewire('admin.categories.category-component')
</x-app-layout>
    



@push('scripts')

    <script type="text/javascript">

        window.addEventListener('DOMContentLoaded', () =>{
            const overlay = document.querySelector('#overlay')
            const delBtn = document.querySelector('#create-modal')
            const closeBtn = document.querySelector('#close-modal')

            const toggleModal = () => {
                overlay.classList.toggle('hidden')
                overlay.classList.toggle('flex')
            }

            delBtn.addEventListener('click', toggleModal)

            closeBtn.addEventListener('click', toggleModal)
        })

    window.livewire.on('categoryAdded',()=>{
        $('#create-modal').modal('hide');

        $.toast({
            heading: 'Notificación',
            text: 'La Categoría se creó con éxito.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500, 
            stack: 6
          });
    });

    window.livewire.on('categoryEdited',()=>{
        $('#edit-modal').modal('hide');

        $.toast({
            heading: 'Notificación',
            text: 'La Categoría se actualizó con éxito.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'success',
            hideAfter: 3500, 
            stack: 6
          });
    });
    window.livewire.on('categoryDeleted',()=>{

        $.toast({
            heading: 'Notificación',
            text: 'La Categoría se eliminó con éxito.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'info',
            hideAfter: 3500, 
            stack: 6
          });
    });
    window.livewire.on('categoryDeleted_e',()=>{

        $.toast({
            heading: 'Notificación',
            text: 'La Categoría se encuetra asignada a un producto, no puede ser eliminada.',
            position: 'top-right',
            loaderBg:'#ff6849',
            icon: 'error',
            hideAfter: 3500, 
            stack: 6
          });
    });

    </script>
@endpush    