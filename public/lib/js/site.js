const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

function setThemePreference(theme) {
    sessionStorage.setItem("theme", theme);
}

function getThemePreference() {
    return sessionStorage.getItem("theme");
}

function applyThemePreference() {
    const theme = getThemePreference();
    if (theme === "dark") {
        if (!body.classList.contains("dark")) {
            body.classList.add("dark");
            modeText.innerText = "Dark mode";
        }
    } else {
        if (body.classList.contains("dark")) {
            body.classList.remove("dark");
            modeText.innerText = "Light mode";
        }
    }
}

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

searchBtn.addEventListener("click", () => {
    sidebar.classList.remove("close");
});

modeSwitch.addEventListener("click", () => {
    if (body.classList.contains("dark")) {
        body.classList.remove("dark");
        modeText.innerText = "Light mode";
        setThemePreference("light");
    } else {
        body.classList.add("dark");
        modeText.innerText = "Dark mode";
        setThemePreference("dark");
    }
});

// Apply the theme preference on page load
applyThemePreference();

// Apply the theme preference on page load
applyThemePreference();

//var myLink = document.querySelector('a[href="#"]');
//myLink.addEventListener('click', function (e) {
//    e.preventDefault();
//});



/**
 * Home js below:
 * */
const progress = document.getElementById('progress')
const prev = document.getElementById('prev')
const next = document.getElementById('next')
const circles = document.querySelectorAll('.circle')
let current_active = 1
update_para()

next.addEventListener('click', () => {
    current_active++

    if (current_active > circles.length) {
        current_active = circles.length
    }
    update()
    update_para()
})

prev.addEventListener('click', () => {
    current_active--
    if (current_active < 1) {
        current_active = 1
    }
    update()
    update_para()
})

function update() {
    circles.forEach((circle, index) => {
        if (index < current_active) {
            circle.classList.add('active')
        }
        else {
            circle.classList.remove('active')
        }
    })

    const actives = document.querySelectorAll('.active')
    progress.style.width = ((actives.length - 1) / (circles.length - 1)) * 99.9 + '%'

    if (current_active === 1) {
        prev.disabled = true
    }
    else if (current_active === circles.length) {
        next.disabled = true
    }
    else {
        prev.disabled = false
        next.disabled = false
    }
}

function update_para() {
    let title = document.getElementById("title")
    let para = document.getElementById("para")

    if (current_active === 1) {
        title.innerHTML = "Welcome to`<span>`ESKOOLY`</ span>`"
        para.innerHTML = "Simplify administration. Please follow the steps to completa creating account."
    }
    else if (current_active === 2) {
        title.innerHTML = "Softwer Requraments"
        para.innerHTML = "You will need 'SQL Server' installed in your device and 'C#'. You can install them when you click 'next' button."
    }
    else if (current_active === 3) {
        title.innerHTML = "System Setup"
        para.innerHTML = ""
    }
}

/**************************/
/*
 * Table js below:
 * */
//$(document).ready(function () {
//	//Only needed for the filename of export files.
//	//Normally set in the title tag of your page.
//	document.title = 'Simple DataTable';
//	// DataTable initialisation
//	$('#example').DataTable(
//		{
//			"dom": '<"dt-buttons"Bf><"clear">lirtp',
//			"paging": false,
//			"autoWidth": true,
//			"columnDefs": [
//				{ "orderable": false, "targets": 5 }
//			],
//			"buttons": [
//				'colvis',
//				'copyHtml5',
//				'csvHtml5',
//				'excelHtml5',
//				'pdfHtml5',
//				'print'
//			]
//		}
//	);
//	//Add row button
//	$('.dt-add').each(function () {
//		$(this).on('click', function (evt) {
//			//Create some data and insert it
//			var rowData = [];
//			var table = $('#example').DataTable();
//			//Store next row number in array
//			var info = table.page.info();
//			rowData.push(info.recordsTotal + 1);
//			//Some description
//			rowData.push('New Order');
//			//Random date
//			var date1 = new Date(2016, 01, 01);
//			var date2 = new Date(2018, 12, 31);
//			var rndDate = new Date(+date1 + Math.random() * (date2 - date1));//.toLocaleDateString();
//			rowData.push(rndDate.getFullYear() + '/' + (rndDate.getMonth() + 1) + '/' + rndDate.getDate());
//			//Status column
//			rowData.push('NEW');
//			//Amount column
//			rowData.push(Math.floor(Math.random() * 2000) + 1);
//			//Inserting the buttons ???
//			rowData.push('<button type="button" class="btn btn-primary btn-xs dt-edit" style="margin-right:16px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button><button type="button" class="btn btn-danger btn-xs dt-delete"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>');
//			//Looping over columns is possible
//			//var colCount = table.columns()[0].length;
//			//for(var i=0; i < colCount; i++){			}

//			//INSERT THE ROW
//			table.row.add(rowData).draw(false);
//			//REMOVE EDIT AND DELETE EVENTS FROM ALL BUTTONS
//			$('.dt-edit').off('click');
//			$('.dt-delete').off('click');
//			//CREATE NEW CLICK EVENTS
//			$('.dt-edit').each(function () {
//				$(this).on('click', function (evt) {
//					$this = $(this);
//					var dtRow = $this.parents('tr');
//					$('div.modal-body').innerHTML = '';
//					$('div.modal-body').append('Row index: ' + dtRow[0].rowIndex + '<br/>');
//					$('div.modal-body').append('Number of columns: ' + dtRow[0].cells.length + '<br/>');
//					for (var i = 0; i < dtRow[0].cells.length; i++) {
//						$('div.modal-body').append('Cell (column, row) ' + dtRow[0].cells[i]._DT_CellIndex.column + ', ' + dtRow[0].cells[i]._DT_CellIndex.row + ' => innerHTML : ' + dtRow[0].cells[i].innerHTML + '<br/>');
//					}
//					$('#myModal').modal('show');
//				});
//			});
//			$('.dt-delete').each(function () {
//				$(this).on('click', function (evt) {
//					$this = $(this);
//					var dtRow = $this.parents('tr');
//					if (confirm("Are you sure to delete this row?")) {
//						var table = $('#example').DataTable();
//						table.row(dtRow[0].rowIndex - 1).remove().draw(false);
//					}
//				});
//			});
//		});
//	});
//	//Edit row buttons
//	$('.dt-edit').each(function () {
//		$(this).on('click', function (evt) {
//			$this = $(this);
//			var dtRow = $this.parents('tr');
//			$('div.modal-body').innerHTML = '';
//			$('div.modal-body').append('Row index: ' + dtRow[0].rowIndex + '<br/>');
//			$('div.modal-body').append('Number of columns: ' + dtRow[0].cells.length + '<br/>');
//			for (var i = 0; i < dtRow[0].cells.length; i++) {
//				$('div.modal-body').append('Cell (column, row) ' + dtRow[0].cells[i]._DT_CellIndex.column + ', ' + dtRow[0].cells[i]._DT_CellIndex.row + ' => innerHTML : ' + dtRow[0].cells[i].innerHTML + '<br/>');
//			}
//			$('#myModal').modal('show');
//		});
//	});
//	//Delete buttons
//	$('.dt-delete').each(function () {
//		$(this).on('click', function (evt) {
//			$this = $(this);
//			var dtRow = $this.parents('tr');
//			if (confirm("Are you sure to delete this row?")) {
//				var table = $('#example').DataTable();
//				table.row(dtRow[0].rowIndex - 1).remove().draw(false);
//			}
//		});
//	});
//	$('#myModal').on('hidden.bs.modal', function (evt) {
//		$('.modal .modal-body').empty();
//	});
//});