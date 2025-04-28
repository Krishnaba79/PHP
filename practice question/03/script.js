// script.js

let employees = [];

// Add event listener to the add employee button
$('#add-employee-btn').click(function(e) {
    e.preventDefault();
    addEmployee();
});

// Function to add employee
function addEmployee() {
    let employeeName = $('#employee-name').val();
    let employeeDepartment = $('#employee-department').val();
    let employeeId = $('#employee-id').val();
    let employeeEmail = $('#employee-email').val();

    // Validate form fields
    if (employeeName === '' || employeeDepartment === '' || employeeId === '' || employeeEmail === '') {
        $('#error-message').text('Please fill out all fields.');
        return;
    }

    // Create a new employee object
    let employee = {
        name: employeeName,
        department: employeeDepartment,
        id: employeeId,
        email: employeeEmail
    };

    // Add employee to the employees array
    employees.push(employee);

    // Clear form fields
    $('#employee-name').val('');
    $('#employee-department').val('');
    $('#employee-id').val('');
    $('#employee-email').val('');

    // Add employee to the table
    let tableRow = `
        <tr >
            <td>${employee.name}</td>
            <td>${employee.department}</td>
            <td>${employee.id}</td>
            <td>${employee.email}</td>
            <td><button class="delete-btn">Delete</button></td>
        </tr>
    `;
    $('#employee-table-body').append(tableRow);

    // Add event listener to the delete button
    $('.delete-btn').click(function() {
        let rowIndex = $(this).closest('tr').index();
        employees.splice(rowIndex, 1);
        $(this).closest('tr').remove();
    });
}