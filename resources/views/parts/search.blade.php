<form action="{{ action('SearchController@search') }}" method="get">
    <div class="form-group row">
        <label class="col-md-3">キーワードで検索</label>
        <div class="col-md-8">
            <input type="search" class="form-control" name="cond_title" value="{{ $cond_title }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3">県名で検索</label>
        <div class="col-md-8">
            <select type="text" class="form-control" name="cond_prefecture" value="{{ $cond_prefecture }}">
                @include('parts/area_search')
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-3">カテゴリーで検索</label>
        <div class="col-md-8">
            <select name="cond_category" class="form-control mb-5" value="{{ $cond_category}}">
                <option value="スポット"/>スポット</option>
                <option value="グルメ">グルメ</option>
                <option value="誰でも">誰でも</option>
                <option value="ファミリー向け">ファミリー向け</option>
                <option value="一人でも">一人でも</option>
                <option value="その他">その他</option>
            </select>
        </div>
    </div>
    <div class="search-button col text-center">
        <input type="submit" class="btn btn-primary" value="検索する">
    </div>
</form>
