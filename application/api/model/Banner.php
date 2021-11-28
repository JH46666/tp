<?php


namespace app\api\model;

use think\Exception;

class Banner
{
    public function getBannerById($id)
    {
        // TODO 去获取banner id号
      try{
          1 / 0;
      }catch(Exception $ex)
      {
          // todo 记录下来
        throw $ex;
      }
      return 'this is banner info';
    }
}