<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use App\Helper\Config;
use App\Helper\StatusCode;
use Illuminate\Http\Request;

class ProductService extends AdminService
{
    public function listProductPagination() {
        return $this->repository_product->listProductPagination();
    }

    public function createProduct(Request $request) {
        $cateId = $request->category_id;
        $cate = $this->repositoty_category->detailCate($cateId);
        $thumbnail = '';
        if ($cate) {
            $arrImg = $request->thumbnails;

            if ($arrImg) {
                foreach ($arrImg as $img) {
                    $thumbnail .= $img . ',';
                }
            }

            $data = [
                'category_id' => $request->category_id,
                'name' => $request->name,
                'title' => $request->title,
                'thumbnail' => $thumbnail,
                'description' => $request->description,
                'type' => Config::TYPE_NORMAL
            ];
            if ($this->repository_product->createProduct($data)) {
                return StatusCode::STATUS_SUCCESS;
            }
            return StatusCode::STATUS_ERROR;
        }
        return StatusCode::CATE_DELETED;
    }

    public function detailProduct(Request $request) {
        $id = $request->query('prdId');
        return $this->repository_product->detailProduct2($id);
    }

    public function updateProduct(Request $request): bool
    {
        $id = $request->query('prdId');
        $product = $this->repository_product->detailProduct2($id);
        $thumbnail = '';
        if ($product) {
            $arrImg = $request->thumbnails;
            if ($arrImg) {
                foreach ($arrImg as $img) {
                    $thumbnail .= $img . ',';
                }
            }

            $product->name = $request->name;
            $product->title = $request->title;
            $product->thumbnail = $thumbnail;
            $product->description = $request->description;
            return $product->save();
        }
        return false;
    }

    public function deleteProduct($id): bool
    {
        $product = $this->repository_product->detailProduct2($id);
        if ($product) {
            $product->status = Config::STATUS_DELETED;
            return $product->save();
        }
        return false;
    }

    public function getTotalProduct() {
        return $this->repository_product->getTotalProduct();
    }
}
