$(document).ready(function() {
    $('.table').DataTable({
        paging: true,
        searching: true,
        ordering: true,
        responsive: true
    });

   
    $.ajax({
        url: '/api/auth/v1/employees',
        type: 'GET',
        success: function(response) {
            if (response.success) {
                let employees = response.easy;
                console.log(employees)
                let tableBody = $('#employeeTableBody');

                tableBody.empty();
                for (var a = 0; a < employees.length; a++) { 
                  
                    tableBody.append(`
                        <tr>
                            <td>${employees[a].u_name}</td>
                            <td>${employees[a].u_email}</td>
                            <td>${employees[a].d_name}</td>
                            <td>${employees[a].l_name}</td>
                            <td>${employees[a].employment_types_id}</td>
                            <td>
                              <a class="del" id="del" style="decoration: none;background-color: red; outline: none; border: 1px solid red; color:#fefefe; border-radius: 5px;padding: 5px" href="#">Delete</a>
                            </td>
                        </tr>
                    `);
                }

                // Loop through the data and append rows
                // employees.forEach(function(emp) {
                //     tableBody.append(`
                //         <tr>
                //             <td>${emp.u_name}</td>
                //             <td>${emp.u_email}</td>
                //             <td>${emp.d_name}</td>
                //             <td>${emp.l_name}</td>
                //             <td>${emp.employment_types_id}</td>
                //         </tr>
                //     `);
                // });

            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });

    $(document).on("click", ".del", function(){
        console.log('click');
    });



});