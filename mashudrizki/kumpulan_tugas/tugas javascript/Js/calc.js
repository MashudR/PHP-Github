function tambah(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2; //rumus
    frm.hasil.value = total; //penempatan hasil
}

function kurang(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    /*
    var tombol = frm.tombol.value;
    switch (tombol) {
        case 'btn_tambah':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 + a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
        case 'btn_kurang':
            if (isNaN(a1) || isNaN(a2)) {
                alert("Harap masukkan angka!!");
            }    
            else {
                var total = a1 - a2; //rumus
                frm.hasil.value = total; //penempatan hasil 
            } 
            break;
    
        default:
            break;
    }
    */
    if (isNaN(a1) || isNaN(a2)) {
        alert("Harap masukkan angka!!");
    }    
    else {
       var total = a1 - a2; //rumus
       frm.hasil.value = total; //penempatan hasil 
    } 
    
}
function kali(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1*a2; //rumus
    frm.hasil.value = total; //penempatan hasil
}
function bagi(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1/a2; //rumus
    frm.hasil.value = total; //penempatan hasil
}

function pangkat(){
    //tangkap id form
    var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = Math.pow(a1,a2); //rumus
    frm.hasil.value = total; //penempatan hasil
}
function hitung(opr){
	var frm = document.getElementById('calcForm');
    var a1 = parseFloat(frm.angka1.value);
    var a2 = parseFloat(frm.angka2.value);
	
	if (isNaN(a1) || isNaN(a2)) return alert("Harap masukkan angka!!");
	
	switch(opr){
		case '+': total = a1 + a2 ; break; 
		case '-': total = a1 - a2 ; break; 
		case '*': total = a1 * a2 ; break; 
		case '/': total = a1 / a2 ; break; 
		case '^': total = a1 ** a2 ; break;
		default : total = 0 ;
	}
	frm.hasil.value = total;
}