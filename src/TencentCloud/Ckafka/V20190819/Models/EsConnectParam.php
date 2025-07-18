<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Es连接源参数
 *
 * @method integer getPort() 获取Es的连接port
 * @method void setPort(integer $Port) 设置Es的连接port
 * @method string getUserName() 获取Es连接源的用户名
 * @method void setUserName(string $UserName) 设置Es连接源的用户名
 * @method string getPassword() 获取Es连接源的密码
 * @method void setPassword(string $Password) 设置Es连接源的密码
 * @method string getResource() 获取Es连接源的实例资源
 * @method void setResource(string $Resource) 设置Es连接源的实例资源
 * @method boolean getSelfBuilt() 获取Es连接源是否为自建集群
 * @method void setSelfBuilt(boolean $SelfBuilt) 设置Es连接源是否为自建集群
 * @method string getServiceVip() 获取Es连接源的实例vip，当为腾讯云实例时，必填
 * @method void setServiceVip(string $ServiceVip) 设置Es连接源的实例vip，当为腾讯云实例时，必填
 * @method string getUniqVpcId() 获取Es连接源的vpcId，当为腾讯云实例时，必填
 * @method void setUniqVpcId(string $UniqVpcId) 设置Es连接源的vpcId，当为腾讯云实例时，必填
 * @method boolean getIsUpdate() 获取是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUpdate(boolean $IsUpdate) 设置是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
 */
class EsConnectParam extends AbstractModel
{
    /**
     * @var integer Es的连接port
     */
    public $Port;

    /**
     * @var string Es连接源的用户名
     */
    public $UserName;

    /**
     * @var string Es连接源的密码
     */
    public $Password;

    /**
     * @var string Es连接源的实例资源
     */
    public $Resource;

    /**
     * @var boolean Es连接源是否为自建集群
     */
    public $SelfBuilt;

    /**
     * @var string Es连接源的实例vip，当为腾讯云实例时，必填
     */
    public $ServiceVip;

    /**
     * @var string Es连接源的vpcId，当为腾讯云实例时，必填
     */
    public $UniqVpcId;

    /**
     * @var boolean 是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUpdate;

    /**
     * @param integer $Port Es的连接port
     * @param string $UserName Es连接源的用户名
     * @param string $Password Es连接源的密码
     * @param string $Resource Es连接源的实例资源
     * @param boolean $SelfBuilt Es连接源是否为自建集群
     * @param string $ServiceVip Es连接源的实例vip，当为腾讯云实例时，必填
     * @param string $UniqVpcId Es连接源的vpcId，当为腾讯云实例时，必填
     * @param boolean $IsUpdate 是否更新到关联的Datahub任务
注意：此字段可能返回 null，表示取不到有效值。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("SelfBuilt",$param) and $param["SelfBuilt"] !== null) {
            $this->SelfBuilt = $param["SelfBuilt"];
        }

        if (array_key_exists("ServiceVip",$param) and $param["ServiceVip"] !== null) {
            $this->ServiceVip = $param["ServiceVip"];
        }

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("IsUpdate",$param) and $param["IsUpdate"] !== null) {
            $this->IsUpdate = $param["IsUpdate"];
        }
    }
}
