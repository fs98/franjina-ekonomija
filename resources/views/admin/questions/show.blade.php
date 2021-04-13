@extends('layouts.concept-layout')

@section('links')

<title>Pitanje</title>
<meta name="csrf-token" content="{{ csrf_token() }}" /> 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>

@endsection('links')

@section('main-content')
  
  <div class="container-fluid dashboard-content">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-12">
            <div class="page-header" id="top">
              <h2 class="pageheader-title">Pitanja</h2>
              <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ Route('admin.questions.index') }}" class="breadcrumb-link disabled">Pitanja</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lista</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <h5 class="card-header">Pitanja test</h5>
              <div class="card-body"> 
                <div class="row mb-3">
                  <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <label for="question_sender_name" class="text-secondary">Ime</label>
                    <p id="question_sender_name">{{ $question->full_name }}</p>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <label for="question_sender_email" class="text-secondary">Email</label>
                    <p id="question_sender_email">{{ $question->email }}</p>
                  </div>
                  <div class="col-12 col-md-6 col-xl-4 mb-3">
                    <label for="question_sender_telephone" class="text-secondary">Telefon</label>
                    <p id="question_sender_telephone">{{ $question->telephone }}</p>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-12">
                    <label for="question_sender_message" class="text-secondary">Poruka</label>
                    <p id="question_sender_message">{{ $question->message }}</p>
                  </div> 
                </div>
                <a href="{{ Route('admin.questions.index') }}" class="btn btn-primary mt-2">&larr; Nazad</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection('main-content')


@section('scripts')

@include('admin.include.delete-single-element')

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>

<script>
  $(document).ready(function() {
    $('#allProjectsTable').dataTable({
      "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Croatian.json"
          },
      "order" : [
        [4, "asc"]
      ],
      "aoColumnDefs": [
        { 
          "bSortable": false, 
          "aTargets": [ -1 ] // <-- gets last column and turns off sorting
         } 
     ] 
    });
  })
</script>

<script>
  $(document).on('click', '#questionModalBtn', function(){
    var questionData = JSON.parse($(this).val());
    console.log(questionData)
    $('#question_sender_name').text(questionData.full_name)
    $('#question_sender_email').text(questionData.email)
    $('#question_sender_message').text(questionData.message)
    $('#question_sender_telephone').text(questionData.telephone)
    $('#question_sender_id').text(questionData.id)
  })
  $("#questionDetails").on("hide.bs.modal", function () {
    // put your default event here
    var question_id = $('#question_sender_id').text();
    console.log(question_id) 
    
  });
</script>

@endsection('scripts')