@extends('Admin.layouts.Master')

@section('content')
        <h1>ثبت مقالات</h1>
        <form action="{{ route('Panel.Article.StoreArticle') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div id="name">
                <label for="article_name">نام مقاله</label><br />
                <input type="text" id="article_name" name="name" required>
            </div>
            <div id="description">
                <label for="article_description">توضیحات</label><br />
                <textarea style="height: 200px" id="article_description" name="description" required></textarea><br>
            </div>
            <div id="writer">
                <label for="article_writer">نام نویسنده</label><br />
                <input type="text" id="article_writer" name="writer" required>
            </div>
            <div id="category">
                <label for="article_category">دسته بندی</label>
                <select id="article_category" name="category_id">
                    @foreach ($categories as $category)

                    <option value="{{$category->id}}">{{$category->name}}</option>
                    <option value="highschool"></option>

                    @endforeach
                </select>
            </div>
            <div id="image">
                <label for="productimage">تصویر</label><br />
                <input type="file" id="article_image" name="image" required>
            </div>
            <button style="cursor: pointer" type="submit" name="submit">ثبت مقاله</button>
        </form>
    {{-- </main>
</body>

</html> --}}
@endsection
