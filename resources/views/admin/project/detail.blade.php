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
                                <a href="/admin/project/list"> Quản lý công trình </a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Chi tiết công trình</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Chi tiết công trình </h1>
                </header>
                <div class="page-section">
                    <div id="base-style" class="card">
                        <div class="card-body">
                            <form method="post" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="tf1"> Tên công trình <span class="text-danger">(*)</span></label>
                                            <input type="text" name="name" value="{!! $project->name !!}" class="form-control" aria-describedby="tf1Help" placeholder="Tên danh mục sản phẩm" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="category_id"> Loại công trình <span class="text-danger">(*)</span></label>
                                            <select class="form-control" name="type">
                                                <option value="1" {!! $project->type == 1 ? 'checked' : '' !!} class="form-control">
                                                    Nhà dân
                                                </option>
                                                <option value="2" {!! $project->type == 2 ? 'checked' : '' !!} class="form-control">
                                                    Biệt thự
                                                </option>
                                                <option value="3" {!! $project->type == 3 ? 'checked' : '' !!} class="form-control">
                                                    Công trình khác
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="tf1"> Hình ảnh công trình <span class="text-danger">(*)</span></label>
                                            <div class="form-group" id="project_form">
                                                <div class="thumbnails">
                                                    <label type="button" class="btn btn-outline-success">
                                                        <input type="button" class="text-center center-block file-upload"
                                                               id="upload_widget" accept="image/*" multiple=""
                                                               style="margin-top: 20px;display: none;">
                                                        <i class="fa fa-upload"></i>&nbsp; Tải ảnh lên
                                                    </label>

                                                    <ul class="cloudinary-thumbnails">
                                                        <?php $arrImg = $project->thumbnail_array; ?>
                                                        @foreach($project->large_photos as $uri)
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
                                </div>
                                <div class="form-actions d-flex justify-content-center">
                                    <button class="btn btn-primary mr-1" type="submit">Create</button>
                                    <a href="/admin/project/list" class="btn btn-outline-primary" type="submit">
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
                form: '#project_form',
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
