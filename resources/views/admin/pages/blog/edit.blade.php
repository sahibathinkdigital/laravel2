@extends('admin.layouts.admin-layout')
@section('title')
    Blog Edit
@endsection
@section('content')
    <div class="content">
        <div class="container">
            <div class="card-body">
                <h2>Update Blog</h2>
                <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="title">Blog Title</label>
                        <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}" required>
                    </div>

                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea name="desc" id="summernote" class="form-control" rows="5" required>{{ $blog->desc }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" name="category" id="category" class="form-control" value="{{ $blog->category }}" required>
                    </div>

                    <div class="form-group">
                        <label for="seo_desc">SEO Description</label>
                        <input type="text" name="seo_desc" id="seo_desc" class="form-control" value="{{ $blog->seo_desc }}" required>
                    </div>

                    <div class="form-group">
                        <label for="keywords">Keywords</label>
                        <input type="text" name="keywords" id="keywords" class="form-control" value="{{ $blog->keywords }}" required>
                    </div>

                    <div class="form-group">
                        <label for="image">Upload New Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>

                    <!-- Show current image if exists -->
                    @if ($blog->image_path)
                        <div class="form-group">
                            <p>Current Image:</p>
                            <img src="{{ asset($blog->image_path) }}" alt="{{ $blog->title }}" style="width: 150px; height: auto;">
                        </div>
                    @endif

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('admin.blog') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 200,
            toolbar: [
                ['style', ['style']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['fontname', 'fontsize', 'strikethrough', 'superscript', 'subscript']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            fontNames: [
                'Arial', 'Times New Roman','Satoshi', 'Arial Black', 'Calibri', 'Cambria','Impact','Tahoma',
                'Bookman','Satoshi-Variable'
            ],
            fontSizes: ['8', '10', '12', '14', '16', '18', '20', '22', '24', '28', '32', '36', '48', '72'],
            styleTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6']
        });
    });
</script>

@endsection


@section('style_tag')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
