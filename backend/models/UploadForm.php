<?php

namespace backend\models;

use backend\components\uploader\SimpleImage;
use common\models\Attachment;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $imageFiles;
    /**
     * @var $file UploadedFile
     */
    public $file;

    private $fileName;


    public function rules()
    {
        return [
            [['imageFiles'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg', 'maxFiles' => 4],
        ];
    }

    /**
     * @param $desktopWidth
     * @param $mobileWidth
     * @param $file
     */
    public function upload($desktopWidth, $mobileWidth, $file): void
    {
        if (!file_exists(\Yii::$app->basePath . '/../frontend/web/images/mobile')) {
            mkdir(\Yii::$app->basePath . '/../frontend/web/images/mobile', 0777, true);
        }
        if (!file_exists(\Yii::$app->basePath . '/../frontend/web/images/desktop')) {
            mkdir(\Yii::$app->basePath . '/../frontend/web/images/desktop', 0777, true);
        }
        $this->file = $file;
        $this->fileName = base64_encode($file->baseName . time());


        if ($this->validate()) {

            $desktopPath = '../../frontend/web/images/desktop/' . $this->fileName . '.' . $file->extension;
            $mobilePath = '../../frontend/web/images/mobile/' . $this->fileName . '.' . $file->extension;
            $this->file->saveAs($desktopPath);
            copy($desktopPath, $mobilePath);

            chmod($desktopPath,0777);
            chmod($mobilePath,0777);


            $desktopDestinationPath = '../../frontend/web/images/desktop/' . $this->fileName . '.jpg';
            $mobileDestinationPath = '../../frontend/web/images/mobile/' . $this->fileName . '.jpg';
            $this->cropImage($desktopWidth, $desktopPath, $desktopDestinationPath, $file->extension);
            $this->cropImage($mobileWidth, $mobilePath, $mobileDestinationPath, $file->extension);
        }
    }

    /**
     * @param $width
     * @param $pathFrom
     * @param $pathTo
     * @param $extension
     */
    public function cropImage($width, $pathFrom, $pathTo, $extension)
    {
        $image = new SimpleImage($pathFrom);
        $image->resizeToWidth($width);
        if ($extension !== 'jpg') {
            $image->png2jpg($pathFrom, $pathTo, 80);
        }
        $image->save($pathTo, 2, 75, 0777);
    }


    public function saveUpload($alt)
    {
        $attachment = new Attachment();
        $attachment->alt = $alt;
        $attachment->url = $this->fileName . '.jpg';
        $attachment->save();

        return $attachment->id;
    }
}