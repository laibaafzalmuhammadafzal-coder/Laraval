// Customer Form Validation
document.getElementById('customerForm').addEventListener('submit', function(e){
    e.preventDefault();
    alert('Customer form submitted!');
    
    // Close Modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('customerModal'));
    modal.hide();
});

// Employee Form Validation
document.getElementById('employeeForm').addEventListener('submit', function(e){
    e.preventDefault();
    alert('Employee form submitted!');

    // Close Modal
    const modal = bootstrap.Modal.getInstance(document.getElementById('employeeModal'));
    modal.hide();
});
