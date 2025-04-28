$(document).ready(function() {
    // Form submission event handler
    $('#task-form').submit(function(event) {
        event.preventDefault();
        var taskDescription = $('#task-description').val().trim();

        // Form validation
        if (taskDescription === '') {
            $('#error-message').text('Please enter a task description.');
            return;
        }

        // Add task to the list
        addTask(taskDescription);

        // Clear input field and error message
        $('#task-description').val('');
        $('#error-message').text('');
    });

    // Add task function
    function addTask(taskDescription) {
        var taskHtml = `
            <li class="task">
                <span class="task-description">${taskDescription}</span>
                <button class="delete-btn">Delete</button>
            </li>
        `;
        $('#task-list').append(taskHtml);

        // Add event listeners to the task
        $('.task-description').last().click(function() {
            $(this).toggleClass('completed');
        });
        $('.delete-btn').last().click(function() {
            $(this).parent().remove();
        });
    }
});