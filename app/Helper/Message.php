<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Helper;

class Message
{
    const MESSAGE_UPDATE_SUCCESS = 'Cập nhật thành công';
    const MESSAGE_UPDATE_FAILED = 'Cập nhật thất bại';

    const MESSAGE_CREATE_SUCCESS = 'Tạo mới thành công';
    const MESSAGE_CREATE_FAILED = 'Tạo mới thất bại';

    const MESSAGE_DELETE_SUCCESS = 'Xoá thành công';
    const MESSAGE_DELETE_FAILED = 'Xoá thất bại';

    const MESSAGE_LOGIN_FAILED = 'Tên đăng nhập/mật khẩu không chính xác';

    const MESSAGE_RECORD_NOT_FOUND = 'Bản ghi đã bị xoá trên hệ thống';
    const MESSAGE_PRODUCT_NOT_FOUND = 'Không tìm thấy thông tin sản phẩm';

    const MESSAGE_SEND_REQUEST_SUCCESS = 'Gửi yêu cầu thành công, chúng tôi sẽ sớm liên hệ với bạn';
    const MESSAGE_SEND_REQUEST_FAILED = 'Gửi yêu cầu thất bại, vui lòng thử lại';

    const MESSAGE_CATE_HAS_PRODUCT = 'Không thể xoá danh mục hiện có chứa sản phẩm';
    const MESSAGE_CATE_DELETED = 'Không thể thêm sản phẩm vào danh mục đã bị xoá';

    const MESSAGE_ERROR = 'Có lỗi xảy ra, vui lòng thử lại';
}
