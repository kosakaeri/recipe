@extends('layouts.app')

@section('content')
<div class="container recipes-create">
    <div class="container-s">
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
            <div class="procedure form-group row">
                <label class="col-sm-2">1.画像</label>
                <div class="img-post col-sm-10">
                    <input type="file" name="image" onchange="previewFile()">
                    <img src="" height="200" alt="Image preview...">
                </div>
                <div id="preview"></div>
            </div>
            <div class="procedure procedure2 form-group row">
                <label class="col-sm-2">2.レシピ名</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                </div>
            </div>
            <div class="procedure form-group row">
                <label class="col-sm-2">3.材料／分量</label>
                <div class="material-form col-6 col-sm-5">
                    <div class="material">
                        <label>材料</label>
                        <input type="text" class="form-control" name="material[]">
                    </div>
                </div>
                <div class="amount-form col-6 col-sm-5">
                    <div class="amount">
                        <label>分量</label>
                        <input type="text" class="form-control" name="amount[]">
                    </div>
                    <p class="text-right add-form">
                        <input type="button" class="btn pull-right" value="追加" />
                    </p>
                </div>
            </div>
            <div class="procedure form-group row">
                <label class="col-sm-2">4.作り方</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="howto">{{ old('howto') }}</textarea>
                </div>
            </div>
            <div class="procedure procedure5 form-group row">
                <label class="col-sm-2">5.合うお酒</label>
                <div class="alcohol-repertory col-sm-10">
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="ビール">ビール</label>
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="赤ワイン">赤ワイン</label>
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="白ワイン">白ワイン</label>
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="焼酎">焼酎</label>
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="ハイボール">ハイボール</label>
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="レモンサワー">レモンサワー</label>
                    <label><input type="checkbox" class="form-control" name="alcohol[]" value="日本酒">日本酒</label>
                </div>
            </div>
            <!--{{ csrf_field() }}-->
            @csrf
            <div class="post">
                <input type="submit" class="btn post-btn post-btn2" value="投稿する">
            </div>
        </form>
    </div>
</div>

@endsection

<script type="text/javascript">
    /* global $ */
    console.log("start");
    window.addEventListener("load", function() {
        console.log("load");
        $(".add-form").on("click", function() {
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

        reader.addEventListener("load", function() {
            // convert image file to base64 string
            preview.src = reader.result;
        }, false);

        if (file) {
            reader.readAsDataURL(file);
        }
    }
    
</script>