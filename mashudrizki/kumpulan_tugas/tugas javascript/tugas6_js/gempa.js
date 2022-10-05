var tbl = document.getElementById('tbl');
let no = 1;

class gempa{
	constructor(lokasi, skala){
		this.lokasi = lokasi;
		this.skala = skala;
	}
	dampak(){
		if (this.skala<=2) this.dampak = 'dampak tidak terasa';
		else if (this.skala>2 && this.skala <= 4) this.dampak = 'dampaknya bangunan retak2';
		else if (this.skala>4 && this.skala <= 6) this.dampak = 'dampaknya bangunan roboh';
		else if (this.skala>6 && this.skala <= 8) this.dampak = 'dampaknya bangunan roboh dan berpotensi tsunami';
		else this.dampak = 'terjadi tsunami dengan jalan retak dan rusak';
		
		return this.dampak;
	}
	infoGempa(){
		let dataG = `
                <tr>
                    <td>${no++}</td>
                    <td>${this.lokasi}</td>
                    <td>${this.skala}</td>
                    <td>${this.dampak()}</td>
                </tr>
		`;
		tbl.innerHTML += dataG;
	}
	
}
	g1 = new gempa('semarang', 3);
	g2 = new gempa('surabaya', 6);
	g3 = new gempa('malang', 2);
	g4 = new gempa('lamongan', 9);
	g5 = new gempa('jakarta', 7);
	g6 = new gempa('jogja', 4);
	g7 = new gempa('sumatra', 3);
	g8 = new gempa('probolinggo', 5);
	g9 = new gempa('purbalingga', 1);
	g10 = new gempa('UAS', 10);
	g1.infoGempa(); 
	g2.infoGempa();
	g3.infoGempa();
	g4.infoGempa();
	g5.infoGempa();
	g6.infoGempa();
	g7.infoGempa();
	g8.infoGempa();
	g9.infoGempa();
	g10.infoGempa();