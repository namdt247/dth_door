<?php
/**
 * Created by PhpStorm.
 * User: namdt
 * Date: 8/15/22
 */

namespace App\Http\Service\Admin;

use App\Helper\Config;
use Illuminate\Http\Request;

class ProductService extends AdminService
{
    public function listProductPagination() {
        return $this->repository_product->listProductPagination();
    }

    public function createProduct(Request $request) {
        $arrImg = $request->thumbnails;
        $thumbnail = '';
        foreach ($arrImg as $img) {
            $thumbnail .= $img . ',';
        }
        $data = [
            'category_id' => $request->category_id,
            'name' => $request->name,
            'title' => $request->title,
            'thumbnail' => $thumbnail,
            'description' => $request->description,
            'type' => Config::TYPE_NORMAL
        ];
        return $this->repository_product->createProduct($data);
    }

    public function detailProduct(Request $request) {
        $id = $request->query('prdId');
        return $this->repository_product->detailProduct($id);
    }

    public function updateProduct(Request $request): bool
    {
        $id = $request->query('prdId');
        $product = $this->repository_product->detailProduct($id);
        if ($product) {
            $arrImg = $request->thumbnails;
            $thumbnail = '';
            foreach ($arrImg as $img) {
                $thumbnail .= $img . ',';
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
        $product = $this->repository_product->detailProduct($id);
        if ($product) {
            $product->status = Config::STATUS_DELETED;
            return $product->save();
        }
        return false;
    }
}
