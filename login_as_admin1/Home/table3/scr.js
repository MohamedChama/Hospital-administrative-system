


const table = document.getElementById('myTable');

// Loop through all the rows in the table
for (let i = 0; i < table.rows.length; i++) {
    const cells = table.rows[i].cells;

    // Get the last cell in the row
    let lastCell = cells[cells.length - 1];
    lastCell.style.borderTopRightRadius = "10px";
}
