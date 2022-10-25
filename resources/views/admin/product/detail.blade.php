@extends('admin.layout_admin_master')

@section('main-content')
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin/dashboard"><i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/admin/product/list"> Sản phẩm </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Chi tiết sản phẩm</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Chi tiết sản phẩm </h1>
                </header>
                <div class="page-section">
                    <div id="base-style" class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="tf1"> Tên sản phẩm <span class="text-danger">(*)</span></label>
                                            <input type="text" value="{!! $product->name !!}" name="name" class="form-control" aria-describedby="tf1Help" placeholder="Tên danh mục sản phẩm" required>
                                        </div>
                                        <div class="form-group">
                                            <label> Danh mục sản phẩm <span class="text-danger">(*)</span></label>
                                            <select class="form-control" name="category_id">
                                                @foreach($lstCate as $cate)
                                                    <option value="{{ $cate->id }}" {!! $cate->id === $product->category_id ? 'checked' : '' !!}  class="form-control">
                                                        {{ $cate->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tf6">Tiêu đề sản phẩm</label>
                                            <textarea class="form-control" name="title" rows="5" placeholder="Nhập tiêu đề mô tả ngắn về sản phẩm...">{!! $product->title !!}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"> Giá sản phẩm <span class="text-danger">(*)</span></label>
                                            <input type="number" value="{!! $product->price !!}" name="price" class="form-control" aria-describedby="tf1Help" placeholder="Giá sản phẩm" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="tf1"> Hình ảnh sản phẩm <span class="text-danger">(*)</span></label>
                                            <div class="form-group" id="product_form">
                                                <div class="thumbnails">
                                                    <label type="button" class="btn btn-outline-success">
                                                        <input type="button" class="text-center center-block file-upload"
                                                               id="upload_widget" accept="image/*" multiple=""
                                                               style="margin-top: 20px;display: none;">
                                                        <i class="fa fa-upload"></i>&nbsp; Tải ảnh lên
                                                    </label>

                                                    <ul class="cloudinary-thumbnails">
                                                        <?php $arrImg = $product->thumbnail_array; ?>
                                                        @foreach($product->large_photos as $uri)
                                                            <li class="cloudinary-thumbnail active">
                                                                <img src="{!! $uri !!}" alt="" height="60">
                                                                <a href="javascript:void(0)" class="cloudinary-delete">x</a>
                                                            </li>
                                                            <input name="thumbnails[]" value="{!! $arrImg[$loop->index] !!}" data-cloudinary-public-id="{!! $arrImg[$loop->index] !!}" hidden>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="description">Nội dung</label>
                                            <textarea name="description" id="description" rows="15">{!! $product->description !!}</textarea>
                                            <script type="text/javascript">ckeditor('description')</script>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions d-flex justify-content-center">
                                    <button class="btn btn-primary mr-1" type="submit">Update</button>
                                    <a href="/admin/product/list" class="btn btn-outline-primary" type="submit">
                                        Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main-script')
    <script type="text/javascript">
        const myWidget = cloudinary.createUploadWidget(
            {
                cloudName: 'tena2472',
                uploadPreset: 'f1xubjga',
                multiple: true,
                resourceType: "image",
                clientAllowedFormats: ["png", "jpeg", "gif"],
                maxImageFileSize: 5*1024*1024,
                form: '#product_form',
                fieldName: 'thumbnails[]',
                thumbnails: '.thumbnails'
            }, function (error, result) {
                if (!error && result && result.event === "success") {
                    const arrayThumbnailInputs = document.querySelectorAll('input[name="thumbnails[]"]');
                    for (let i = 0; i < arrayThumbnailInputs.length; i++) {
                        arrayThumbnailInputs[i].value = arrayThumbnailInputs[i].getAttribute('data-cloudinary-public-id');
                    }
                }
            }
        );

        $('#upload_widget').click(function () {
            myWidget.open();
        })

        $('body').on('click', '.cloudinary-delete', function () {
            const splittedImg = $(this).parent().find('img').attr('src').split('/');
            const splittedIDImg = splittedImg[splittedImg.length - 1].split('.');
            const imgName = splittedImg[splittedImg.length - 2] + '/' + splittedIDImg[0];
            $('input[data-cloudinary-public-id="' + imgName + '"]').remove();
            $(this).parent().remove();
        });
    </script>
@endsection
