<x-layout>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Salary</th>
                <th>Office</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script type="module">
        $(document).ready(function() {

            var data = [{
                    "name": "Tiger Nixon",
                    "position": "System Architect",
                    "salary": "3,120",
                    "start_date": "2011/04/25",
                    "office": "Edinburgh",
                    "extn": "5421"
                },
                {
                    "name": "Garrett Winters",
                    "position": "Director",
                    "salary": "5,300",
                    "start_date": "2011/07/25",
                    "office": "Edinburgh",
                    "extn": "8422"
                }
            ]
            $('#example').DataTable({
                data: data,
                lengthMenu: [
                    [10, 25, 50, -1],
                    [10, 25, 50, 'All']
                ],
                language : {
				    sLengthMenu: "Show _MENU_"
			    },
                columns: [{
                        data: 'name'
                    },
                    {
                        data: 'position'
                    },
                    {
                        data: 'salary',
                        // render: function(data, type, row) {
                        //     if (data == '3,120') {
                        //         return '$' + data;
                        //     } else {
                        //         return data;
                        //     }
                        // }
                    },
                    {
                        data: 'office',
                    }
                ],
                columnDefs: [
                    {
                        targets: [0, 3],
                        visible: true,
                        searchable: false
                    }, 
                    {
                        targets: 2,
                        render: function(data, type, row) {
                            if (data == '3,120') {
                                return '$' + data;
                            } else {
                                return data;
                            }
                        }
                    }
                ]
            });
        })
    </script>
</x-layout>