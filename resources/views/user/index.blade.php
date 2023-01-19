<x-layout>
    @extends('user.create')
    <div class="row">
        <div class="col">
            <div class="text-end">
                <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Create
                </button>
            </div>
        </div>
    </div>
    
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script type="module">
        $(document).ready(function() {
            let users;
            const dataTable = () => {
                $('#example').DataTable({
                    data: users,
                    lengthMenu: [
                        [10, 25, 50, -1],
                        [10, 25, 50, 'All']
                    ],
                    language : {
                        sLengthMenu: "Show _MENU_"
                    },
                    // columns: [
                    //     {
                    //         data: 'name'
                    //     },
                    //     {
                    //         data: 'position'
                    //     },
                    //     {
                    //         data: 'salary',
                    //         // render: function(data, type, row) {
                    //         //     if (data == '3,120') {
                    //         //         return '$' + data;
                    //         //     } else {
                    //         //         return data;
                    //         //     }
                    //         // }
                    //     },
                    //     {
                    //         data: 'start_date',
                    //     },
                    //     {
                    //         data: 'office',
                    //     },
                    //     {
                    //         data: 'extn',
                    //     }
                    // ],
                    // columnDefs: [
                    //     // {
                    //     //     targets: [0, 3],
                    //     //     visible: true,
                    //     //     searchable: false
                    //     // }, 
                    //     {
                    //         targets: 2,
                    //         render: function(data, type, row) {
                    //             if (data == '3,120') {
                    //                 return '$' + data;
                    //             } else {
                    //                 return data;
                    //             }
                    //         }
                    //     }
                    // ]
                });
            } 
          
            const success = function(data){
                users = data;
                dataTable()
                // console.log(users);
            }
            const error = function(data){
                console.log('error');
            }
            sweetAlertAjaxGet(
                'GET',
                '/getUsers',
                success,
                error
            );
            console.log(users,'ayo');
                // var data = [
            //     {
            //         "name": "Tiger Nixon",
            //         "position": "System Architect",
            //         "salary": "3,120",
            //         "start_date": "2011/04/25",
            //         "office": "Edinburgh",
            //         "extn": "5421"
            //     },
            //     {
            //         "name": "Garrett Winters",
            //         "position": "Director",
            //         "salary": "5,300",
            //         "start_date": "2011/07/25",
            //         "office": "Edinburgh",
            //         "extn": "8422"
            //     }
            // ]
            // let data = [
            //         [
            //             "Tiger Nixon",
            //             "System Architect",
            //             "Edinburgh",
            //             "5421",
            //             "2011/04/25",
            //             "$3,120"
            //         ],
            //         [
            //             "Garrett Winters",
            //             "Director",
            //             "Edinburgh",
            //             "8422",
            //             "2011/07/25",
            //             "$5,300"
            //         ]
            // ]
           

           $('#exampleModal').on('shown.bs.modal', () => {
                
            })
        })
    </script>
</x-layout>