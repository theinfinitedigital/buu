@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">แก้ไขประเภทย่อ</div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if ($errors->any())
                    <div class="demo-spacing-0 mb-1">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">ไม่สำเร็จ!</h4>
                            <div class="alert-body">
                                @foreach ($errors->all() as $error)
                                {{ $error }}
                                <br />
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row justify-content-center">
                        <form action="{{ route('update_sub_categories') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-10">
                                <a type="button" class="btn btn-secondary" href="/sub-categories">กลับ</a>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        categories *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" id="categorie_id" required>
                                            <option value="" disabled>select</option>
                                            @foreach($categorie as $item)
                                                <option value="{{$item->id}}" <?php if($data->categorie_id == $item->id){ echo 'selected';} ?>>{{$item->title_th}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <input type="hidden" name="id" id="id" value="{{ $data->id }}" >
                                   
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        title_th *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('title_th') is-invalid @enderror" type="text" name="title_th" id="title_th" value="{{ $data->title_th }}" required>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        title_en *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('title_en') is-invalid @enderror" type="text" name="title_en" id="title_en" value="{{ $data->title_en }}" required>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        description_th
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea name="des_th" id="des_th" class="form-control @error('des_th') is-invalid @enderror"  cols="30" rows="10">{{ $data->des_th }}</textarea>
                                    </div>
                                </div>
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        description_en
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <textarea name="des_en" id="des_en" class="form-control @error('des_en') is-invalid @enderror"  cols="30" rows="10">{{ $data->des_en }}</textarea>
                                    </div>
                                </div>

                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <img src="{{ asset($data->path) }}" alt="" id="preview" width="400px">
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        path *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('path') is-invalid @enderror" type="file" name="path" id="path" onchange="get_images(event);">
                                    </div>
                                </div>
                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        alt
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <input class="form-control @error('alt') is-invalid @enderror" type="text" name="alt" id="alt" value="{{ $data->alt }}" required>
                                    </div>
                                </div>

                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        import data
                                    </div>
                                    <div class="col-sm-5 col-md-5 col-lg-5">
                                        <input class="form-control" type="file" id="file_upload" />
                                    </div>
                                    <div class="col-sm-2 col-md-2 col-lg-2">
                                        <button type="button" class="btn btn-success" onclick="upload(<?php echo $data->id; ?>,<?php echo $data->categorie_id; ?>)">import data</button>  
                                    </div>
                                </div>

                                
                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                        enable *
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" name="enable" id="enable" <?php if($data->enable == 1){ echo 'checked';} ?> >
                                            <label class="form-check-label" for="enable"></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row my-4 justify-content-center">
                                    <div class="col-sm-3 col-md-3 col-lg-3">
                                    </div>
                                    <div class="col-sm-7 col-md-7 col-lg-7">
                                        <button type="summit" class="btn btn-success">บันทึก</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-auth-compat.js"></script>
<script>
    // var firebaseConfig = {
    //     apiKey: "AIzaSyDuivDkvHf9wp3WuvwI7TsCwtEbMnhpgVQ",
    //     authDomain: "buudata-f65f7.firebaseapp.com",
    //     databaseURL: "https://buudata-f65f7-default-rtdb.asia-southeast1.firebasedatabase.app",
    //     projectId: "buudata-f65f7",
    //     storageBucket: "buudata-f65f7.appspot.com",
    //     messagingSenderId: "248394626599",
    //     appId: "1:248394626599:web:7b861c4d08d7f684c38002",
    //     measurementId: "G-4GHZDCW5R8"
    // }

    var firebaseConfig = {
        apiKey: "AIzaSyBjBbzhepKS9Z1eNUcQTALpUtzJgKbFPZw",
        authDomain: "test-90c8f.firebaseapp.com",
        databaseURL: "https://test-90c8f.firebaseio.com",
        projectId: "test-90c8f",
        storageBucket: "test-90c8f.appspot.com",
        messagingSenderId: "864825689268",
        appId: "1:864825689268:web:ae1acda1cbea0eb31983e1",
        measurementId: "G-NRL93CL4WW"
    }
    const app  = firebase.initializeApp(firebaseConfig);
    const db = app.firestore();
    const auth = app.auth();



    // db.collection("inform_deposit")
    // .get()
    // .then((querySnapshot) => {
    //     querySnapshot.forEach((doc) => {
    //         console.log(doc.id, " => ", doc.data());
    //     });
    // })
    // .catch((error) => {
    //     console.log("Error getting documents: ", error);
    // });
    function get_images(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }


    // Method to upload a valid excel file
    function upload(sub_cat_id,cat_id) {
        var files = document.getElementById('file_upload').files;
        if(files.length==0){
        alert("Please choose any file...");
        return;
        }
        var filename = files[0].name;
        var extension = filename.substring(filename.lastIndexOf(".")).toUpperCase();
        if (extension == '.XLS' || extension == '.XLSX') {
            excelFileToJSON(files[0],sub_cat_id,cat_id);
        }else{
            alert("Please select a valid excel file.");
        }
    }

    //Method to read excel file and convert it into JSON 
    function excelFileToJSON(file,sub_cat_id,cat_id){
        try {
            var reader = new FileReader();
            reader.readAsBinaryString(file);
            reader.onload = function(e) {

                var data = e.target.result;
                var workbook = XLSX.read(data, {
                    type : 'binary'
                });
                var result = {};
                workbook.SheetNames.forEach(function(sheetName) {
                    var roa = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                    if (roa.length > 0) {
                        result = roa;
                    }
                });

                $(result).each(function (a, b) { 
                    result[a].categorie_id = cat_id
                    result[a].sub_categorie_id = sub_cat_id

                    db.collection("data_center").add(result[a])
                }) 
                
                
            }
        }catch(e){
            console.error(e);
        }
    }

</script>
