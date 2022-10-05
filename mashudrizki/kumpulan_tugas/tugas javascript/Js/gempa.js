class gempa{
	constructor(lokasi. skala){
		this.lokasi = lokasi;
		this.skala = skala;
	}
	dampak(){
		if (this.skala<=2) this.dampak = 'dampak tidak terasa';
		if (this.skala>2 && this.skala <= 4) this.dampak = 'dampaknya bangunan retak2';
		if (this.skala>4 && this.skala <= 6) this.dampak = 'dampaknya bangunan roboh';
		if (this.skala>6) this.dampak = 'dampaknya bangunan roboh dan berpotensi tsunami';
		else this.dampak = '';
		
		return this.dampak;
	}
	infoGempa(){
		let no = 1;
		document.write(` <td>${no++}</td> 
		<td>${this.lokasi}</td>
		<td>${this.skala}</td>
		<td>${this.dampak}</td>
		`);
		document.getElementById('tbl').innerHTML = data;
	}
	smr = new gempa('semarang', 3) 
}