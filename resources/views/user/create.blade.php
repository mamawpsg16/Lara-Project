<x-layout>
    <x-form.modal>
        @slot('modal_title')
            Add User
        @endslot
        @slot('modal_content')
            <form id="shit">
                <x-form.input  type="text" name="name" :value="old('name')" placeholder="name"></x-form.input>
                <x-form.input  type="email" name="email" :value="old('email')" placeholder="email"></x-form.input>
                <x-form.input  type="password" name="password" :value="old('password')" placeholder="password" minlength="7"></x-form.input>
                <x-form.input  type="password" name="password_confirmation" minlength="7" :value="old('password')" placeholder="password confirmation"></x-form.input>
            </form>
        @endslot
        @slot('buttons')
            <x-form.button class="btn-primary" id="add">Save</x-form.button>
        @endslot
    </x-form.modal>
    <script type="module">
        $(document).ready(function(){
            const success = function(response){
                Swal.fire(
                    'Success!',
                    '',
                    'success'
                    )

                let dt_table = $('#example').DataTable();	
	            if (response.request_status == 1)
				{
					dt_table.row.add(response.data).page('first').draw(false);
				}
            }
            const error = function(data){
                // alert('error');
            }
            // $('#shit').on('submit',function(e){
            //     e.preventDefault();
            //     let formData = $(this).serialize();
            //     console.log(object);
            // })
            $('#add').on('click',function(){
                const formData = new FormData();
                const shit =  $('form#shit').serialize();
                // formData.append('email', $('input[name="email"]').val());
                // formData.append('username', $('input[name="username"]').val());
                // formData.append('password', $('input[name="username"]').val());
                // formData.append('password_confirmation', $('input[name="password_confirmation"]').val());
                // console.log(formData.getAll());
                // console.log(formData.entries());
                // console.log(formData.values());
                sweetAlertAjaxToken(
                    'Are you sure you ?',
                    'ACCESS TOKEN', 
                    shit,
                    'POST', '/users', success, error
                );
            })
        })
    </script>
</x-layout>