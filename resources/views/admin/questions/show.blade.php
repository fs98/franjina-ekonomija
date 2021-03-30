    <!doctype html>
<html lang="en">
<head>
    @include('admin.include.head')
    <title>Benutzer hinzufügen</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <div class="dashboard-main-wrapper">
        @include('admin.include.navbar')
        @include('admin.include.sidebar')
        <div class="dashboard-wrapper">
            <div class="dashboard-content m-0">
                <div class="row">
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="page-header" id="top">
                                    <h2 class="pageheader-title">Profil bearbeiten</h2>
                                    <div class="page-breadcrumb">
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="{{ Route('adminIndexRender') }}" class="breadcrumb-link">Dashboard</a></li>
                                                <li class="breadcrumb-item"><a href="{{ Route('userAllRender') }}" class="breadcrumb-link">Profil</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">Bearbeiten</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Profil bearbeiten</h5>
                                    <div class="card-body">
                                    	{!! Form::open(['action' => ['UserController@userSingleUpdate', $userSingle['id']], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off']) !!}
                                            <div class="row m-4">
                                                <div class="col-lg-5 col-xl-4 mb-2">
                                                    <style type="text/css">
                                                        
                                                        .ml-profile {
                                                            margin-left: 15px !important;
                                                        }
                                                        @media(max-width:1200px) {
                                                            
                                                            .ml-profile {
                                                                margin-left: 0px !important;
                                                            }
                                                        }
                                                        .blank-image {
                                                          width: 100%;
                                                          min-height: 238.97px;
                                                          background-color: #f8f8f8;
                                                        }
                                                        input, select {
                                                            background-color: #e9ecef !important;
                                                        }
                                                        input:focus, select:focus {
                                                            background-color: #fff !important;
                                                        }
                                                    </style>
                                                    <div class="profile-avatar-holder form-group justify-content-center">
                                                    	@if(array_key_exists('gender', $userSingle))
                                                    		@if($userSingle['gender'] === 0)
                                                    			<img class="w-100" id="newSponsorTeamSponsorInputPreview" src="{{ asset('images/avatars/female-blank.png') }}">
                                                    		@elseif($userSingle['gender'] === 1)
                                                    			<img class="w-100" id="newSponsorTeamSponsorInputPreview" src="{{ asset('images/avatars/male-blank.png') }}">
                                                    		@else
                                                    			<img class="w-100" id="newSponsorTeamSponsorInputPreview" src="{{ asset('images/avatars/blank.jpg') }}">
                                                    		@endif
                                                    	@else
                                                    		<img class="w-100" id="newSponsorTeamSponsorInputPreview" src="{{ asset('images/avatars/blank.jpg') }}">
                                                    	@endif
                                                        <div class="custom-file mt-3 mb-3">
                                                            <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input" name="newSponsorTeamSponsorInput" id="newSponsorTeamSponsorInput" onchange="loadFileOne(event)" style="cursor: pointer;">
                                                            <label class="custom-file-label" for="newSponsorTeamSponsorInput" style="text-align: center; background-color: #0097a1 !important;border-color: #0097a1 !important;font-size: 14px;padding: 9px 16px !important; border-radius: 2px;color:#fff;cursor: pointer !important;">Neuen Avatar hochladen</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-xl-8">
                                                    <div class="ml-profile">
                                                        <div class="form-group">
                                                            <label for="userSingleNameInput" class="col-form-label">Vorname</label>
                                                            <input type="text" class="form-control" id="userSingleNameInput" name="userSingleNameInput" value="{{ !empty($userSingle['name']) ? $userSingle['name'] : ''  }}" maxlength="36" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userSingleSurnameInput" class="col-form-label">Nachname</label>
                                                            <input type="text" class="form-control" id="userSingleSurnameInput" name="userSingleSurnameInput" value="{{ !empty($userSingle['surname']) ? $userSingle['surname'] : '' }}" maxlength="36" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userSingleEmailInput">E-Mail-Addresse</label>
                                                            <input type="text" class="form-control" id="userSingleEmailInput" name="userSingleEmailInput" value="{{ !empty($userSingle['email']) ? $userSingle['email'] : '' }}" maxlength="80">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userSingleUsername">Nutzername</label>
                                                            <input type="text" class="form-control" id="userSingleUsername" value="{{ !empty($userSingle['username']) ? $userSingle['username'] : '' }}" disabled="">
                                                        </div>
                                                        @if(!empty($userSingle['birthday']))
                                                            <div class="form-group">
                                                                <label for="userSingleBirthdayInput" class="col-form-label">Geburtstag</label>
                                                                <input type="date" class="form-control" id="userSingleBirthdayInput" name="userSingleBirthdayInput" value="{{ !empty($userSingle['birthday']) ? (new DateTime($userSingle['birthday']))->format('Y-m-d') : '' }}" required="">
                                                            </div>
                                                        @else
                                                            <div class="form-group">
                                                                <label for="userSingleBirthdayInput" class="col-form-label">Geburtstag</label>
                                                                <input type="date" class="form-control" id="userSingleBirthdayInput" name="userSingleBirthdayInput" required="">
                                                            </div>
                                                        @endif
                                                        <div class="form-group">
                                                            <label for="userSingleMobileNumberInput" class="col-form-label">Telefonnummer</label>
                                                            <input type="text" class="form-control" id="userSingleMobileNumberInput" name="userSingleMobileNumberInput" value="{{ !empty($userSingle['phoneNumber']) ? $userSingle['phoneNumber'] : '' }}" maxlength="20">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userSingleGenderInput">Wähle Geschlecht</label>
                                                            <label for="userSingleGenderInput" class="label-required">(benötigt)</label>
                                                            <select class="form-control" id="userSingleGenderInput" name="userSingleGenderInput" required="">
                                                            	@if(array_key_exists('gender', $userSingle))
                                                            		@if($userSingle['gender'] === 0)
                                                            			<option value="">Wähle Geschlecht</option>
	                                                                	<option value="1">Männlich</option>
	                                                                	<option selected="" value="0">Weiblich</option>
                                                            		@elseif($userSingle['gender'] === 1)
                                                            			<option value="">Wähle Geschlecht</option>
	                                                                	<option selected="" value="1">Männlich</option>
	                                                                	<option value="0">Weiblich</option>
                                                            		@else
                                                            			<option selected="" value="">Wähle Geschlecht</option>
	                                                                	<option value="1">Männlich</option>
	                                                                	<option value="0">Weiblich</option>
                                                            		@endif
                                                            	@else
                                                            		<option selected="" value="">Wähle Geschlecht</option>
                                                                	<option value="1">Männlich</option>
                                                                	<option value="0">Weiblich</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userSingleStudentNumberInput" class="col-form-label">Schülernummer</label>
                                                            <label for="userSingleStudentNumberInput" class="label-not-required">(nicht benötigt)</label>
                                                            @if(array_key_exists('studentNumber', $userSingle))
                                                            	@if($userSingle['studentNumber'] !== null && $userSingle['studentNumber'] !== ''))
                                                            		<input id="userSingleStudentNumberInput" type="text" class="form-control" name="userSingleStudentNumberInput" maxlength="128" value="{{ $userSingle['studentNumber'] }}" required="">
                                                            	@else
                                                            		<input id="userSingleStudentNumberInput" type="text" class="form-control" name="userSingleStudentNumberInput" maxlength="128" required="">
                                                            	@endif
                                                            @else
                                                            	<input id="userSingleStudentNumberInput" type="text" class="form-control" name="userSingleStudentNumberInput" maxlength="128" required="">
                                                            @endif
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="userSingleStatusInput">Wählen Sie Status</label>
                                                            <label for="userSingleStatusInput" class="label-required">(benötigt)</label>
                                                            <select class="form-control" id="userSingleStatusInput" name="userSingleStatusInput" required="">
                                                                <option value="active" selected="">Aktiv</option>
                                                                <option value="inactive">Inaktiv</option>
                                                                <option value="invalid">Invalid</option>
                                                                <option value="unknown">Unbekannt</option>

                                                                @foreach(config('api.statuses') as $statusSingle)
			                                                        @if(!empty($userSingle['status']))
			                                                            @if(lcfirst($userSingle['status']) === lcfirst($statusSingle))
			                                                            <option selected="" value="{{ $statusSingle }}">{{ ucfirst($statusSingle) }}</option>
			                                                            @else
			                                                            <option value="{{ $statusSingle }}">{{ ucfirst($statusSingle) }}</option>
			                                                            @endif
			                                                        @else
			                                                            @if($statusSingle === 'active')
			                                                            <option selected="" value="{{ $statusSingle }}">{{ ucfirst($statusSingle) }}</option>
			                                                            @else
			                                                            <option value="{{ $statusSingle }}">{{ ucfirst($statusSingle) }}</option>
			                                                            @endif
			                                                        @endif
			                                                    @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="mt-2 float-right">
                                                            <button type="submit" class="btn btn-secondary">Bearbeiten</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{Form::hidden('_method', 'PUT')}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-6 col-sm-12 col-12">
                        <div class="sidebar-nav-fixed">
                            <ul class="list-unstyled">
                                <li><a href="#top" class="active">Zurück nach oben</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.footer-scripts')
    <script type="text/javascript">
        var loadFileOne = function(event) {
            var image = document.getElementById('newSponsorTeamSponsorInputPreview');
            image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
</body>
</html>