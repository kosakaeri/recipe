@extends('layouts.app')

@section('content1')
    <div class="container">
        <h3>レシピ新規作成</h3>
            <!--データを送るタグ-->
            <form action="{{ action('RecipeController@store') }}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2">レシピ名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                </div>
                <div class="form-group row">
                        <label class="col-md-2">材料/分量</label>
                        <div class="col-5 material-form">
                            <div class="material">
                            <label>材料</label>
                                <input type="text" class="form-control" name="amount[]">                                
                            </div>
                        </div>
                        <div class="col-5 amount-form">
                            <div class="amount">
                            <label>分量</label>
                                <input type="text" class="form-control" name="amount[]">
                            </div>
                            <p class="text-right add-form">
                                <input type="button" class="btn btn-warning pull-right" value="追加" />
                                </p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">作り方</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="howto">{{ old('howto') }}</textarea>
                         </div>
                         </div>
                    <div class="form-group row">
                        <label class="col-md-2">この料理に合うお酒</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="alcohol">
                         </div>
                         </div>
                    <div class="form-group row">
                        <label class="col-md-2">画像</label>
                        <div class="col-md-4">
                            <input type="file" onchange="previewFile()">
                            <img src="" height="200" alt="Image preview...">
                        </div>
                        <div id="preview"></div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-warning" value="更新">
                </form>
                
            </div>
    
@endsection

<script type="text/javascript">
/* global $ */
    console.log("start");
    window.addEventListener("load",function(){
        console.log("load");
         $(".add-form").on("click",function(){
             console.log("click");
            $(".material:last").after('<input type="text" class="form-control" name="material[]"></div>');
            $(".amount:last").after('<input type="text" class="form-control" name="amount[]"></div>');
    });
    });
    </script>
    
<script type="text/javascript">
    function previewFile() {
  const preview = document.querySelector('img');
  const file = document.querySelector('input[type=file]').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function () {
    // convert image file to base64 string
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}
</script>