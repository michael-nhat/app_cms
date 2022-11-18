<?php
namespace app\index\controller;

include 'Gumlet/ImageResize.php';
include 'Gumlet/ImageResizeException.php';

use Exception;
use Gumlet\ImageResize;
use Gumlet\ImageResizeException;

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

function imageCorrect($image, $background = true, $canvas_w, $canvas_h)
{
    if (!$background) {
        $background = imagecolorallocate($image, 0, 0, 0);
    }
    $img_h = imagesy($image);
    $img_w = imagesx($image);

    // create new image (canvas) of proper aspect ratio
    $img = imagecreatetruecolor($canvas_w, $canvas_h);

    // fill the background
    imagefill($img, 0, 0, $background);

    // offset values (center the original image to new canvas)
    $xoffset = ($canvas_w - $img_w) / 2;
    $yoffset = ($canvas_h - $img_h) / 2;

    // copy
    // imagecopy($img, $image, $xoffset, $yoffset, $canvas_w, $canvas_h, $img_w, $img_h);
    imagecopymerge($img, $image, $xoffset, $yoffset, 0, 0, $img_w, $img_h, 100);

    // destroy old image cursor
    //imagedestroy($image);
    return $img; // returns a black original file area properly sized/filled
    //return $image; // works to return the unprocessed file
}

function ossResize(ImageResize $image, $oss_params)
{
    if (!array_key_exists('limit', $oss_params)) {
        $oss_params['limit'] = '1';
    }
    // convert string to text
    $allow_enlarge = !filter_var($oss_params['limit'], FILTER_VALIDATE_BOOLEAN);

    if ($oss_params['m'] == 'fill') {
        if ($oss_params['w'] and $oss_params['h']) {
            $image->resizeToBestFit($oss_params['w'], $oss_params['h'], $allow_enlarge);

            $smallerImage = imagecreatefromstring($image->getImageAsString());
            $dest_image2 = imageCorrect($smallerImage, null, $oss_params['w'], $oss_params['h']);

            header('Content-Type: image/jpeg');
            imagejpeg($dest_image2);
            imagedestroy($dest_image2);

            // never work, impossible
            // $image2 = ImageResize::createFromString(base64_decode($smallerImage));
            // $image2->output();
        }
    } else {
        if ($oss_params['m'] == 'fixed') {
            if ($oss_params['w'] and $oss_params['h']) {
                $image->resize($oss_params['w'], $oss_params['h'], $allow_enlarge);
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
        $image->output();
    }
}

function printErrs()
{
    $numargs = func_num_args();

    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo ' errr: <pre>';
        echo 'iii: ';
        echo $i;
        echo 'valll: ';
        var_dump($arg_list[$i]);
        echo '</pre>';
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
            $filePath = __DIR__ . '/./images/jiangzi_tupian/' . $file_name;
            
            // printErrs(($filePath));
            $image = new ImageResize($filePath);
            ossResize($image, $oss_params);
        } catch (Exception $e) {
            printErrs($e);
        }
        die();
        // exit();
        // return;
    }

}
