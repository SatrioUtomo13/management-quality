import Handsontable from 'handsontable';

const container = document.getElementById('example');

const headers = [
    ['Item', 'Resin', 'Tipe',{label:'RC Gram', colspan:3}, { label: 'Resin Content', colspan: 3 }, {label:'VC Gram', colspan:2}, { label: 'Volatile Content', colspan: 2 }, 'Speed', 'Berat Aktual', 'Berat Awal', 'Berat Akhir', 'RSI', 'Qty Transisi', 'Qty/Lot', 'Qty Total', 'Angin', {label:'Temperature', colspan:8}],
    ['', '', '','R', 'C', 'L', 'R', 'C', 'L', 'R', 'L', 'R', 'L','', '', '', '', '', '', '', '','', '1','2','3','4','5','6','7','8'] // Baris header kedua tidak perlu berisi data, hanya berisi kolom kosong
];
const hot = new Handsontable(container, {
    nestedHeaders:headers,
    startCols:headers[1].length,
    startRows:10,
    rowHeaders:true,
    colWidths: 50,
    height: 320,
});
