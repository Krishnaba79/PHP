$(document).ready(function() {
    let expenses = [];
    let totalAmount = 0;
  
    // Add Expense Button Click Event
    $('#add-expense-btn').on('click', function(event) {
      event.preventDefault();
      let description = $('#description').val();
      let amount = $('#amount').val();
      let date = $('#date').val();
  
      // Validate Form Fields
      if (!description || !amount || !date) {
        $('#error-message').text('Please fill in all fields');
        return;
      }
      if (isNaN(amount)) {
        $('#error-message').text('Amount must be a valid number');
        return;
      }
  
      // Add Expense to List
      let expense = {
        description: description,
        amount: parseFloat(amount),
        date: date
      };
      expenses.push(expense);
      updateExpenseList();
      clearFormFields();
    });
  
    // Delete Expense Button Click Event
    $(document).on('click', '.delete-btn', function() {
      let index = $(this).data('index');
      expenses.splice(index, 1);
      updateExpenseList();
    });
  
    // Update Expense List Function
    function updateExpenseList() {
      $('#expense-list').empty();
      totalAmount = 0;
      $.each(expenses, function(index, expense) {
        let html = `
          <li>
            <span>${expense.description}</span>
            <span>$${expense.amount.toFixed(2)}</span>
            <span>${expense.date}</span>
            <button class="delete-btn" data-index="${index}">Delete</button>
          </li>
        `;
        $('#expense-list').append(html);
        totalAmount += expense.amount;
      });
      $('#total-amount').text(`Total: $${totalAmount.toFixed(2)}`);
    }
  
    // Clear Form Fields Function
    function clearFormFields() {
      $('#description').val('');
      $('#amount').val('');
      $('#date').val('');
      $('#error-message').text('');
    }
  });