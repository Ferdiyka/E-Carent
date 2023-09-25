// resources/js/pdf-export.js
import jsPDF from 'jspdf';

// Function to export to PDF
function exportToPDF(dataId, rowData) {
    if (rowData) {
        // Create a jsPDF instance
        const doc = new jsPDF();

        // Add PDF content here, for example:
        doc.text('ID: ' + rowData.id, 10, 10);
        doc.text('Nama: ' + rowData['user.name'], 10, 20);
        // Add other information as needed

        // Save the PDF with an appropriate name
        doc.save('booking_' + dataId + '.pdf');
    }
}

export { exportToPDF };
