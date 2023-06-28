function downloadPDFWithjsPDF() {
    var doc = new jspdf.jsPDF('p', 'pt', 'a4');
    
    
    doc.html(document.querySelector('#price_table'), {
     
        callback: function (doc) {
        
        doc.save('Cennik_przychodnia_zdrowie.pdf');
      },
      margin: [30, 30, 10, 10],
      x: 60,
      y: 60,
    });
  }
  
  document.querySelector('#download-btn').addEventListener('click', downloadPDFWithjsPDF);