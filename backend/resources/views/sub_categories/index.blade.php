@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('จัดการประเภทย่อย') }}</div>

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
                    <div class="row">
                        <div class="col-4">
                            <a type="button" class="btn btn-secondary" href="/">กลับ</a>
                            <a type="button" href="{{ route('add_sub_categories') }}" class="btn btn-primary">เพิ่ม</a>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>title_th</td>
                                <td>title_en</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $key => $item )
                                <tr>
                                    <th scope="row">{{$key+1}}</th>
                                        <td>{{$item->title_th}}</td>
                                        <td>{{$item->title_en}}</td>
                                        <td>
                                            <a class="btn btn-warning" href="<?php echo '/edit/sub-categories/'.$item->id.'&'.$item->uid ?>">แก้ไข</a>
                                            <a href="{{ route('del_sub_categories',[$item->id]) }}" class="btn btn-danger" onclick="return confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไหม?');">ลบ</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">ไม่มีข้อมูล</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="conatiner mt-5">
                        <br><br>
                        <div class="form-group">
                            <label for="csvData">Paste JSON Object Data:</label>
                            <textarea id="josnData" class="form-control" rows="10">
                                    [
                                    {"name":"John", "age":30, "city":"New York"},
                                    {"name":"Smith", "age":40, "city":"London"}
                                    ]
                            </textarea>
	                    </div>		
                        <button class="btn" type="button" id="exportWorksheet" >Export Worksheet</button>
                    </div>
                    
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination justify-content-center mt-2">
                                {{ $data->links() }}
                            </ul>
                        </nav>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-auth-compat.js"></script>
<script>
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
    const data_center = firebase.firestore().collection('data_center');

   

    $( document ).ready(function() {
        $("#exportWorksheet").click(function() {
            // var josnData = $("#josnData").val();
           
            data_center.get().then((snapshot) => 
            {
                const data = snapshot.docs.map((doc) => ({
                    id: doc.id,
                    ...doc.data(),
                }));
                var jsonDataObject = eval(data);		
                exportWorksheet(jsonDataObject); 
            });

        });

    });

    function exportWorksheet(jsonObject) {
        var myFile = "myFile.xlsx";
        var myWorkSheet = XLSX.utils.json_to_sheet(jsonObject);
        var myWorkBook = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(myWorkBook, myWorkSheet, "myWorkSheet");
        XLSX.writeFile(myWorkBook, myFile);
    }

</script>
