@extends('admin.layoutquantri')
@section('pagetitle','DANH SÁCH sale')
@section('main')
@include("admin/sale/loopsale")
@endsection
@section('jsscript')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>

<script>
      $(function(){
        $('#datatable1').DataTable({
          responsive: true,     
          pageLength:5,       
          language: {
            searchPlaceholder: 'Tìm kiếm...',
            sSearch: '',
            lengthMenu: '_MENU_ items/page',
            paginate: {previous: " < ", next:" > " },
            lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
            zeroRecords: "Không tìm thấy",
            info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
            infoEmpty: "Không có dòng nào",
            infoFiltered: "(Lọc trong _MAX_ tin)",
          }
        });
      });
</script>

@endsection