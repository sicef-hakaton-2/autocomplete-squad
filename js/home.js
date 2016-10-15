var vol1 = {
	id: 12345,
	ime: "Jovan",
	prezime: "Jovanovic",
	lokacija: "Niš",
	email: "joca@jovan.net",
	password: "123456",
	telefon: "067123456",
	status: false,
	resursi:
	[{
		id: 67,
		tip: "Food",
		vrsta: "Potatoes",
		kolicina: 9,
		jedinica: "kg",
		zabebe: false

	},
	{
		id: 68,
		tip: "Clothes",
		vrsta: "T-Shirt",
		velicina: "XL",
		zadecu: false

	},
	{
		id: 69,
		tip: "Accomodation",
		brkreveta: 3,
		zatvoreni: true,
		hostInfo: "Downtown. Old married couple."

	}]
};

var vol2 = {
	id: 23456,
	ime: "Mitar",
	prezime: "Mitrović",
	lokacija: "Beograd",
	email: "mita@mitar.net",
	password: "654321",
	telefon: "064987654",
	status: false,
	resursi: [{
		id: 70,
		tip: "Food",
		vrsta: "Watermelon",
		kolicina: 10,
		jedinica: "pcs",
		zabebe: false

	},
	{
		id: 71,
		tip: "Transport",
		from: "Niš",
		to: "Beograd",
		brosoba: 2,
		hostInfo: "Profesionalni vozač."

	}]
};


var group = {
	id: 321,
	brclanova: 7,
	aktivna: false,
	vodja: {
		id: 789,
		ime: "Haka",
		prezime: "Ton",
		telefon: 052456782,
		lokacija: "Niš",
		smartphone: true,
		email: "haka@ton.com"
	},
	resursi:[{
		id: 81,
		tip: "Food",
		zabebe: false
	},
	{
		id: 81,
		tip: "Transport",
		from: "Niš",
		to: "Beograd",
	}]
}

document.onready = function(){
	setListeners();
	loadData();
}

function setListeners(){
	$("#loading").show();
	$("#group").hide();
	$("#feed").hide();
	$("#profile").hide();

	$("#btnGroup").click(function(){
		$("#group").show();
		$("#profile").hide();
		$("#feed").hide();

		reloadGroup();
	});
	
	$("#btnFeed").click(function(){
		$("#group").hide();
		$("#feed").show();
		$("#profile").hide();

		reloadFeed();

	});

	$("#btnProfile").click(function(){
		$("#group").hide();
		$("#feed").hide();
		$("#profile").show();
	});

	$("#btnSave").click(function(){		
		group.vodja.ime = $("#imeV").val();
		group.vodja.prezime =$("#prezimeV").val();
		group.vodja.email = $("#emailV").val();
		group.vodja.telefon = $("#telefonV").val();
		group.brclanova = $("#broj_ljudiV").val();
	});
	$("#btnCancel").click(function(){
		reloadGroup();
	});
}

function loadData(){
	setTimeout(function(){
		$("#loading").hide();
		reloadGroup();
		$("#group").show();
	}, 500);
}

function reloadGroup(){
	function mark(){	
		$("#btnCancel").show();
		$("#btnSave").show();
	}
	$("#imeV").val(group.vodja.ime);
	$("#imeV").on("change", mark);
	$("#prezimeV").val(group.vodja.prezime);
	$("#prezimeV").on("change", mark);
	$("#emailV").val(group.vodja.email);
	$("#emailV").on("change", mark);
	$("#telefonV").val(group.vodja.telefon);
	$("#telefonV").on("change", mark);
	$("#broj_ljudiV").val(group.brclanova);
	$("#broj_ljudiV").on("change", mark);
}

function reloadFeed(){
		var list = document.getElementById('resList');
		list.innerHTML = "";
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">' + group.resursi[0].tip +'<span class="glyphicon glyphicon-apple"></span></span><span class="col-xs-4">City: ' + group.vodja.lokacija +'</span><span class="col-xs-4"><span class="glyphicon glyphicon-log-in"></span> Allocate resource(s)</span></div></li>';
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">Clothes <span class="glyphicon glyphicon-tags"></span></span><span class="col-xs-4">Size: XL</span><span class="col-xs-4"><span class="glyphicon glyphicon-log-in"></span> Allocate resource(s)</span></div></li>';
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">Clothes <span class="glyphicon glyphicon-tags"></span></span><span class="col-xs-4">Size: 12 (for children)</span><span class="col-xs-4"><span class="glyphicon glyphicon-log-in"></span> Allocate resource(s)</span></div></li>';
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">New group <span class="glyphicon glyphicon-asterisk"></span></span><span class="col-xs-4">City: Niš</span><span class="col-xs-4"><span class="glyphicon glyphicon-remove"></span> Not available</span></div></li>';
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">Food <span class="glyphicon glyphicon-apple"></span></span><span class="col-xs-4">City: Niš</span><span class="col-xs-4"><span class="glyphicon glyphicon-log-in"></span> Allocate resource(s)</span></div></li>';
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">Food <span class="glyphicon glyphicon-apple"></span></span><span class="col-xs-4">City: Niš</span><span class="col-xs-4"><span class="glyphicon glyphicon-log-in"></span> Allocate resource(s)</span></div></li>';
		list.innerHTML += '<li class="list-group-item"><div class="row"><span class="col-xs-4">Transport <span class="glyphicon glyphicon-road"></span></span><span class="col-xs-4">From: Niš  To: Belgrade </span><span class="col-xs-4"><span class="glyphicon glyphicon-log-in"></span> Allocate resource(s)</span></div></li>';
}