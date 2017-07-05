		function populateDropdownList(ddl1, ddl2) 
		{
			var basud = new Array('Angas', 'Bactas', 'Binatagan', 'Caayunan', 'Guinatungan', 'Hinampacan', 'Langga', 'Laniton', 'Lidong', 'Mampili', 'Mandazo', 'Mangcamagong', 'Manmuntay', 'Mantugawe', 'Matnog', 'Mocong', 'Oliva', 'Pagsangahan', 'Pinagwarasan', 'Plaridel', 'Poblacion 1', 'Poblacion 2', 'San Felipe', 'San Jose', 'San Pascual', 'Taba-Taba', 'Tacad', 'Taisan', 'Tuaca');
			var capalonga = new Array('Alayao', 'Binawangan', 'Calabaca', 'Camagsaan', 'Catabaguangan', 'Catioan', 'Del Pilar', 'Itok', 'Lucbanan', 'Mabini', 'Mactang', 'Mataque', 'Old Camp', 'Poblacion', 'Magsaysay', 'San Antonio', 'San Isidro', 'San Roque', 'Tanauan', 'Ubang', 'Villa Aurora', 'Villa Belen');
			var daet = new Array('Alawihao', 'Awitan', 'Bagasbas', 'Barangay I (Ilaod)', 'Brgy II (Pasig)', 'Brgy III (Iraya)', 'Brgy IV (Mantagbac)', 'Brgy V (Pandan)', 'Brgy VI (Centro)', 'Brgy VII (Diego Liñan)', 'Brgy VIII (Salcedo)', 'Bibirao', 'Borabod', 'Calasgasan', 'Camambugan', 'Cobangbang', 'Dogongan', 'Gahonon', 'Gubat (Gubat)', 'Gubat (Mandulongan)', 'Gubat (Moreno)', 'Lag-on', 'Magang', 'Mambalite', 'Pamorangon', 'Mancruz', 'San Isidro');
			var jpang = new Array('Bagong Bayan', 'Calero', 'Dahican', 'Dayhagan', 'Larap', 'Luklukan Norte', 'Luklukan Sur', 'Motherlode', 'Nakalaya', 'Osmeña', 'Pag-Asa', 'Parang', 'Plaridel', 'North Poblacion', 'South Poblacion', 'Salvacion', 'San Isidro', 'San Jose', 'San Martin', 'San Pedro', 'San Rafael', 'Santa Cruz', 'Santa Elena', 'Santa Milagrosa', 'Santa Rosa Norte', 'Santa Rosa Sur', 'Tamisan');
			var labo = new Array('Anahaw (Pob.)', 'Anameam', 'Awitan', 'Baay', 'Bagacay', 'Bagong Silang I', 'Bagong Silang II', 'Bagong Silang III', 'Bakiad', 'Bautista', 'Bayabas', 'Bayan-bayan', 'Benit', 'Bulhao', 'Cabatuhan', 'Cabusay', 'Calabasa', 'Canapawan', 'Daguit', 'Dalas', 'Dumagmang', 'Exciban', 'Fundado', 'Guinacutan', 'Guisican', 'Gumamela (Pob.)', 'Iberica', 'Kalamunding (Pob.)', 'Lugui', 'Mabilo I', 'Mabilo II', 'Macogon', 'Mahawan-hawan', 'Malangcao-Basud', 'Malasugui', 'Malatap', 'Malaya', 'Malibago', 'Maot', 'Masalong', 'Matanlang', 'Napaod', 'Pag-Asa', 'Pangpang', 'Pinya (Pob.)', 'San Antonio', 'San Francisco (Pob.)', 'Santa Cruz', 'Submakin', 'Talobatib', 'Tigbinan', 'Tulay Na Lupa');
			var mercedes = new Array('Apuao', 'Barangay I (Poblacion)', 'Barangay II (Pob.)', 'Barangay III (Pob.)', 'Barangay IV (Pob.)', 'Barangay V (Pob.)', 'Barangay VI (Pob.)', 'Barangay VII (Pob.)', 'Caringo', 'Catandunganon', 'Cayucyucan', 'Colasi', 'Del Rosario (Tagongtong)', 'Gaboc', 'Hamoraon', 'Hinipaan', 'Lalawigan', 'Lanot', 'Mambungalon', 'Manguisoc', 'Masalongsalong', 'Matoogtoog', 'Pambuhan', 'Quinapaguian', 'San Roque', 'Tarum');
			var paracale = new Array('Awitan', 'Bagumbayan', 'Bakal', 'Batobalani', 'Calaburnay', 'Capacuan', 'Casalugan', 'Dagang', 'Dalnac', 'Dancalan', 'Gumaus', 'Labnig', 'Macolabo Island', 'Malacbang', 'Malaguit', 'Mampungo', 'Mangkasay', 'Maybato', 'Palanas', 'Pinagbirayan Malaki', 'Pinagbirayan Munti', 'Poblacion Norte', 'Poblacion Sur', 'Tabas', 'Talusan', 'Tawig', 'Tugos');
			var slr = new Array('Daculang Bolo', 'Dagotdotan', 'Langga', 'Laniton', 'Maisog', 'Mampurog', 'Manlimonsito', 'Matacong (Pob.)', 'Salvacion', 'San Antonio', 'San Isidro', 'San Ramon');
			var sv = new Array('Asdum', 'Cabanbanan', 'Calabagas', 'Fabrica', 'Iraya Sur', 'Man-Ogob', 'Poblacion District I', 'Poblacion District II', 'San Jose (Iraya Norte)');
			var se = new Array('Basiad', 'Bulala', 'Cabuluan', 'Don Tomas (Morato)', 'Guitol', 'Kagtalaba', 'Maulawin', 'Patag Ibaba', 'Patag Ilaya', 'Plaridel (Macahadok)', 'Polungguitguit', 'Rizal', 'Salvacion', 'San Lorenzo', 'San Pedro', 'San Vicente', 'Santa Elena (Poblacion)', 'Tabugon', 'Villa San Isidro');
			var talisay = new Array('Binanuaan', 'Caawigan', 'Cahabaan', 'Calintaan', 'Del Carmen', 'Gabon', 'Itomang', 'Poblacion', 'San Francisco', 'San Isidro', 'San Jose', 'San Nicolas', 'Santa Cruz', 'Santa Elena', 'Santo Niño');
			var vinzons = new Array('Aguit-It', 'Banocboc','Cagbalogo', 'Calangcawan Norte', 'Calangcawan Sur', 'Guinacutan', 'Mangcayo', 'Mangcawayan', 'Manlucugan', 'Matango', 'Napilihan', 'Pinagtigasan', 'Barangay I (Pob.)', 'Barangay II (Pob.)', 'Barangay III (Pob.)', 'Sabang', 'Santo Domingo', 'Singi', 'Sula');
		
			switch(ddl1.value) {
				case 'Basud':
					document.getElementById('outsideaddress').style.display = 'none';	//hides outside address div
					document.getElementById('addressoutside').disabled = true;			//disables outside address text field
					document.getElementById('address').style.display = 'block';			//shows address div
					document.getElementById('ddl2').disabled = false;					//enables barangay select field
					ddl2.options.length = 0;											//populate field
					for (var i = 0; i < basud.length; i++)
					{
						populate(ddl2, basud[i], basud[i]);
					}
					document.getElementById('purokstreet').disabled = false;			//enables purokstreet text field
				break;
				
				case 'Capalonga':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < capalonga.length; i++) 
					{
						populate(ddl2, capalonga[i], capalonga[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Daet':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < daet.length; i++) 
					{
						populate(ddl2, daet[i], daet[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Jose Panganiban':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < jpang.length; i++) 
					{
						populate(ddl2, jpang[i], jpang[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Labo':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < labo.length; i++) 
					{
						populate(ddl2, labo[i], labo[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Mercedes':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < mercedes.length; i++) 
					{
						populate(ddl2, mercedes[i], mercedes[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Paracale':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < paracale.length; i++) 
					{
						populate(ddl2, paracale[i], paracale[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				
					
				break;

				case 'San Lorenzo Ruiz':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < slr.length; i++) 
					{
						populate(ddl2, slr[i], slr[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				
					
				break;

				case 'San Vicente':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < sv.length; i++) 
					{
						populate(ddl2, sv[i], sv[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;
				
				case 'Sta Elena':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < se.length; i++) 
					{
						populate(ddl2, se[i], se[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Talisay':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < talisay.length; i++) 
					{
						populate(ddl2, talisay[i], talisay[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;

				case 'Vinzons':
					document.getElementById('outsideaddress').style.display = 'none';
					document.getElementById("addressoutside").disabled = true;				
					document.getElementById('address').style.display = 'block';
					document.getElementById("ddl2").disabled = false;
					ddl2.options.length = 0;
					for (var i = 0; i < talisay.length; i++) 
					{
						populate(ddl2, talisay[i], talisay[i]);
					}
					document.getElementById("purokstreet").disabled = false;
				break;		
				
				case 'Outside CN':
					document.getElementById('outsideaddress').style.display = 'block';
					document.getElementById("addressoutside").disabled = false;
					document.getElementById('address').style.display = 'none';
					document.getElementById("ddl2").disabled = true;
					document.getElementById("purokstreet").disabled = true;
				
				default:
					ddl2.options.length = 0;
				break;			
			}
		};
		
		function populate(ddl, text, value) 
		{
			var opt = document.createElement('option');
			opt.value = value;
			opt.text = text;
			ddl.options.add(opt);
		};
		
		function checkoccu(ddl, tb, inc) 
		{
			if(ddl.value == 'Unemployed' || ddl.value == 'Deceased') 
			{
				tb.disabled = true;
				inc.disabled = true;
				inc.value = 0;
			} 
			else
			{
				tb.disabled = false;
				inc.disabled = false;
			}
		};
/*
* Profiling system: dropdown.js
* Author: Howell Lance B. Reyes
* Date last updated: 7/7/15
*/		