@extends('dashboard.layouts.main')



@section('container')
        <div id="content">
                <!-- Topbar -->
                 @include('dashboard.layouts.topbar')
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Flowchart Application</h1>
                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal"  data-target="#manual_aplikasi">
                     Upload Attachment
                    </button>
                </div>
        </div>


{{-- // Manual Aplikasi --}}
<div class="modal fade" id="manual_aplikasi">
     <div class="modal-dialog  modal-dialog-centered-xl ">
         <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
                 <h4 class="modal-title">Upload Attachment</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label="close">
                     <span aria-hidden="true">&times; </span>
                 </button>
             </div>
             <!-- Modal body -->
             <div class="modal-body">
                 <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                         <div class="col-12">
                             <div class="form-group">
                                 <label>Attachment</label>
                                 <input type="file" name="manual_aplikasi" class="form-control" required autofocus>
                             </div>
                        </div>
                    </div>
                 </form>
             </div>
         </div>
     </div>
</div>

@endsection


