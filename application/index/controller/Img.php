<?php
namespace app\index\controller;

include 'Gumlet/ImageResize.php';
include 'Gumlet/ImageResizeException.php';
use Gumlet\ImageResize;
use Gumlet\ImageResizeException;
use Exception;

function getParams($xossp)
{
    $term = explode(",", $xossp)[0];
    $oss_params_str = substr($xossp, strlen($term) + 1);

    $i = 0;
    $head = explode(",", $oss_params_str)[0];
    do {
        $oss_params_str = substr($oss_params_str, strlen($head) + 1);
        $key = explode("_", $head)[0];
        $val = explode("_", $head)[1];
        $oss_params[$key] = $val;
        $i++;
        $head = explode(",", $oss_params_str)[0];
    } while ($head != '' and $i <= 100);
    return $oss_params;
}

function ossResize(ImageResize $image, $oss_params)
{
    if (!array_key_exists('limit', $oss_params)) {
        $oss_params['limit'] = '1';
    }
    $allow_enlarge = !filter_var($oss_params['limit'], FILTER_VALIDATE_BOOLEAN);

    if (array_key_exists('m_fixed', $oss_params)) {
        if ($oss_params['w'] and $oss_params['h']) {
            $image->resize($oss_params['w'], $oss_params['h'], $allow_enlarge);
        }
    } else {
        if (array_key_exists('m_fill', $oss_params)) {
            if ($oss_params['w'] and $oss_params['h']) {
                $image->resizeToBestFit($oss_params['w'], $oss_params['h'], $allow_enlarge);
                if ($image->getDestHeight() == $oss_params['h']) {
                    
                } else {

                } 
                $image2String = $image->getImageAsString();
                $dest_image = imagecreatetruecolor($oss_params['w'], $oss_params['h']);
                $background = imagecolorallocate($dest_image, 255, 255, 255);
                imagefilledrectangle($dest_image, 0, 0, $image->getDestWidth(), $image->getDestHeight(), $background);
            }
        } else {
            if ($oss_params['w'] and $oss_params['h']) {
                $image->resizeToBestFit($oss_params['w'], $oss_params['h'], $allow_enlarge);
            } else if ($oss_params['w']) {
                $image->resizeToWidth($oss_params['w'], $allow_enlarge);
            } else if ($oss_params['h']) {
                $image->resizeToHeight($oss_params['h'], $allow_enlarge);
            }
        }
    }
}

class Img extends Base
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        try {
            $params = input();
            $xossp = input()['x-oss-process'];
            $oss_params = getParams($xossp);
            $file_name = $params['img'];
            $filePath = __DIR__ . '/./images/' . $file_name;
            $image = new ImageResize($filePath);

            ossResize($image, $oss_params);
            // print('echo: '. $image->getDestHeight(). ',' );
            // $image->resize(90, 90);
            // $result = $image->output();
        } catch (ImageResizeException $e) {
            echo ("resize error");
        }
        die();
        // return;
    }

    public function index2()
    {
        $this->assign('version', ['code' => "custom version"]);
        return $this->label_fetch('index/index2');
    }
}
