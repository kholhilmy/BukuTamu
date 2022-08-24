
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Buku Tamu</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Varela Round', sans-serif;
    font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px 25px;
    border-radius: 3px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 15px;
    background: #299be4;
    color: #fff;
    padding: 16px 30px;
    margin: -20px -25px 10px;
    border-radius: 3px 3px 0 0;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}
.table-title .btn {
    color: #566787;
    float: right;
    font-size: 13px;
    background: #fff;
    border: none;
    min-width: 50px;
    border-radius: 2px;
    border: none;
    outline: none !important;
    margin-left: 10px;
}
.table-title .btn:hover, .table-title .btn:focus {
    color: #566787;
    background: #f2f2f2;
}
.table-title .btn i {
    float: left;
    font-size: 21px;
    margin-right: 5px;
}
.table-title .btn span {
    float: left;
    margin-top: 2px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
    padding: 12px 15px;
    vertical-align: middle;
}
table.table tr th:first-child {
    width: 60px;
}
table.table tr th:last-child {
    width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}	
table.table td:last-child i {
    opacity: 0.9;
    font-size: 22px;
    margin: 0 5px;
}
table.table td a {
    font-weight: bold;
    color: #566787;
    display: inline-block;
    text-decoration: none;
}
table.table td a:hover {
    color: #2196F3;
}
table.table td a.settings {
    color: #2196F3;
}
table.table td a.delete {
    color: #F44336;
}
table.table td i {
    font-size: 19px;
}
table.table .avatar {
    border-radius: 50%;
    vertical-align: middle;
    margin-right: 10px;
}
.status {
    font-size: 30px;
    margin: 2px 2px 0 0;
    display: inline-block;
    vertical-align: middle;
    line-height: 10px;
}
.text-success {
    color: #10c469;
}
.text-info {
    color: #62c9e8;
}
.text-warning {
    color: #FFC107;
}
.text-danger {
    color: #ff5b5b;
}
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 13px;
    min-width: 30px;
    min-height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 2px !important;
    text-align: center;
    padding: 0 6px;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 10px;
    font-size: 13px;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}
</style>
<script>
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
<script>
    $(document).ready(function() {
        $('#kategori').select2();
    });
</script>

@foreach ($bukutamus as $bukutamu)
    <script>
        $(document).ready(function() {
            $('#kategori'.$bukutamu->id).select2();
        });

    </script>
@endforeach
</head>
<body>
<div class = "conatiner-xl">
    <div class="table-responsive">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
         @endif
        <div class="table-wrapper">
            
            
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            
        </div>
    </div>            
</div>

<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2><b>Buku Tamu</b></h2>
                    </div>
                    <div class="col-sm-7">
                        @auth
                        <a href="#addEmployeeModal" class="btn btn-secondary" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Visitors</span></a>
                        @endauth						
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Komentar</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach ($bukutamus as $bukutamu)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td scope="row">{{ $bukutamu->nama}}</td>
                                <td scope="row">{{ $bukutamu->email}}</td>
                                <td scope="row">{{ $bukutamu->komentar}}</td>
                                <td scope="row">{{ $bukutamu->waktu}}</td>
                                <td scope="row">
                                    @foreach ($bukutamu->BukuTamuKategoris as $BukuTamuKategoris )
                                    {{$BukuTamuKategoris->kategori->nama}}
                                    <br>
                                    @endforeach
                                </td>
                                <td scope="row">
                                    @if ($bukutamu->foto)
                                        <img src="{{Storage::url($bukutamu->foto)}}" alt="foto" style="width:200px;height:auto;">
                                    @endif
                                </td>
                                @auth
                                <td scope="row">
                                    <button type="button" data-toggle="modal" data-target="#editModal{{$bukutamu->id}}" class="btn btn-primary btn-sm">Edit</button></a>
                                    <button type="button" data-toggle="modal" data-target="#deleteModal{{$bukutamu->id}}" class="btn btn-danger btn-sm" >Delete</button></a>            
                                </td>
                                @endauth
                            </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>All</b></div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" enctype="multipart/form-data" action="{{url('/bukutamu/create')}}" >
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Tambah Daftar Buku Tamu</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label for="nama" >Nama</label>
						<input type="text" class="form-control" id="nama" name="nama" value="" required>
                        
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" value="" required>
					</div>
					<div class="form-group">
						<label for="komentar">Komentar</label>
						<input type="text" class="form-control" name="komentar" id="komentar" value="" required >
					</div>
					<div class="form-group">
						<label for="waktu">Waktu</label>
						<input type="datetime-local" class="form-control" name="waktu" id="waktu" value="" required>
					</div>	
                    <div class="form-group">
                        <label for="kategori">Kategori</label> <br>
                        <select name="kategori[]" id="kategori" style="width:100%">
                        @foreach ($kategoris as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                        @endforeach
                        
                        </select>
                    </div>
                    <div class="form-group">
                            <label for="foto">Upload Foto</label>
                            <input type="file" class="form-control" name="foto" id="foto" value="" required >
                    </div>
				</div>
                
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" name="simpan" value="Add">
				</div>
			</form>
		</div>
	</div>
</div> 

@foreach ($bukutamus as $bukutamu)
    <div id="editModal{{$bukutamu->id}}" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="{{url('/bukutamu/update/'.$bukutamu->id)}}" >
                    @csrf
                    <div class="modal-header">						
                        <h4 class="modal-title">Edit Daftar Buku Tamu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">					
                        <div class="form-group">
                            <label for="nama" >Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{$bukutamu->nama}}" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$bukutamu->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="komentar">Komentar</label>
                            <input type="text" class="form-control" name="komentar" id="komentar" value="{{$bukutamu->komentar}}" required >
                        </div>
                        	
                        <div class="form-group">
                            <label for="kategori{{$bukutamu->id}}">Kategori</label> <br>
                            <select name="kategori[]" id="kategori{{$bukutamu->id}}" style="width:100%">
                            @foreach ($kategoris as $kategori)
                            <option value="{{$kategori->id}}" {{ $bukutamu->hasKategoriById($kategori->id) ? 'selected' : ''}}>{{$kategori->nama}}</option>
                            @endforeach
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto">Upload Foto</label>
                            <input type="file" class="form-control" name="foto" id="foto" value="">
                         </div>
                        
                    </div>
                    
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>     
</div> 
<div id="deleteModal{{$bukutamu->id}}" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="{{url('/bukutamu/delete/'.$bukutamu->id)}}" >
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Yakin Delete Daftar Buku Tamu ?</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Yakin</button>
                    
				</div>
			</form>
		</div>
	</div>
</div>
@endforeach

</body>
</html>