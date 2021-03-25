<!doctype html>
<html lang="en">
<head>
    @include('back.include.head')
    <title>Nachrichtenartikel hinzufügen</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <script src="{{ asset('back/jquery-3.5.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
  <div class="dashboard-main-wrapper">
    @include('back.include.navbar')
    @include('back.include.sidebar')
    <div class="dashboard-wrapper">
      <div class="container-fluid dashboard-content">
        <div class="row">
          <div class="col-12 col-xl-11">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header" id="top">
                  <h2 class="pageheader-title">Neuer Nachrichtenartikel</h2>
                  <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ Route('admin.index') }}" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ Route('admin.posts.index') }}" class="breadcrumb-link">Nachrichtenartikel</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Aktualiziren</li>
                      </ol>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <form action="{{ Route('admin.posts.update', ['post' => $postSingle->id]) }}" method="POST" id="update-form" enctype="multipart/form-data" autocomplete="off">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Neuer Nachrichtenartikel - Formular</h5>
                    <div class="card-body" id="card-body">
                      <div class="row px-3" id="errors-top" style="display: none;"></div>
                      <div class="form-group">
                        <label class="col-form-label" for="post_title">Titel</label>
                        <label class="label-required" for="post_title">(benötigt)</label>
                        @if(Helper::isSet($postSingle->title))
                          <input id="post_title" type="text" class="form-control" name="post_title" maxlength="512" autofocus="" value="{{ $postSingle->title }}" required="">
                        @else
                          <input id="post_title" type="text" class="form-control" name="post_title" maxlength="512" autofocus="" required="">
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="post_title_slug">Titel in URL</label>
                        <label class="label-required" for="post_title_slug">(benötigt)</label>
                        @if(Helper::isSet($postSingle->title_slug))
                          <input id="post_title_slug" type="text" class="form-control" name="post_title_slug" value="{{ $postSingle->title_slug }}" maxlength="512" readonly="" tabindex="-1">
                        @else
                          <input id="post_title_slug" type="text" class="form-control" name="post_title_slug" value="" maxlength="512" disabled="">
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="post_headline">Überschrift</label>
                        <label class="label-required" for="post_headline">(benötigt)</label>
                        @if(Helper::isSet($postSingle->headline))
                          <textarea class="form-control headline-textarea" id="post_headline" name="post_headline" maxlength="512" required="">{{ $postSingle->headline }}</textarea>
                        @else
                          <textarea class="form-control headline-textarea" id="post_headline" name="post_headline" maxlength="512" required=""></textarea>
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="post_keywords">Schlüsselwörter</label>
                        <label class="label-required" for="post_keywords">(benötigt)</label>
                        @if(Helper::isSet($postSingle->keywords))
                          <input id="post_keywords" type="text" class="form-control" name="post_keywords" maxlength="256" value="{{ $postSingle->keywords }}" required="">
                        @else
                          <input id="post_keywords" type="text" class="form-control" name="post_keywords" maxlength="256" required="">
                        @endif
                        <label class="label-not-required" for="post_keywords">Komma getrennt</label>
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="post_publish_date">Artikel Datum</label>
                        <label class="label-not-required" for="post_publish_date">(nicht benötigt)</label>
                        @if(Helper::isSet($postSingle->publish_date))
                          <input id="post_publish_date" type="date" class="form-control" name="post_publish_date" value="{{ $postSingle->publish_date }}" required="">
                        @else
                          <input id="post_publish_date" type="date" class="form-control" name="post_publish_date" required="">
                        @endif
                      </div>
                      <div class="form-group mb-0">
                        <label class="col-form-label" for="post_header_image">Header-Bild hochladen</label>
                        <label class="col-form-label" for="post_header_image">(Erforderliche Abmessungen: 1280 x 720 Pixel)</label>
                        <label class="label-required" for="post_header_image">(benötigt)</label>
                      </div>
                      <div class="custom-file">
                        <input type="file" accept="image/png, image/jpeg, image/jpg" class="custom-file-input" id="post_header_image" name="post_header_image">
                        <label class="custom-file-label color-light-grey" for="post_header_image">Wählen Sie Header-Bild</label>
                      </div>
                      <div class="form-group mt-2" id="thumbnail_preview_wrapper">
                        <img class="img-fluid" id="thumbnail_image" src="{{ asset(config('api.storage_paths_v2.posts') . $postSingle->folder_id . '/' . $postSingle->header_image) }}">
                      </div>
                      <div class="form-group mt-3">
                        <label class="col-form-label" for="post_header_image_description">Bildbeschreibung (wird angezeigt, wenn das Bild nicht angezeigt werden kann, auch als Alt-Tag bezeichnet)</label>
                        <label class="label-not-required" for="post_header_image_description">(nicht benötigt)</label>
                        @if(Helper::isSet($postSingle->header_image_alt))
                          <input id="post_header_image_description" type="text" class="form-control" name="post_header_image_description" maxlength="256" value="{{ $postSingle->header_image_alt }}">
                        @else
                          <input id="post_header_image_description" type="text" class="form-control" name="post_header_image_description" maxlength="256">
                        @endif
                      </div>
                      <div class="form-group mt-3">
                        <label class="col-form-label" for="post_header_image_url">Link auf Bild</label>
                        <label class="label-not-required" for="post_header_image_url">(nicht benötigt)</label>
                        @if(Helper::isSet($postSingle->link))
                          <input id="post_header_image_url" type="text" class="form-control" name="post_header_image_url" value="{{ $postSingle->link }}">
                        @else
                          <input id="post_header_image_url" type="text" class="form-control" name="post_header_image_url">
                        @endif
                      </div>
                      <div class="form-group">
                        <label class="col-form-label" for="post_status">Wählen Sie Status</label>
                        <label class="label-required" for="post_status">(benötigt)</label>
                        <select class="form-control" id="post_status" name="post_status" required="">
                          <option disabled="">Wählen Sie Status</option>
                          @foreach(config('api.statuses') as $statusSingle)
                            @if(Helper::isSet($postSingle->status))
                              @if(strtolower($postSingle->status) === strtolower($statusSingle))
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
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                  <div class="card">
                    <h5 class="card-header">Inhalt</h5>
                    <div class="card-body">
                      <div class="form-group">
                        <label class="col-form-label" for="post_content">Inhalt</label>
                        <label class="label-required" for="post_content">(benötigt)</label>
                        <textarea class="form-control editor" id="post_content" rows="16" name="post_content">
                          @if(Helper::isSet($postSingle->content))
                           {{ $postSingle->content }}
                          @endif
                        </textarea>
                      </div>
                      <div class="mt-2 float-right">
                        <button type="button" id="submit-button" form="update-form" class="btn btn-lg btn-secondary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @method('put')
            </form>
          </div>
          @include('back.include.back-to-top')
        </div>
      </div>
      @include('back.include.footer')
    </div>
  </div>
  @include('back.include.footer-scripts')
  <script>
    $('#post_header_image').on('change',function(e){
      //get the file name
      var fileName = e.target.files[0].name;
      //replace the "Choose a file" label
      $(this).next('.custom-file-label').html(fileName);
      var image = document.getElementById('thumbnail_image');
      image.src = URL.createObjectURL(event.target.files[0]);
      $("#thumbnail_preview_wrapper").css('display', 'inherit');
  	});
	</script>
	<script>
    var titleField = $("#post_title");
    var titleSlugField = $("#post_title_slug");

    titleField.on('input', function() {
      titleSlugField.val(replaceChars(titleField.val()));
    });
	</script>

  
  <script src="{{ asset('back/replaceChars.js')}}"></script>
  <script src="{{ asset('back/put-request.js')}}"></script>
  @include('back.include.ckeditor')

  <script>
    for (instance in window.editor.instances) {
      window.editor.instances[instance].updateElement();
    }
  </script>
</body>
</html>