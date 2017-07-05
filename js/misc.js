/* This file contains miscellaneous functions needed for client side validation and other form functionality.
* As such, it is recommended that browsers with enabled Javascript must be used.
*/

/* Populates the Address drop down list. Takes the ids of the 'Municipality' and 'Barangay'. This function also hides the 'Barangay' if 'Outside CN' is selected in the first drop down list.
*/
function populateDropdownList(ddl1, ddl2) 
{
	//array instantiation for the barangay dropdown
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
			enableDropdown();
			ddl2.options.length = 0;													//populate field			
			for (var i = 0; i < basud.length; i++) populate(ddl2, basud[i], basud[i]);	//calls the populate function to add every element of the array
		break;
		
		case 'Capalonga':
			enableDropdown();
			ddl2.options.length = 0;			
			for (var i = 0; i < capalonga.length; i++) populate(ddl2, capalonga[i], capalonga[i]);
		break;

		case 'Daet':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < daet.length; i++) populate(ddl2, daet[i], daet[i]);
		break;

		case 'Jose Panganiban':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < jpang.length; i++) populate(ddl2, jpang[i], jpang[i]);
		break;

		case 'Labo':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < labo.length; i++) populate(ddl2, labo[i], labo[i]);
		break;

		case 'Mercedes':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < mercedes.length; i++) populate(ddl2, mercedes[i], mercedes[i]);
		break;

		case 'Paracale':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < paracale.length; i++) populate(ddl2, paracale[i], paracale[i]);
		break;

		case 'San Lorenzo Ruiz':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < slr.length; i++) populate(ddl2, slr[i], slr[i]);
		break;

		case 'San Vicente':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < sv.length; i++) populate(ddl2, sv[i], sv[i]);
		break;
		
		case 'Sta Elena':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < se.length; i++) populate(ddl2, se[i], se[i]);
		break;

		case 'Talisay':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < talisay.length; i++) populate(ddl2, talisay[i], talisay[i]);
		break;

		case 'Vinzons':
			enableDropdown();
			ddl2.options.length = 0;
			for (var i = 0; i < talisay.length; i++) populate(ddl2, talisay[i], talisay[i]);
		break;		
		
		case 'Outside CN':
			enableTextBox();
		break;
		
		default:
			ddl2.options.length = 0;
		break;			
	}
};

function enableDropdown(){
		document.getElementById('outsideaddress').style.display = 'none';	//hides 'outside cn' address div
		document.getElementById('addressoutside').disabled = true;			//disables 'outside cn' address text field
		document.getElementById('address').style.display = 'block';			//shows 'address' div -> this div includes the 'barangay' dropdown list and the 'purok/street' textbox
		document.getElementById('ddl2').disabled = false;					//enables 'barangay' select field
		document.getElementById('purokstreet').disabled = false;			//enables purokstreet text field
};

function enableTextBox()
{
		document.getElementById('outsideaddress').style.display = 'block';	//shows 'outside cn' address div
		document.getElementById("addressoutside").disabled = false;			//enables 'outside cn' address text field
		document.getElementById('address').style.display = 'none';			//hides 'address' div
		document.getElementById("ddl2").disabled = true;					//disables 'barangay' select field
		document.getElementById("purokstreet").disabled = true;				//disables 'purokstreet' text field
}

function populateSchoolDropdownList() 
{
	var sddl = document.getElementById('sddl');
	var schools = new Array('Alawihao National High School' ,'AMA Computer Learning Center College' ,'Ateneo de Naga University' ,'Bagong Silang II High School (Daguit Ext.)' ,'Bagong Silang II National High School' ,'Bagong Silang National High School' ,'Basiad High School' ,'Basud National High School' ,'Batobalani High School' ,'Batobalani National High School' ,'Bicol University' ,'Bulala High School' ,'Calabaca Academy' ,'Camarines Norte College' ,'Camarines Norte National High School' ,'Camarines Norte School of Law' ,'Camarines Norte State College, Abaño Campus' ,'Camarines Norte State College, Entienza Campus' ,'Camarines Norte State College, Jose Panganiban Campus' ,'Camarines Norte State College, Labo Campus' ,'Camarines Norte State College, Main Campus' ,'Camarines Norte State College, Mercedes Campus' ,'Capalonga College' ,'Capalonga Institute' ,'Capalonga Parochial School' ,'Chung Hua High School' ,'D. Q. Liwag High  School, Sto. Domingo' ,'Daguit National High School' ,'Delia Diezmo National High School' ,'Dominador Narido High School' ,'E. P. Borja High School' ,'Eugenia M. Quintela Memorial H.S.' ,'Fabrica High School' ,'Froilan Lopez Techl. Voc. High School' ,'Gawad Kalinga High School' ,'Gonzales Ascutia High School' ,'Gonzalo Aler High  School' ,'Gumaus National High School' ,'Jose Panganiban National High School' ,'La Consolacion College of Daet' ,'Labo National High School' ,'Labo Science and Technology High School' ,'Lady of Peñafrancia College' ,'Lalawigan National High School' ,'Larap National High School' ,'Leocadio Alejo Entienza High School' ,'Mabini Colleges' ,'Magsaysay National High School' ,'Manguisoc High School' ,'Manguisoc National High  School' ,'Manila Bicol South Road Academy' ,'Maria Aurora Academy' ,'Matango National High School' ,'Mercedes High School' ,'Mercedes Tech. Voc. High School' ,'Microsystems College Foundation' ,'Moreno Integrated School' ,'Northhills College of Asia' ,'Our Lady of Lourdes College Foundation' ,'Pablo S. Villafuerte High School' ,'Pag-asa High School' ,'Pambuhan High School' ,'Pambuhan High School (Ext.)' ,'Pambuhan National High School' ,'Paracale National High School' ,'Porfirio R. Ponayo High School' ,'Rizal High School' ,'Rizal National High School' ,'Sabang National High School' ,'Saint Francis Parochial School' ,'San Felipe National High School' ,'San Francisco National High School' ,'San Lorenzo Ruiz High School' ,'San Pedro Domingo Llarena High School' ,'San Roque High School' ,'San Roque Integrated  School' ,'San Vicente Natuional High School' ,'San Vicente Parocial School' ,'Sapang Palay National High School' ,'Sarah Jane Ferrer High School' ,'Sisters of Mary School' ,'St. Francis Parochial School' ,'St. John the Apostle Academy' ,'Sta. Cruz National High School' ,'Sta. Elena College' ,'Tabas National High School' ,'Talobatib High School (TLNHS Annex)' ,'Talobatib National High School' ,'Tigbinan High School' ,'Tuaca High School' ,'Tulay na Lupa National High School' ,'University of Nueva Caceres' ,'University of Santa Isabel' ,'University of the Philippines' ,'Vicente L. Basit Memorial High School' ,'Victoria J. Tuacar High School' ,'Villazar National High School' ,'Vinzons Pilot High School', 'Other');
	for (var i = 0; i < schools.length; i++) populate(sddl, schools[i], schools[i]);
};

//function called to populate the selected dropdown list
function populate(ddl, text, value) 
{
	var opt = document.createElement('option');
	opt.value = value;
	opt.text = text;
	ddl.options.add(opt);
};

//checks if the user chose the 'Other' in the Occupation dropdown list and enables the 'other occupation' textbox if it is
function checkOther(ddl, tb) 
{
	if(ddl.value == 'Other') tb.disabled = false;
	else tb.disabled = true;
};

//resets address input when loading page - done to prevent wrong inputs
function clearMunicipality() 
{
	document.getElementById('ddl1').selectedIndex = 0;
	document.getElementById('purokstreet').value = '';
	document.getElementById('addressoutside').value = '';
}

//prompts an alert if the start year is greater than the current year
function checkYear(start, current) 
{
	if (start.value > current.value )
	{
		alert("Current year can't be greater than enrollment year.");
		return false;
	}
	
	return true;
}

window.onload = clearMunicipality;
window.onload = populateSchoolDropdownList;

/*
* Profiling system: misc.js
* Author: Howell Lance B. Reyes
* Date last updated: 7/9/15
*/		