{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの＠yield（'title')に'映画の登録画面'を埋め込む --}}
@section('title','映画の登録画面')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>映画の登録</h2>
                <form action="{{ action('Admin\MovieController@create') }}" method="post" enctype="multipart/form-data">
                   
                    
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title_kana">並べ替え用よみかな（ひらがな）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title_kana" value="{{ old('title_kana') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">ジャンル</label>
                        <div class="col-md-10">
                            <div class="checkbox">
                                <form action="./genre.php" method="POST">
                                    <label><input type="checkbox" name="genre[]" value="action">アクション</label>
                                    <label><input type="checkbox" name="genre[]" value="comedy">コメディ</label>
                                    <label><input type="checkbox" name="genre[]" value="SF">SF</label>
                                    <label><input type="checkbox" name="genre[]" value="horror">ホラー</label>
                                    <label><input type="checkbox" name="genre[]" value="history">歴史</label>
                                    <label><input type="checkbox" name="genre[]" value="human_drama">ヒューマンドラマ</label>
                                    <label><input type="checkbox" name="genre[]" value="love_story">ラブストーリー</label>
                                    <label><input type="checkbox" name="genre[]" value="classic">クラシック</label>
                                    <label><input type="checkbox" name="genre[]" value="youth">青春</label>
                                    <label><input type="checkbox" name="genre[]" value="fantasy">ファンタジー</label>
                                    <label><input type="checkbox" name="genre[]" value="family">家族</label>
                                    <label><input type="checkbox" name="genre[]" value="suspense">サスペンス</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{ action('Admin\MovieController@index') }}" role="button" class="btn btn-primary">登録</a>
                    </div>
                </form>    
            </div>
        </div>
    </div>
@endsection