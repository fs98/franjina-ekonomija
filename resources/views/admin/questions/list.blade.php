@extends('layouts.concept-layout')

@section('links')

<title>Pitanja</title>
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
              <h5 class="card-header">Pitanja</h5>
              <div class="card-body"> 
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first" id="allProjectsTable" style="table-layout: fixed">
                    <thead>
                      <tr>
                        <th>Ime</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Poruka</th>
                        <th>Status</th>
                        <th>Upravljanje</th> 
                      </tr>
                    </thead>  
                    <tbody>
                      @foreach($questionsAll as $index => $questionsSingleRow)
                      <tr>
                        <td>{{ $questionsSingleRow->full_name }}</td>
                        <td>{{ $questionsSingleRow->email }}</td>
                        <td>{{ $questionsSingleRow->telephone }}</td>
                        <td class="text-truncate">{{ $questionsSingleRow->message }}</td>
                        <td>{!! $questionsSingleRow->status !!}</td> 
                        <td class="text-center table-column-controls"> 
                          <!-- Button trigger modal -->
                          <a type="button" class="btn btn-primary text-white" href="{{ Route('admin.questions.show', ['question' => $questionsSingleRow->id]) }}">
                            Detalji
                          </a>
                          <form action="{{ Route('admin.questions.destroy', ['question' => $questionsSingleRow->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            <button class="btn btn-danger pointer" type="button" onclick="deleteSingleItem(this)">
                              <span>Izbriši</span>
                            </button>
                            @method('delete')
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Ime</th>
                        <th>Email</th>
                        <th>Telefon</th>
                        <th>Poruka</th>
                        <th>Status</th>
                        <th>Upravljanje</th>  
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="questionDetails" tabindex="-1" aria-labelledby="questionDetailsLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="questionDetailsLabel">Detalji pitanja</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body  modal-dialog-scrollable">
          <div class="row">
            <div class="col-12 col-lg-6 mb-3">
              <label for="question_sender_name" class="text-secondary">Ime</label>
              <p id="question_sender_name"></p>
            </div>
            <div class="col-12 col-lg-6 mb-3">
              <label for="question_sender_email" class="text-secondary">Email</label>
              <p id="question_sender_email"></p>
            </div>
            <div class="col-12 col-lg-6 mb-3">
              <label for="question_sender_telephone" class="text-secondary">Telefon</label>
              <p id="question_sender_telephone"></p>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col-12">
              <label for="question_sender_message" class="text-secondary">Poruka</label>
              <p id="question_sender_message"></p>
            </div> 
          </div>
          <p class="d-none" id="question_sender_id"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Ok</button>
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

@endsection('scripts')