{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.admin')
{{-- admin.blade.phpの＠yield（'title')に'映画の登録画面'を埋め込む --}}
@section('title','映画の検索画面')
{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>映画の検索</h2>
                <form action="{{ action('Admin\MovieController@index') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="submit" value="五十音順">
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">ジャンル</label>
                        <div class="col-md-10">
                            <div class="checkbox">
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
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="登録画面へ">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection