<?php


namespace app\api\controller\v1;

use app\api\model\Banner as BannerModel;
use app\api\validate\IDMustBePostiveInt;
use app\api\validate\TestValidate;
//use think\Validate;
use think\Exception;
class Banner
{
    /**
     * @param $id
     * url
     * http get
     */
    public function getBanner($id)
    {
            // 独立验证
        //验证器
//        $validate = new Validate([
//            'name'  => 'require|max:5',
//            'email' => 'email'
//        ]);
//        $data = [
//            'name'  => 'thinkphp',
//            'email' => 'thinkphpqq.com'
//        ];
//        $validate = new TestValidate();
//        $validate = new IDMustBePostiveInt();
//        $result = $validate->batch()
//            ->check($data);
//        if ($result) {
//        } else {
//
//        }
        (new IDMustBePostiveInt())->goCheck();
        try {
            $banner = BannerModel::getBannerById($id);
        } catch (Exception $ex)
        {
            $err = [
                'error_code' => 10001,
                'msg' => $ex->getMessage()
            ];
            return json($err, 400);
        }
        return $banner;

    }
}


















