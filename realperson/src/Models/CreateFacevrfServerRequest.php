<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\REALPERSON\Models;

use AlibabaCloud\Tea\Model;

class CreateFacevrfServerRequest extends Model
{
    // OAuth模式下的授权token
    /**
     * @var string
     */
    public $authToken;

    /**
     * @var string
     */
    public $productInstanceId;

    // 认证模式码
    /**
     * @var string
     */
    public $bizCode;

    // h5认证完成后，服务端回调此地址通知商户认证结果
    /**
     * @var string
     */
    public $callbackUrl;

    // 真实姓名
    /**
     * @var string
     */
    public $certName;

    // 证件号码
    /**
     * @var string
     */
    public $certNo;

    // 证件类型，如身份证
    /**
     * @var string
     */
    public $certType;

    // 预留扩展参数
    /**
     * @var string
     */
    public $externParam;

    // 自定义比对源人脸图像，base64编码格式
    /**
     * @var string
     */
    public $facialPictureRef;

    // 身份信息来源类型，如证件
    /**
     * @var string
     */
    public $identityType;

    // metainfo 环境参数，需要通过客户端 SDK 获取
    /**
     * @var string
     */
    public $metaInfo;

    // 外部唯一标识。用于定位。
    // 值为32位长度的字母数字组合前面几位字符是商户自定义的简称，中间可以使用一段时间，后段可以使用一个随机或递增序列
    /**
     * @var string
     */
    public $outerOrderNo;

    // 回跳地址
    /**
     * @var string
     */
    public $returnUrl;

    // 场景ID
    /**
     * @var string
     */
    public $sceneId;

    // 商户自定义的用户ID
    /**
     * @var string
     */
    public $userId;

    // 用户的IP
    /**
     * @var string
     */
    public $userIp;

    // 用户的手机号
    /**
     * @var string
     */
    public $userMobile;

    // callbackUrl回调时是否需要重试，默认false(不需要重试)
    /**
     * @var bool
     */
    public $callbackNeedRetry;
    protected $_name = [
        'authToken'         => 'auth_token',
        'productInstanceId' => 'product_instance_id',
        'bizCode'           => 'biz_code',
        'callbackUrl'       => 'callback_url',
        'certName'          => 'cert_name',
        'certNo'            => 'cert_no',
        'certType'          => 'cert_type',
        'externParam'       => 'extern_param',
        'facialPictureRef'  => 'facial_picture_ref',
        'identityType'      => 'identity_type',
        'metaInfo'          => 'meta_info',
        'outerOrderNo'      => 'outer_order_no',
        'returnUrl'         => 'return_url',
        'sceneId'           => 'scene_id',
        'userId'            => 'user_id',
        'userIp'            => 'user_ip',
        'userMobile'        => 'user_mobile',
        'callbackNeedRetry' => 'callback_need_retry',
    ];

    public function validate()
    {
        Model::validateRequired('bizCode', $this->bizCode, true);
        Model::validateRequired('certName', $this->certName, true);
        Model::validateRequired('certNo', $this->certNo, true);
        Model::validateRequired('certType', $this->certType, true);
        Model::validateRequired('identityType', $this->identityType, true);
        Model::validateRequired('outerOrderNo', $this->outerOrderNo, true);
        Model::validateRequired('sceneId', $this->sceneId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['auth_token'] = $this->authToken;
        }
        if (null !== $this->productInstanceId) {
            $res['product_instance_id'] = $this->productInstanceId;
        }
        if (null !== $this->bizCode) {
            $res['biz_code'] = $this->bizCode;
        }
        if (null !== $this->callbackUrl) {
            $res['callback_url'] = $this->callbackUrl;
        }
        if (null !== $this->certName) {
            $res['cert_name'] = $this->certName;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->externParam) {
            $res['extern_param'] = $this->externParam;
        }
        if (null !== $this->facialPictureRef) {
            $res['facial_picture_ref'] = $this->facialPictureRef;
        }
        if (null !== $this->identityType) {
            $res['identity_type'] = $this->identityType;
        }
        if (null !== $this->metaInfo) {
            $res['meta_info'] = $this->metaInfo;
        }
        if (null !== $this->outerOrderNo) {
            $res['outer_order_no'] = $this->outerOrderNo;
        }
        if (null !== $this->returnUrl) {
            $res['return_url'] = $this->returnUrl;
        }
        if (null !== $this->sceneId) {
            $res['scene_id'] = $this->sceneId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userIp) {
            $res['user_ip'] = $this->userIp;
        }
        if (null !== $this->userMobile) {
            $res['user_mobile'] = $this->userMobile;
        }
        if (null !== $this->callbackNeedRetry) {
            $res['callback_need_retry'] = $this->callbackNeedRetry;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFacevrfServerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['auth_token'])) {
            $model->authToken = $map['auth_token'];
        }
        if (isset($map['product_instance_id'])) {
            $model->productInstanceId = $map['product_instance_id'];
        }
        if (isset($map['biz_code'])) {
            $model->bizCode = $map['biz_code'];
        }
        if (isset($map['callback_url'])) {
            $model->callbackUrl = $map['callback_url'];
        }
        if (isset($map['cert_name'])) {
            $model->certName = $map['cert_name'];
        }
        if (isset($map['cert_no'])) {
            $model->certNo = $map['cert_no'];
        }
        if (isset($map['cert_type'])) {
            $model->certType = $map['cert_type'];
        }
        if (isset($map['extern_param'])) {
            $model->externParam = $map['extern_param'];
        }
        if (isset($map['facial_picture_ref'])) {
            $model->facialPictureRef = $map['facial_picture_ref'];
        }
        if (isset($map['identity_type'])) {
            $model->identityType = $map['identity_type'];
        }
        if (isset($map['meta_info'])) {
            $model->metaInfo = $map['meta_info'];
        }
        if (isset($map['outer_order_no'])) {
            $model->outerOrderNo = $map['outer_order_no'];
        }
        if (isset($map['return_url'])) {
            $model->returnUrl = $map['return_url'];
        }
        if (isset($map['scene_id'])) {
            $model->sceneId = $map['scene_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_ip'])) {
            $model->userIp = $map['user_ip'];
        }
        if (isset($map['user_mobile'])) {
            $model->userMobile = $map['user_mobile'];
        }
        if (isset($map['callback_need_retry'])) {
            $model->callbackNeedRetry = $map['callback_need_retry'];
        }

        return $model;
    }
}
